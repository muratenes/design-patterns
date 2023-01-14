- **ls** - Linux'ta dizinleri listelemek için en sık kullanılan komut
  - usages:
    - ls -a : . ile başlayan tüm dosya klasörleri gösterir.
    - ls --help diyerek tüm parametreler görülebilir.
- **pwd** - Linux'ta çalışma dizini komutunu yazdır 
  - example : var/www/vhosts
- **cd** - Dizinler arasında gezinmek için Linux komutu
- **mkdir** - Linux'ta dizin oluşturmak için kullanılan komut
- **mv** - Linux'ta dosyaları taşıyın veya yeniden adlandırın
- **cp** - mv ile benzer kullanım, ancak Linux'ta dosyaları kopyalamak için
- **rm** - Dosyaları veya dizinleri silin
  - example: rm -rf temps
- **touch** - Boş dosyalar oluşturur.
- **ln** - Diğer dosyalara sembolik bağlantılar (kısayollar) oluşturun (symbolic links)
  - example : ln -s file/to/path symbol/path
- **cat** - Terminalde dosya içeriğini göster
- **clear** - Terminal ekranını temizle
- **echo** - Komutu takip eden herhangi bir metni yazdırın
  - example : echo $USER
- **less** - Terminalde disk belleğine alınan dosyaları görüntülemek için Linux komutu
  - less -N readme.md : readme dosyasında satır sayılarını gösterir.
  - dosya içinde arama için : less ile açtıktan sonra  /keyword yapılmalıdır.
  - pattern ile arama : less -pERROR /etc/init/mysql.conf
  - Gerçek zamanlı izleme : less +F /var/log/syslog
- **man** - Tüm Linux komutları için kılavuz sayfalarına erişin
- **uname** - İşletim sistemi hakkında temel bilgileri almak için Linux komutu
  - **uname -a** : İşletim sistemi hakkında tüm bilgileri yazdırır. (Darwin bts-MacBook-Pro.local 21.5.0 Darwin Kernel Version 21.5.0: Tue Apr 26 21:08:22 PDT 2022; root:xnu-8020.121.3~4/RELEASE_X86_64 x86_64)
  - **uname -s** : Kullanımda bulunan kernel adını ekrana yazdırır. (Linux)
  - **uname -n** : Bilgisayarınızın, ağ içinde kullanılan host adını gösterir
  - **uname -o** : İşletim sisteminin ne olduğunu gösterir.
- **whoami** - Etkin kullanıcı adını alır (yourusername)









