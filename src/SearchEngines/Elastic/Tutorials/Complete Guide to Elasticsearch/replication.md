### ElasticSearch Replication Yapısı

Donanımlar zaman zaman fail olabilir yahut yazılımda buggy durumlar olabilir ve sistemler durabilir. Sizin verilerinizin tuttuğunuz donanımın kapasitesi ne kadar büyük olursa bu donanımın durmasının riski de o kadar fazla olur. Bunu göz önünde bulundurarak
replication sistemini kullanmak yerinde olacaktır.

Replika aslında bir veri kümesinin kopyası ya da yedeği gibi düşünülebilir. Elasticsearch shardlarının replikalara dağıtılmasını destekler. Yani Shardların kopyalarını farklı makinalarda fail durumlarına karşı tutabiliriz. Bir shard kopyası yaratılıp bir
makinada tutulduğunda bu replica denir. Shardın kendisine de primary shard denir. İkisine birden de replication grup diyebiliriz.

![replication.png](images%2Freplication.png)

yukarıda gördüğünüz örnek, her 256 gigabayttan dört parçaya bölünmüş bir terabaytlık bir indeksle Elasticsearch mimarisine girişten alınan örneğe dayanmaktadır. Parçalar artık primary shard ve her birinin bir replica shardı var.

Replicalar esasen bir kaç ana amaca hizmet eder. İlki high avalibilityi sağlayabilmektir. Yani node ya da shard fail olduğunda bu shardın eksikliğini replikasyon ile tamamlayabiliriz. Diğer bir amaç ise search performansını artırmaktır. Çünkü searchler replika
serverlarda da paralelde çalıştırılabilir. Yani aslında replikalarda cluster’in search gücünün bir parçasıdır. Bir diğeri de load balancingi sağlayabilmesidir.

Aslında shardlar gibi replicalar da default olarak yaratılır. Default olarak her sharda bir replika yaratılır. Yani birden fazla nodeunuz ve 5 primary shardınız var ise 5 adet de replicanız olur. Herhangi node’a bir şey olması durumunda veriniz kendini korur.
Bu da neden elasticsearch verilerinizi birden fazla node’da tutmanız gerektiğinin önemli bir sebebidir.

Sonuç olarak, replica denen şey shardın bir kopyasıdır. Amacı yüksek avalibilty sağlamak ve search performansını artırmakken esas amacı da sistemin fault tolerant olmasını sağlamaktır. Bu sebeple asla aynı node’a aynı shardın replikasını koymamalıyız.

Peki bir tık daha ileri konseptleri düşünürsek mesela 1 shardımız var ve 5 ayrı replikasını oluşturduk. Bu 5 ayrı replika nasıl orjinal sharda paralel update olacak? Yani aslında sistem nasıl çalışıyor?

Elastic search primary backup adında bir modeli data replikasyonu için kullanır. Yani replika grubunun primary shardı index operasyonları için entry point görevi görür. Yani biraz daha türkçeleştirirsek insert update delete gibi tüm operasyonlar primary sharda
gider. Primary shard operasyonların validationu ve herşeyin doğru olduğunundan emin olmakla sorumludur. Bu görev object beklenen bir alana number yollamaya çalışmak gibi her requestin yapısal olarak doğruluğunu denetleme gibi işleri de içerir. Operasyon
primarty shard tarafından kabul edildiğinde yine primary shard tarafından çalıştırılır. Operasyon tamamlandığında, aynı operasyon her replikaya yollanır. Eğer birden fazla replika varsa bu replikalar üzerinde paralel çalıştırılır. Yani güncel verinin snapshotı
yerine operasyon elden ele taşınır. Bu operasyon tüm replikalarda doğru bir şekilde çalıştığında ve replikalar primary sharda response döndüğünde, primary shard da clienta operasyonun tamamlandığına dair response döner.

![replication-1.png](images%2Freplication-1.png)