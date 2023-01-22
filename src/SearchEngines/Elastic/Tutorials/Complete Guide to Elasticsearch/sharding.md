### ElasticSearch Sharding Yapısı

ElasticSearch dağıtık mimarisi nedeniyle oldukça ölçeklenebilirdir. Bunun en önemli konseptlerinden birisi de shardingtir.

Shardingin ne olduğuna girmeden önce, neden shardinge ihtiyacımız olduğu üzerine biraz konuşalım. Çok fazla dökümana sahip olan bir indexiniz olduğunu ve totalde 1 terabyte boyutu olduğunu düşünelim. Ancak elinizde iki adet makinanız yani nodeunuz var. Her
biri de 512 GB bilgi store edebiliyor. Açıkça hiç bir nodeunuz dökümanı komple taşıyacak kadar kapsamlı değil. Bu durumda dataları bölmemiz gerekecektir. Ve burada sharding konsepti imdadımıza yetişir. Sharding indexleri adı shard olan daha küçük parçalara
böler. Bir veri bütününün yatayda bölümlenmiş halidir. Yani her shard indexin bir subsetini taşır ve kendi içinde bağımsızdır. Yani shardı bağımsız index olarak düşünebiliriz.

![sharding.png](images%2Fsharding.png)

Shardlarla ilgili harika olan şey, cluster içindeki herhangi bir nodeda barındırılabilmeleridir. Bununla birlikte, clusterınızdaki node sayısına bağlı olduğundan, bir indexin parçalarının birden çok fiziksel veya sanal makineye dağıtılması gerekmez.
Dolayısıyla, önceki örnekte, 1 terabaytlık indexi her biri 256 gigabayt veri içeren dört parçaya bölebiliriz ve bu parçalar daha sonra iki düğüm arasında dağıtılabilir, yani bir bütün olarak dizin artık sahip olduğumuz disk kapasitesi.

![sharding-1.png](images%2Fsharding-1.png)

Shardingin önemli olmasının iki ana sebebi vardır. Birincisi verinizi dağıtarak scale etmenizi sağlar. Eğer ki sürekli büyüyen bir datanız varsa, sharding sayesinde darboğazlarla karşılaşmazsınız. Shardingin ikinci önemi ise operasyonları multiple nodelar
üzerine dağıtıp paralelize edebiliriz. Bu da performansı artırır.
Bir indexin kaç tane shardı olabilir? Bunu opsiyonel olarak index yaratımı sırasında belirlenebilir olmakla beraber default sayısı 5tir. Eğer çok büyük datalarla uğraşmıyorsanız, default olarak gelen 5 shard sizin için yeterli olabilir ve sharding konseptiyle
ekstra ilgilenmenize gerek kalmaz. Ancak diyelim ki bir indexteki shardın sayısını artırmamız gerekti ancak index zaten yaratılmış durumda. Bu gibi durumlarda shardların sayısını artıramazsınız. Bunun yerine istediğiniz sayıda sharda sahip yeni bir index
yaratıp datanızı yeni indexe taşımalısınız ya da farklı sharding stratejilerini araştırıp uygulayabilirsiniz
Sonuç olarak toparlarsak, sharding dediğimiz kavram indexlerin data hacimlerini yatayda parçalara ayırmak demektir. Bu da verinizi multiple nodelar arasında distribute etmenizi sağlar. Nodeunuzun kapasitesi tüm veriyi tutmaya yetmediğinde ya da, performansı
arttırmak gibi durumlarda kullanılabilir..