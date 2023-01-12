## Open / Closed Presibi Nedir ?

Yeni gelecek özellikler için varolan kodu değiştirmeden, varolan yapıyı bozmadan esnek bir geliştirme modeli
uygulayarak, önü açık ve gelecekten gereksinimlere kolayca adapte olup, ayak uydurabilen bir model uygulamalıyız.

## Example:

Single Responsibility’e sahip bir Alan hesaplayıcı program yazmaya başladığımızı varsayalım ancak sadece dikdörtgen
hesabına ihtiyacımız oldugunu düşünelim.

~~~~
public class Rectangle {
    private double length; 
    private double height; 
    // getters/setters ... 
}
~~~~

```
# AreaService.java

public class AreaService {

    public double calculateArea(List<Rectangle>... shapes) {
        double area = 0;
        for (Rectangle rect : shapes) {
            area += (rect.getLength() * rect.getHeight());
        }
        return area;
    }
}
```

Area servisimiz dikdörtgen hesabını yapacak seviyede, ancak bizim ihtiyaçlarımız daire hesabının da yapılmasını da
gerektirmeye başladı diyelim.

```
public class Circle { 
    private double radius; 
    // getters/setters … 
}
```

Daire alan hesabı yapabilmek için AreaService’i içindeki calculateArea methodumuzda değişiklik yapmamız gerekti.(
Okunurluğu ve anlaşırlığından farkedileceği üzere ne kadar kötü bir hal alıyor. )

```
public class AreaService {
    public double calculateArea(List<Object>... shapes) {
        double area = 0;
        for (Object shape : shapes) {
            if (shape instanceof Rectangle) {
                Rectangle rect = (Rectangle) shape;
                area += (rect.getLength() * rect.getHeight());
            } else if (shape instanceof Circle) {
                Circle circle = (Circle) shape;
                area += circle.getRadius() * cirlce.getRadius() * Math.PI;
            } else {
                throw new RuntimeException("Shape not supported");
            }
        } return area;
    }
}
```

Yeni bir şekil eklemek istediğimizde üçgen gibi sürekli bu metot üzerinde değişiklikler yapacağız ve durum giderek
kötüleşecek ve oluşan durum open/closed prensibine uymadığımızı gösteriyor. Bu durum için sınıfımız/metodumuz
değişikliğe kapalı değil aksine değişiklik zorunlu hale gelmiştir. Genişleme ise seçenekler arasında değildir. Her yeni
şekil eklenmesi için AreaService üzerinde değişikliğe gitmemiz gerekiyor.Yeni bir şekil eklemek istediğimizde üçgen gibi
sürekli bu metot üzerinde değişiklikler yapacağız ve durum giderek kötüleşecek ve oluşan durum open/closed prensibine
uymadığımızı gösteriyor. Bu durum için sınıfımız/metodumuz değişikliğe kapalı değil aksine değişiklik zorunlu hale
gelmiştir. Genişleme ise seçenekler arasında değildir. Her yeni şekil eklenmesi için AreaService üzerinde değişikliğe
gitmemiz gerekiyor.

### Çözüm

Nasıl Open/Closed presibine uygun hale getirebilirz ? Bunu sağlamak için ilk önce elimizde ne olduğuna ve ne yapmak
istediğimize odaklanmamız gerekiyor. AreaService tüm şekil tiplerinin alan hesabını yapmakla yükümlü ancak her alanın da
kendine özgü bir hesaplama yöntemi mevcut, bu cümleden de anlaşılacağı üzere her şekil için farklı hesaplama yöntemi,
her şekil için kendi içlerinde hesaplama gerekliliğini doğurmaktadır.

Bunu çözmek için bir Shape interface’imiz olsa ve her bir şekil için hesaplanmış area’yı dönse nasıl olur ? Bunu
yapmakla object tipinden de kendi bildiğimiz bir nesneye geçiş sağlamış olacağız.

```
public interface Shape { 
   double getArea(); 
}
```

Her şekil Shape üzerinden türetilmelidir. Burada açıkça görüyorum ki; Şekillerden biri olan Dikdörtgen alan hesabını
getArea metodumla öğrenebilirim.

```
====== Rectangle.java

public class Rectangle implements Shape {
    private double length;
    private double height;

    // getters/setters … 
    @Override
    public double getArea() {
        return (length * height);
    }
}

====== Circle.java

public class Circle implements Shape {
    private double radius;

    // getters/setters … 
    @Override
    public double getArea() {
        return (radius * radius * Math.PI);
    }
}
```

Şimdi ise AreaService’imize giderek calculateArea metodumuzun nasıl güzelleştiğini görelim.

```
public class AreaManager {
    public double calculateArea(List<Shape> shapes) {
        double area = 0;
        for (Shape shape : shapes) {
            area += shape.getArea();
        }
        return area;
    }
}
```

### Source:

https://gokhana.medium.com/open-closed-prensibi-nedir-kod-%C3%B6rne%C4%9Fiyle-soli%CC%87d-679619d5376a