### Farklı Türde Rapor Örneği

> Sınıflar değişikliğe kapalı ancak gelişime açık olmalıdır.

Open/Closed Principle (Açık Kapalı prensibi), yazılımın geliştirmeye açık ancak değişime kapalı olmaları gerektiğini
savunur. Yani bir nesne davranışını değiştirmeden yeni modüller ve işlevler kazanabiliyor olmalıdır, başka bir deyişle
kaynak kodunu değişmeden davranışı değişebilmeli.

```
interface Report
{
    public function getTitle();
    public function getDate();
    public function getHeaders();
    public function getBody();
    public function toJson();
}
```

Raporlar için verileri alıp, formatlama yapan bir interface’miz olduğunu varsayalım; Interface içerisinde hem verileri
alıp hemde bir formatlama işlemi yapılmış. Sizden XML, CSV, PDF vb. formatlarını desteklemenizi istenirse ne olur?

```
interface Report
{
    public function getTitle();
    public function getDate();
    public function getHeaders();
    public function getBody();
}
interface ReportFormatter
{
    public function format(Report $report);
}
class JsonReportFormatter implements ReportFormatter
{
    public function format()
    {
        // code
    }
}
class XmlReportFormatter implements ReportFormatter
{
    public function format()
    {
        // code
    }
}
```

**ReportFormatter** adında interface oluşturduk ve tüm formatlama sınıflarımızı bu interface’ten implement ettik böylelikle
gelişmeye açık değişikliğe kapalı olarak kod yazmış ve gereksiz değişikliklerden kurtulmuş olduk.