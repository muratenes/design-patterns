**Delete Indexed Doc**

```
DELETE books/_doc/4
``` 

Örneklendirme için productlar oluştrularım.
```
PUT products/_doc/2
{
  "product" : "product 2",
  "details" : "A resourceful astromech droid",
  "price" : 1000,
  "is_active" : 1
}

PUT products/_doc/3
{
  "product" : "red tshirt",
  "details" : "A resourceful astromech droid",
  "price" : 123,
  "is_active" : 1
}

PUT products/_doc/4
{
  "product" : "red pant",
  "details" : "A resourceful astromech droid",
  "price" : 20,
  "is_active" : 1
}

PUT products/_doc/5
{
  "product" : "black pant",
  "details" : "A resourceful astromech droid",
  "price" : 223,
  "is_active" : 0
}


PUT products/_doc/6
{
  "product" : "Book of Google",
  "details" : "A resourceful astromech droid",
  "price" : 42,
  "is_active" : 0
}

# tüm productları göster
GET products/_search
```

daha sonra bu productlardan is_active:0 olanları silelim. 
Multi Document API : https://www.elastic.co/guide/en/elasticsearch/reference/8.6/docs.html

```
POST products/_delete_by_query
{
  "query" : {
    "match": {
      "is_active": 0
    }
  }
}
```
