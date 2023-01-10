## Single Responsibility Nedir ?

Single Responsibility; Tek işi, tek sorumlulukta yapma sanatı olarak özetlenebilir.

Single responsibility prensibi sınıflarımızın iyi tanımlanmış tek bir sorumluluğu olması gerektiğini anlatmaktadır. Bir
sınıf (nesne) yalnızca bir amaç uğruna değiştirilebilir, o amaçta o sınıfa yüklenen sorumluluktur, yani bir sınıfın
yapması gereken yalnızca bir işi olması gerekir.

Eğer geliştirdiğiniz sınıf ya da fonksiyon birden fazla amaca hizmet ediyorsa, bu kurala aykırı bir geliştirme sürecinde
olduğunuz anlamına geliyor. Bunu farkettiğinizde amaçlara uygun olarak parçalamanız gerekmektedir.

Gereksinimler değiştiğinde, yazılan kodda da değişmesi gereken kısımlar olacaktır. Bu da yazılan sınıfların(nesnelerin)
bir kısmının ya da tamamının değiştirilmesi anlamına gelir. **Bir sınıf ne kadar fazla sorumluluk alırsa, o kadar fazla
değişime uğramak zorunda kalır**. Böylece birçok kod parçasının değişmesine neden olurken, yeniden yazımda;
değişikliklerin uygulanması da bir o kadar zorlaşır.

**Test** 

— Bir sorumluluğu olan bir sınıfta çok daha az sayıda test-case olacaktır.

**Daha az bağımlılık**

— Tek bir sınıfta daha tek bir sorumluluğunun olması daha az bağımlılık sağlayacaktır.

**Yalın ve anlaşılır yapılar**

— Daha az sorumluluk daha yalın veya küçük yapılar ulaşmasını sağlar. Daha küçük yapılar ise
monolitik yapılara göre çok daha avantajlıdır ve kod anlaşılırlığını/okunurluğunu artırır.