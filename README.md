Sistem Manajemen Ruang - v1.0
=============================

Sistem Manajemen Ruang merupakan sistem aplikasi berbasis website dan menggunakan Yii2-basic sebagai penunjangnya.  

Anda dapat mengunduh dan menggunakan Yii2-basic melalui tombol di bawah.

[![Latest Stable Version](https://poser.pugx.org/yiisoft/yii2-app-basic/v/stable.png)](https://packagist.org/packages/yiisoft/yii2-app-basic)
[![Total Downloads](https://poser.pugx.org/yiisoft/yii2-app-basic/downloads.png)](https://packagist.org/packages/yiisoft/yii2-app-basic)
[![Build Status](https://travis-ci.org/yiisoft/yii2-app-basic.svg?branch=master)](https://travis-ci.org/yiisoft/yii2-app-basic)

STRUKTUR DIREKTORI
------------------
      assets/                       vendor/
      commands/                     vendor/cebe
      config/                       vendor/codeception
      controllers/                  vendor/composer
      doc/                          vendor/doctrine
      doc/flowchart                 vendor/ezyang
      mail/                         vendor/fzaninotto
      mail/layouts                  vendor/guzzlehttp      
      models/                       vendor/myclabs
      runtime/                      vendor/phpdocumentor
      runtime/cache                 vendor/phpspec
      runtime/gii-2.0.11.1          vendor/phpunit
      runtime/logs                  vendor/psr 
      tests/                        vendor/sebastian
      tests/_data                   vendor/swiftmailer
      tests/_output                 vendor/symfony
      tests/_support                vendor/webmozart
      tests/acceptance              vendor/yiisoft
      tests/bin                     views/admin             
      tests/functional              views/layouts
      tests/unit                    views/pesanan
      vendor/behat                  views/site
      vendor/bin                    views/user
      vendor/bower                  web/      
      
      
      
                    
                      



REKOMENDASI
-----------

Minimal PHP 5.4.0.


CARA MENGGUNAKAN
----------------

### DIREKTORI PENYIMPANAN

Silakan semua data disimpan pada "htdocs/peminjamanruang"



### ATUR KONEKSI DATABASE

Pastikan pada file `config/db.php` seperti berikut:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=pra_peminjamanruang',
    'username' => 'root', // isi username database anda. 
    'password' => '',     // isi password database anda.
    'charset' => 'utf8',
];
```


### ATUR KONEKSI DATABASE

Pastikan cookie validation key pada file `config/web.php` sudah terisi atau anda juga dapat merubahnya sesuai keinginan.

```php
'request' => [
    ...
    'cookieValidationKey' => '<kode acak yang anda inginkan>',
],
```



### JALANKAN

Anda dapat menjalankan aplikasinya melalui URL:

~~~
http://localhost/peminjamanruang/web/
~~~



### ROLES

Untuk tingkat akses pada aplikasi ini dibagi menjadi 3, yaitu:

- `admin`   <mengakses tampilan admin>   
- `user`    <mengakses tampilan user>
- `publik`  <mengakses tampilan site>



**SELAMAT MENCOBA**