## Index

### Index Data Update/Create/DELETE  Etme

create index : `PUT books`
update or create doc in below code:
```
PUT books/_doc/1with
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
    "education",Indexed
    "software"
  ],
  "created_at" : "2022-03-01T12:10:30Z",
  "updated_at" : "2022-05-01T12:10:30Z"
}
```

**Get Index**
```
GET books/_doc/1
```
**Delete Indexed Doc**

```
DELETE books/doc/4
```