## Middleware Pattern Nedir ? 
Middleware Pattern ile elimizde olan verilere bazı koşullara göre 
değişiklikler yapmak isteyebiliriz.
Burada Class'lar oluşturup ara katman olarak iş yapabilir.


## Middleware Pattern ne için kullanıılır ?
Ürünler API'dan dönen veriyi filtrelemek isteyebiliriz.
Birden fazla filtreme işlemi gerekebilir bu gibi durumlarda
Middleware Class lar oluşturup dönen response'dan istemediklerimii
filtreleyebiliriz ve yeni değerleri set edebiliriz.

## Örnek

Ürünler API istek attığımızı düşünelim ve bize tüm ürünler dönüyor.
biz burada görselleri olmayan ürünlere default görsel ekleyebiliriz yada
stokta olmayan ürünler için statusu false yapabiliriz.