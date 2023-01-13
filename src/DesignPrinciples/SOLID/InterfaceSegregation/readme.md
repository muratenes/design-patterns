### Interface Segregation Nedir ?

Sorumlulukların hepsini tek bir arayüze toplamak yerine daha özelleştirilmiş birden fazla arayüz oluşturmayı tercih
etmemizi söyleyen prensiptir.

Tek bir interface yerine kullanımlarına göre parçalanmış birden fazla interface ile işlemleri yürütmeliyiz. Yani her
farklı sorumluluğun kendine özgü bir arayüzü olması gerekmektedir. Böylece interface’i kullanan kişide sadece ihtiyacı
olanlarla ilgilenmiş olur. Birden fazla amaç için yalnızca bir arayüzümüz var ise buna gerektiğinden fazla method ya da
özellik ekliyoruz demektir, bu da IS prensibine aykırı davrandığınız anlamına gelir..

> Nesneler asla ihtiyacı olmayan property/metot vs içeren interfaceleri implement etmeye zorlanmamalıdır

**Example** :

Interface segregation prensibine uymayan bir örnekle başlayabiliriz. Animal interface’ini ele alalım ve hayvanlara ait
özellikleri barındırsın. Uçmak, koşmak, havlamak gibi özellikler olduğunu düşünelim.

```
public interface Animal {
   void fly();
   void run();
   void bark();
}
```

Kuşlar uçar ve koşar, ancak havlayamazlar diye varsayabiliriz . Havlamayı boşuna implement etmiş olduk.

```
public class Bird implements Animal {
        public void bark() { 
             /* do nothing */ 
        }
        public void run() {
            System.out.println("Koşan kuş");
        }
        public void fly() {
            System.out.println("Uçan kuş");
        }
}
```

Kediler koşar, ama uçup, havlayamazlar. Havlamayı kedi için boşuna implement etmiş olduk.

```
public class Cat implements Animal {
        public void fly() {
             /* do nothing */        
        }
        public void bark() {
             /* do nothing */        
        }
        public void run() {
            System.out.println("Koşan kedi");
            // logic        
        }
}
```

Böyle bir yapı okunabilirliği azaltır. Gerek duyulmayan metotları implement etmek zorunda kaldık ve bakımı zor bir hal
almış oldu.Burada yapılması gereken; her temel özelliğe ayrı bir interface yaratarak Interface Segregation sınıfına
uygun hale getirmektir.

Koşabilme, Uçabilme, Havlayabilme özelliklerini kendi metotlarını içeren şekilde ayrı interfaceler olarak tanımlayalım.

```
public interface Flyable {
    void fly();
}
public interface Runnable {
    void run();
}
public interface Barkable {
    void bark();
}
```

Kuş için uçabilme ve koşabilme özelliklerini kazandırmak istediğimizde Flyable ve Runnable interfacelerini implement
etmemiz yeterli olacaktır. Havlama özelliğini boşu boşuna implement etmek zorunda kalmadık.

```
public class Bird implements Flyable, Runnable {
    public void run() {
        System.out.println("Kuş,Koşuyorum");
        //logic
    }
    public void fly() {
        System.out.println("Kuş, Uçuyorum.");
        //logic
    }
}
```

> Source : 
> https://gokhana.medium.com/interface-segregation-prensibi-nedir-kod-%C3%B6rne%C4%9Fiyle-soli%CC%87d-ac0fd6812ecf