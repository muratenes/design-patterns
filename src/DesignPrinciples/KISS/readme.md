## KISS Nedir ?

Clean Code ve SOLID konuları ile birlikte bilmemiz gereken bir diğer prensip KISS(Keep It Simple, Stupid!)'tir. Bu
prensip genel anlamda vurguladığı şey: Her şeyi basit yapmaktır! KISS bize yazdığımız kodda olabildiğince basit,
anlaşılır ve sade olması gerektiğini söyler. Aptal olacak kadar basit yapmalısınız ki o kodda hata olmadığı açık olsun.
En basit hali ile de bir metot yazarken o metodun tek bir işi görevi olmalıdır. Eğer farklı bir iş yapılacak ise onu
yeni bir metoda almak gerekir.

**Her satırda bir işlem yap:** Kodunuzun her satırda sadece bir iş yapmasına yönelik geliştirme yapmak en iyisidir. Aynı
satır içerisinde farklı işlemleri aynı anda yapmayın. Siz ve başka geliştiriciler satıra baktığında tek bir işi anlasın.
Aksi durumda o satırda anlam karmaşası olup geliştiricinin anlaması güçleşebilir. Buna uyarak kodlarınızın anlaşılabilir
olmasını sağlayabilirsiniz.

### Basit Kod İçin:

- Kodlarınızda değişken, metot ve isimlendirmelerine dikkat etmek.
- Her iş tek seferde olacak şekilde yazılmalıdır. Tanımlamalar tek seferde olmalıdır.
- Kodunuza baktığınız zaman karmaşık olmamalı hem görüntü hem de anlaşılırlık bakımından güzel görünmelidir.
- Basit kod temelde doğru soyutlamalar ile sağlanabilir.
- Kodlarınızda gerektiği yerlerde dokümantasyon kullanımına özen gösterilmelidir.
- Satır, metot ve sınıf seviyesinde iş mantığı farklı şeylerdir. Satır seviyesinde bir iş sadece o satırdaki yapılan işi kapsadığı gibi sınıf seviyesindeki iş ise o sınıf içerisinde barındırdığı tüm işlerin genel anlamda tek bir anlam ifade etmesidir.
- Basit kod anlaşılır ve kısa koddur. Anlaşılır kod ise standart ve odaklı koddur.
- Gereksiz değişken ve özellikler kaldırılmalıdır.
- Kodu atmaktan korkmayın. Kodu yeniden düzenlerken her zaman istenmeyen kodu kaldırın.
- Kodunuzu basitleştirmeden önce soruna odaklanın, nasıl çözebileceğiniz ile ilgili alternatif çözümler üretin. Sorunları iş parçalarına bölüp öyle çözmeye başlayın.
- Her zaman kod geliştirme standartlarını takip etmelisiniz.






> Sources:
> - https://www.yasinsunmaz.com/clean-code-a-giris.html
> - http://devnot.com/2015/prensip-sahibi-yazilimlar-1-kiss-yagni/