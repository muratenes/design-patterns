# Alan Hesaplama

AreaCalculator.php içerisindeki calculateArea methodunda her bir şekil hesaplamasını yapmış olsaydık,her yeni bir shape
eklendiğinde üst sınıfımızda değişiklik yapmak zorunda kalacaktık. Bu Calculator sınıfımızı
tekrar test etmek anlamına gelecekti ve bize yük getirecekti.

```
class AreaCalculator
{
    public function calculateArea(array $shapes): float
    {
        $area = 0;
        foreach ($shapes as $shape) {
            if ($shape->type == 'circle') {
                $area += $shape->radius * $shape->radius * pi();
            } elseif ($shape->type == 'rectangle'){
                $area += $shape->height * $shape->length;
            }
        }

        return $area;
    }
}
```

Her bir shape için ortak interface oluşturup alan hesaplamasını kendi içerisinde yaptık
ve üst sınıfda (AreaCalculator) bir değişiklik olmadan kodumuzdaki hata payını ve
test eforunu azaltmış olduk.

```
interface ShapeInterface
{
    public function getArea() : float;
}

class Rectangle implements ShapeInterface
{
    public function __construct(private float $height, private float $length)
    {

    }

    public function getArea(): float
    {
        return $this->height * $this->length;
    }
}

class Circle implements ShapeInterface
{

    public function __construct(private float $radius)
    {
    }

    public function getArea(): float
    {
       return $this->radius * $this->radius * pi();
    }
}
```