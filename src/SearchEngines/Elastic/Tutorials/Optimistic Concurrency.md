## Optimistic Concurrency

Stok yönetimi buraya güzel örnek olarak verilebilir. Bir üründen sepette 2 adet kaldığında
birden fazla kullanıcı bu ürününü sepete ekleyemeli.

https://www.elastic.co/guide/en/elasticsearch/reference/current/optimistic-concurrency-control.html

### Örnek

Aşağıda örnek bir product doc oluşturduk.

```
PUT products/_doc/1567
{
  "product" : "r2d2",
  "details" : "A resourceful astromech droid"
}
```

Yanıtın _seq_no ve _primary_term alanlarında atanan sıra numarasını ve birincil terimi görebilirsiniz:

```
    {
      "_shards": {
        "total": 2,
        "failed": 0,
        "successful": 1
      },
      "_index": "products",
      "_id": "1567",
      "_version": 1,
      "_seq_no": 362,
      "_primary_term": 2,
      "result": "created"
    }
```

Elasticsearch, sakladığı belgelerin her birini değiştiren son işlemin sıra numarasını(_seq_no) ve birincil terimini(_primary_term) izler.

Örneğin, aşağıdaki indeksleme çağrısı, açıklamada herhangi bir olası değişikliği veya başka bir API tarafından başka bir etiketin eklenmesini kaybetmeden belgeye bir etiket eklenmesini sağlayacaktır:

```
PUT products/_doc/1567?if_seq_no=362&if_primary_term=2
{
  "product": "r2d2",
  "details": "A resourceful astromech droid",
  "tags": [ "droid" ]
}
```