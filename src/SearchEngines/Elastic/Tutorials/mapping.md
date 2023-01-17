##  Mappings
https://www.elastic.co/guide/en/elasticsearch/reference/current/mapping.html

### Create A Mapping for Index

```
PUT /books
{
    "mappings": { 
  
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
```

### Update Booking Mapping

```
PUT /books/_mapping
{
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
```

### GET existing Booking Map

```
GET books/_mapping
```