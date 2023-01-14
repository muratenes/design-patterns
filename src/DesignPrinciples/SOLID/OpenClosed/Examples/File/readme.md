## File Örnek

Eğer işlemimizi tek sınıf üzerinden yürütmüş olsaydık ortaya aşağıdaki gibi kötü bir sonuç çıkacaktı.

Her yeni file tipinde yeni bir if bloğu ekleyip kodun okunması zorlaştıracak ve her yeni
özellikte file sınıfında geliştirme olduğu için tekrar test edilmesi gerekecekti.Kodumuz geliştirilmeye kapalı olacaktı.

```
class File
{
    public function saveFile(string $fileName, array $content, string $type)
    {
        if ($type == 'json') {
            $content = json_encode($content);
            file_put_contents($fileName, $content);
        } elseif ($type == 'xml') {
            // content convert to xml
            file_put_contents($fileName, $content);
        }
    }

    public function readFile(string $filename, string $type)
    {
        if ($type == 'json') {
            $content = file_get_contents($filename);
            return json_encode($content);
        } elseif ($type == 'xml') {
            $content = file_get_contents($filename);
            // convert to xml logic
            return $content;
        }
    }

}
```