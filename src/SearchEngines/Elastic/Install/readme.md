## Kibana
Web Arayüzü : http://localhost:5601

## Docker
build: docker-compose up -d

show services : docker ps
> Source : https://medium.com/kodgemisi/docker-ile-elastic-stack-kurulumu-f447ffab2f45



GET _search
{
"query": {
"match_all": {}
}
}

PUT books

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

PUT /books
{
"mappings": {
"properties" : {
"title" : {"type" : "text"},
"page" : {"type" : "short"},
"is_active" : {"type" : "double"},
"author" : {
"properties" : {
"id" : {"type" : "unsigned_long"},
"name" : {"type" : "text"},
"image" : {"type" : "text"},
"bio" : {"type" : "text"}
}
},
"category" : {"type" : "array"},
"created_at" : {"type" : "date"},
"updated_at" : {"type" : "date"}
}
}
}

GET books
GET books/doc/1

POST /books/doc/1
{
"update" : {
"time" : 60
}
}

DELETE books

PUT _cluster/settings
{
"transient": {
"cluster.routing.allocation.disk.watermark.low": "100gb",
"cluster.routing.allocation.disk.watermark.high": "50gb",
"cluster.routing.allocation.disk.watermark.flood_stage": "10gb",
"cluster.info.update.interval": "1m"
}
}