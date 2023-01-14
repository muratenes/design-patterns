Bir veritabanından okuyan bir bütçe raporlama sisteminiz olduğunu düşünün.

Bunun gibi bir şey görünecek:

```
class BudgetReport {
    public $database;

    public function __construct($database)
    {
        $this->database = $database;
    }

    public function open(){
        $this->database->get();
    }

    public function save(){
        $this->database->insert();
    }
}

class MySQLDatabase {
    // fields

    public function get(){
        // get by id
    }

    public function insert(){
        // inserts into db
    }

    public function update(){
        // update some values in db
    }

    public function delete(){
        // delete some records in db
    }
}

// Client
$database = new MySQLDatabase();
$report = new BudgetReport($database);

$report->open();
```

Her şey yolunda gibi gözüküyor, ancak bu kod Dependecny Inversion ilkesini ihlal ediyor çünkü üst düzey sınfımız
**BudgetReport** somut olarak, alt düzey modüle bağlı **MySQLDatabase**.

Bu aynı zamanda Open-Closed prensibini de ihlal ediyor çünkü ya MongoDB gibi farklı bir veritabanı eklemek isteseydik?

BudgetReportBozulmaması için sınıfı if-else ifadelerine sahip olacak şekilde değiştirmemiz gerekecek .

Bunu düzeltmek oldukça basit, somut olarak veritabanı sınıfına güvenmek yerine bir soyutlama kullanmalıyız. İhtiyacımız
DatabaseInterfaceolan herhangi bir veritabanını uygulayacak bir oluşturacağız ve son olarak veritabanımızı yapıcı
aracılığıyla enjekte edebiliriz

```
interface DatabaseInterface {
    public function get();
    public function insert();
    public function update();
    public function delete();
}

class MySQLDatabase implements DatabaseInterface {
    // fields

    public function get(){
        // get by id
    }

    public function insert(){
        // inserts into db
    }

    public function update(){
        // update some values in db
    }

    public function delete(){
        // delete some records in db
    }
}

class MongoDB implements DatabaseInterface {
    // fields

    public function get(){
        // get by id
    }

    public function insert(){
        // inserts into db
    }

    public function update(){
        // update some values in db
    }

    public function delete(){
        // delete some records in db
    }
}

class BudgetReport {
    public $database;

    public function __construct(DatabaseInterface $database)
    {
        $this->database = $database;
    }

    public function open(){
        $this->database->get();
    }

    public function save(){
        $this->database->insert();
    }
}

// Client
$mysql = new MySQLDatabase();
$report_mysql = new BudgetReport($mysql);

$report_mysql->open();

$mongo = new MongoDB();
$report_mongo = new BudgetReport($mongo);

$report_mongo->open();
```

Artık BudgetReport tabanı sınıfına somut olarak değil onun soyutlamasına bağlıyız **DatabaseInterface**. BudgetReport Bu
yaklaşım aynı zamanda **Open-Closed** prensibini de takip eder çünkü herhangi bir yeni veritabanı eklemek için **
DatabaseInterface** sınıfını
değiştirmek zorunda değiliz.

### Çözüm

Özetle:

- Dependency Inversion İlkesi (DIP), yüksek seviyeli modüllerin düşük seviyeli modüllere bağlı olmaması gerektiğini
  belirtir; her ikisi de soyutlamalara bağlı olmalıdır.
- Soyutlamalar ayrıntılara bağlı olmamalıdır. Detaylar soyutlamalara
  bağlı olmalıdır.

> Source : https://dev.to/tamerlang/understanding-solid-principles-dependency-inversion-1b0f