## DRY (Don't Repeat Yourself) Nedir ? 
Geliştirdiğimiz yazılımlarda, -hatta biraz daha derine girim; sınıflarda/metodlarda asıl katma değeri oluştururuz. Yani temelinde, bir metod içerisindeki yazdığımız algoritma ya da oluşturduğumuz obje modeli karşılamamız gereken ihtiyacın ya da çözülmesi gereken problemin cevabıdır. Çözmeye çalıştığımız problemler büyüdükçe ve karmaşık hale geldikçe, daha önce kullanmış olduğumuz cevapları tekrar kullanmaya başlarız. Bu noktada DRY prensibi dur der. Kendini tekrarlama diye karşımıza çıkar.

Geliştirdiğimiz yazılımlarda, çözüm olarak oluşturduğumuz yapıların yazılım içerisinde tek bir tane olması gereklidir. Bunun önüne geçemezsek, bir problem için, aynı çözümün birden fazla versiyonu kodun içerisinde kendine yer bulur… Gelişir, gelişir, büyür ve kodun bakımını zorlaştırır. E-mail validasyonu yapan bir yapı ile aynı validasyonun daha farklı bir string operasyonu ile yapılıyor olması, yazılım içinde de tutarsızlığa yol açar. Sonra uğraş dur…


Şimdi biraz örnekler üzerinden ilerleyelim. Öncelikle bu prensibin dikkate alınmadığı (kötü) örneği ve dezavantajlarını inceleyeceğiz;


```
namespace BadExample
{
    public class Cart
    {
        public int GetUserCredit()
        {
            var userCredit = 25;

            // Credit Manipulation
            return userCredit + 1000;
        }
    }
    
    public class Checkout
    {
        public int GetUserCredit()
        {
            var userCredit = 15;
            
            // Credit Manipulation
            return userCredit + 1000;
        }
    }
}
```

Bu örnekte Cart ve Checkout sınıflarında kullanıcı kredisini +1000 olacak şekilde manipüle ediyoruz. Bu manipülasyonun daha birçok yerde tekrarladığını düşünün ve sonra bir gün artık +1000 değil -250 olarak güncellenmesi gerektiğini düşünün ve sadece şu iki soruyu yanıtlayalım;

- Bu kuralın geçerli olduğu yerleri bulmak için proje kaynak kodlarında nerelerde +1000 geçiyor diye mi bakacaksınız? (Ya +1000 şeklinde arama yaptığınızda projenizde 300 dosya çıkarsa?)
- Hadi tertipli geliştirilen bir proje olduğunu düşünelim ve GetUserCredit’i arayıp bulduğunuz her yerde +1000’i -250 olarak mı güncelleyeceksiniz? (Ya değiştirmeyi unuttuğunuz/atladığınız bir yer olursa?)


Peki DRY prensibini dikkate aldığımızda bu kod nasıl olurdu?

```
namespace GoodExample
{
    public class Cart
    {
        public double GetUserCredit()
        {
            var userCredit = 25;

            // Credit Manipulation
            return UserHelper.GetUserCredit(userCredit);
        }
    }
    
    public class Checkout
    {
        public double GetUserCredit()
        {
            var userCredit = 15;

            // Credit Manipulation
            return UserHelper.GetUserCredit(userCredit);
        }
    }
    
    public class UserHelper
    {
        public static double GetUserCredit(double userCredit)
        {
            return userCredit + 1000;
        }
    }
}
```


> Sources 
> - https://halilsafakkilic.com/dry
> - https://www.digitalocean.com/community/tutorials/what-is-dry-development
> - https://thevaluable.dev/dry-principle-cost-benefit-example/
> - https://verraes.net/2014/08/dry-is-about-knowledge/
