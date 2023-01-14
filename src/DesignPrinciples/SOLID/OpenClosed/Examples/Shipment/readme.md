## Kargo Maliyet Hesaplama Örneği

Konuyu bir örnekle pekiştirelim. Senaryoya göre bizden bir kargonun gönderim ücretinin ağırlığına ve taşıma durumuna
göre hesaplanması istenmektedir. Buna göre konu üzerine hiç düşünmeden aşağıdaki kodu yazdığımızı düşünelim.

```
public class Shipment
{
    public int Id { get; set; }
    public string Name { get; set; }
    public string ShipmentType { get; set; }
    public double Weight { get; set; }
    public decimal CalculateCost()
    {
        if (ShipmentType == "Overland")
            return Weight * 1.5;
        else if (ShipmentType == "Oversea")
            return Weight * 2.0;
        else if (ShipmentType == "Overair")
            return Weight * 2.5;
        else return Weight;
    }
}
```

Şu anda karayolu, denizyolu ve havayolu ile taşıma yapmaktayız, müşterimiz yarın demiryolu ile de taşımaya başlayınca
kodumuzu -prensibi çiğneyerek- değiştirmemiz gerekecek ve if-else merdivenine yeni basamak eklememiz gerekecek. Şimdi
yazdığımız bu kodu refoctor ederelim.

İlk olarak sınıfımızı soyutlayarak, tip alanını kaldıralım.

```
public abstract class Shipment
{
    public int Id { get; set; }
    public string Name { get; set; }
    public double Weight { get; set; }

    public abstract decimal CalculateCost();
}
```

Daha sonra tip alanlarını geliştirme olarak ele alalım.

```
public class OverlandShipment : Shipment
{
    public override decimal CalculateCost()
    {
        return Weight * 1.5;
    }
}

public class OverseaShipment : Shipment
{
    public override decimal CalculateCost()
    {
        return Weight * 2.0;
    }
}

public class OverairShipment : Shipment
{
    public override decimal CalculateCost()
    {
        return Weight * 2.5;
    }
}
```

Kodumuzu refactor ederek değişime kapalı, geliştirmeye açık hale getirdik. Nasıl uygulayacağımızı da ele alıp makaleyi
sonlandıralım.

```
static void Main(string [] args)
{
	var shipments = new List<Shipment>
	{
		new OverlandShipment { Id = 1, Name = "Kargo #1", Weight = 5.2 },
		new OverseaShipment { Id = 2, Name = "Kargo #2", Weight = 3.4 },
		new OverairShipment { Id = 3, Name = "Kargo #3", Weight = 2.6 }
	};
	
	foreach(var shipment in shipments)
	{
		Console.WriteLine($"Shipment cost for {shipment.Name} is {shipment.CalculateCost()}");
	}
}
```

> Source : https://burakneis.com/open-closed-prensibi/