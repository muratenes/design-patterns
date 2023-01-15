## Index

### Index Data Update/Create/DELETE  Etme

index oluşturma : `PUT books`

update ve create işlemi için kullanılabilir.
```
PUT books/doc/1
{
  "title" : "How to learn english",
  "page" : 300,
  "is_active" : 1,
  "author" : {
    "id" : 1,
    "name" : "Murat",
    "image" : "author-murat.jpg",
    "bio" : "Short bio for author"
  },
    "category" : [
    "education",
    "software"
  ],
  "created_at" : "12-02-2022 12:02:34",
  "updated_at" : "12-02-2022 15:03:50"
}
```
**Delete Indexed Doc**

```
DELETE books/doc/4
```

### Field Mapping 

```
PUT /books
{
  "mappings": {
    "doc" : {
      "properties" : {
        "title" : {"type" : "text"},
        "page" : {"type" : "short"},
        "is_active" : {"type" : "double"},
        "author" : {
          "properties" : {
            "id" : {"type" : "long"},
            "name" : {"type" : "text"},
            "image" : {"type" : "text"},
            "bio" : {"type" : "text"}
          }
        },
        "created_at" : {"type" : "date"},
        "updated_at" : {"type" : "date"}
      }
    }
  }
}
```
> https://www.elastic.co/guide/en/elasticsearch/reference/8.6/mapping.html

#### Get Mappings
```
GET /books/_mappings
```
- Field göre mapping getirme
```
GET /books/_mappings/
```