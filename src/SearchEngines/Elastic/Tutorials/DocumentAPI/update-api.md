## Update API

Sadece belirli bir alanı update etmek için kullanılır. Eğer o alan mevcut değilse create eder.

```
POST products/_update/2
{
  "doc" : {
    "is_active" : 0
  }
}
```

Yeni değerleri kontrol etmek için:

```
GET products/_doc/2
```

Test için dizine bir ürün ekleyelim.

```
PUT products/_doc/6
{
  "product" : "Book of Google",
  "details" : "A resourceful astromech droid",
  "price" : 42,
  "is_active" : 0,
  "stock" : 1,
  "tags" : ["red"]
}
```

Belirli koşullara göre scriptler yazarak güncelleme ve silme işlemi yapılabilir.
Örneğin stock artırmak veya azaltmak için aşağıdaki komut dosyasıyla bir güncelleme isteği gönderebilirsiniz:

```
POST products/_update/6
{
  "script": {
    "source": "ctx._source.stock += params.stock",
    "lang": "painless", 
    "params": {
      "stock" : 4
    }
  }
}
```

Painless , Elasticsearch için özel olarak tasarlanmış, performanslı, güvenli bir betik dilidir. Elasticsearch'te komut dosyalarının desteklendiği her yerde güvenli bir şekilde satır içi ve depolanan komut dosyaları yazmak için Painless'ı kullanabilirsiniz.
painless : https://www.elastic.co/guide/en/elasticsearch/reference/current/modules-scripting-painless.html#modules-scripting-painless

Ayrıca bir belgeye alan ekleyip kaldırabilirsiniz. Örneğin, bu komut dosyası new_field alanını ekler:

```
POST products/_update/6
{
  "script": {
    "source": "ctx._source.new_field = 'new field value'"
  }
}

```

var olan bir alanı kaldırmak için:

```
POST products/_update/6
{
  "script" : {
    "source": "ctx._source.remove('new_field')"
    
  }
}
```

Aşağıdaki komut dosyası, bir nesne alanından bir alt alanı kaldırır:

```
POST test/_update/1
{
  "script": "ctx._source['my-object'].remove('my-subfield')"
}
```

Eğer bir güncelleme isteğinde herhangi bir alan değişmez ise result:noop olarak döner.

```
{
  "_index" : "products",
  "_id" : "6",
  "_version" : 16,
  "result" : "noop",
  "_shards" : {
    "total" : 0,
    "successful" : 0,
    "failed" : 0
  },
  "_seq_no" : 38,
  "_primary_term" : 3
}

```


> Source : https://www.elastic.co/guide/en/elasticsearch/reference/8.6/docs-update.html