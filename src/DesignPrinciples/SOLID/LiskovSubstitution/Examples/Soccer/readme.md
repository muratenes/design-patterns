## LiskovSubstitution Futbol Örneği

Liskov Substitution Principle’a göre alt sınıflardan oluşturulan nesnelerin üst sınıfların nesneleriyle yer
değiştirdiklerinde aynı davranışı göstermek zorundadır. **Yani; türetilen sınıflar, türeyen sınıfların tüm özelliklerini
kullanmak zorundadır.**

Aşağıdaki kodda Striker aslında ihtiyaç duymadığı KeepTheBall metodunu barındırmakta yani bir forvet oyuncusu topu
eliyle tutamaz. Normal şartlarda bu fonksiyonu kullanamayacak, bu fonksiyonda exception fırlatması gerekecektir. Yani
aslında gereksiz bir kod kalabalığı ve kod yönetimi açısından ek bir efor oluşacaktır, bunun nedeni base classda aslında
gereksiz bir metod bulunmasıdır

```
public abstract class Player
    {
        public virtual void KickTheBall()
        {
            // Ball was kicked !
        }

        public virtual void KeepTheBall()
        {
            // Ball was kept !
        }
    }

    public class Striker : Player
    {
        public override void KeepTheBall()
        {
            // Striker should not keep the ball !
            throw new NotImplementedException();
        }

        public override void KickTheBall()
        {
            // Ball was kicked by Striker !
        }
    }

    public class Goalkeeper : Player
    {
        public override void KeepTheBall()
        {
            // Ball was kept by Goalkeeper!
        }

        public override void KickTheBall()
        {
            // Ball was kicked by Goalkeeper !
        }
    }
```

Bu ayrıştırmayı yapmak için aşağıdaki gibi bir kodlama yapmalıyız.

```
	public abstract class Player
    {
        public virtual void KickTheBall()
        {
            // Ball was kicked !
        }
    }

    public interface IKeepTheBall
    {
        void KeepTheBall();
    }

    public class Striker : Player
    {
        public override void KickTheBall()
        {
            // Ball was kicked by Striker !
        }
    }

    public class Goalkeeper : Player,IKeepTheBall
    {
        public override void KickTheBall()
        {
            // Ball was kicked by Goalkeeper !
        }

        public void KeepTheBall()
        {
            // Ball was kept by Goalkeeper !
        }
    }
```