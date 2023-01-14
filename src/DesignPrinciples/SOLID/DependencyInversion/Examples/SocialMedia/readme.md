### Dependency Inversion Principle (Bağımlılık Ters Çevirme Prensibi )

> Üst seviyeli modüller, alt seviyeli modüllere bağlı olmamalı

Dependency Inversion Principle (Bağımlılığın ters çevrilmesi prensibi) göre üst seviye mödüller, alt seviyeli modüllere
bağımlı olmamalıdır. Alt sınıflarda yapılan değişiklikler üst sınıfları etkilememelidir. Her ikisi de soyut (abstract)
kavramlara bağlı olmalıdır. Kısaca yüksek seviyeli ve düşük seviyeli sınıflar arasında bir soyutlama katmanı
oluşturabiliriz.

```
class Publisher
{
    private $twitter;

    public function __construct(Twitter $twitter)
    {
        $this->twitter = $twitter;
    }

    public function publish()
    {
        return $this->twitter->getComment();
    }
}

class Twitter
{
    private $comment;

    public function setComment(string $comment)
    {
        $this->comment = $comment;
    }

    public function getComment(): string
    {
        return $this->comment;
    }
}

$twitter = new Twitter();
$twitter->setComment('Twitter comment');

$publisher = new Publisher($twitter);
echo $publisher->publish();

```

Yukarıda gördüğümüz gibi, üst seviye modül olan Publisher class, alt seviye modül olan Twitter classa bağımlı görünüyor.
Bu nedenle sadece Twitter objesini kabul ediyor. Eğer Facebook yorumlarını da yayınlamak istersek Publisher classını
değiştirmemiz gerekecektir, ki bu da prensip ihlalidir. Ayrıca eğer Twitter classında değişiklik yaparsak, muhtemelen
Publisher classında da değişiklik yapmamız gerekecektir, ki bu da prensip ihlalidir.

```
class Publisher
{
    private $socialMedia;

    public function __construct(SocialMediaInterface $socialMedia)
    {
        $this->socialMedia = $socialMedia;
    }

    public function publish()
    {
        return $this->socialMedia->getComment();
    }
}

interface SocialMediaInterface
{
    public function setComment(string $comment);
    public function getComment(): string;
}

class Twitter implements SocialMediaInterface
{
    private $comment;

    public function setComment(string $comment)
    {
        $this->comment = $comment;
    }

    public function getComment(): string
    {
        return $this->comment;
    }
}

class Facebook implements SocialMediaInterface
{
    private $comment;

    public function setComment(string $comment)
    {
        $this->comment = $comment;
    }

    public function getComment(): string
    {
        return $this->comment;
    }
}

$twitter = new Twitter();
$twitter->setComment('Twitter comment');

$publisher = new Publisher($twitter);
echo $publisher->publish();

$facebook = new Facebook();
$facebook->setComment('Facebook comment');

$publisher = new Publisher($facebook);
echo $publisher->publish();
```

Yukarıda gördüğümüz gibi, Twitter ve Facebook classlarının kullanması için SocialMediaInterface yarattık. Çalışma
prensibini kırmadan her iki objeyi de Publisher class içine enjekte edebiliriz. Eğer daha fazla sosyal medya classı
yaratıp yorumları yayınlamak istersek, tüm yapmamız gereken yeni classın da SocialMediaInterface kullanmasını sağlamamız
yeterli olacaktır.

> Source : https://engineering.teknasyon.com/solid-yaz%C4%B1l%C4%B1m-geli%C5%9Ftirme-prensipleri-php-42f26dfc91cd

