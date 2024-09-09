# Selamat datang

Terimakasih telah menggunakan repo saya untuk belajar dan mencari apa yang ingin kalian ketahui. Kurang lebih semua yang disini adalah hasil praktek saya terhadap bahasa `PHP`. Jadi kalian hany melihat contoh dari sintak sintaks saja yang saya kelompokkan ke masing masing folder. Sama sama belajar ya!

Oke baiklah selamat mencoba 🥰

##

### Instalasi

Ada 2 cara untuk menggunakan PHP. Yaitu Client Side dan Server Side. Apa itu

`client-side merujuk pada segala sesuatu yang terjadi di sisi pengguna (browser)` Yang artinya apa yang dilihat oleh user atau pengunjung web itu adalah client side proggraming. Sebaliknya yang tidak dapat dilihat oleh pengguna adalah `server-side`

#### Instalasi

##### Web / Client Side

1. Silahkan install `XAMPP`, `LAMPP`, `MAMPP`, `WAMPP`. (Pilih salah satu, Untuk Windows saya rekomendasikan menggunakan `XAMPP` dan Linux `LAMP`)
2. Kalau sudah jalankan buka aplikasi. Silahkan `start` pada bagian Apache

![Jalankan XAMPP](/github/xampp_start.png)

3. Nah download dan ekstrak Belajar PHP di github ini dan letakkan di mana XAMPP / LAMPP kalian ada

![Disini](/github/placement.png)

Letakkan Folder yang kalian downlad disitu. Agar bisa kalian lihat hasil PHPNya harus diletakkan pada folder  `XAMPP` dan didalam `htdocs` seperti diatas

4. Silahkan buka browser kalian dan ketikan pada kolom url dengan `localhost`. Misalnya saya beri nama `Belajar PHP` dan saya buka di browser seperti ini

![Seperti ini](/github/contoh_folder_belajar.png)

##### Server / Server Side

1. [Download](https://www.php.net/downloads.php) PHP terlebih dahulu. Pilih sesuai dengan sistem operasi kalian
2. Kemudian jalankan setup dari PHP ini. Untuk caranya berbeda beda setiap sistem operasi

> Untuk windows saya menggunakan chocolatey. jadi buat kalian yang menggunakan chocolatey bisa langsumg ketikan `choco install php`

Dan saya menggunakan debian dan juga arch linux. Untuk keduanya bisa seperti ini saja

- Arch Linux
```bash
sudo pacman -S php
```

- Debian

```bash
sudo apt install php
```

## Catatan

### Sejarah

Tambahan Informasi aja nih hhehe, Pembuat dari **PHP** Adalah **Bapak Rasmus Lerdorf** yang dibuat pada 1994. **PHP** Itu sebenernya apa sih kok dibuat? Jadi si bapak Rasmus Ini mengelola atau mengatur web yang dibuat oleh beliau dan **PHP** ini kepanjangannya Adalah `Personal Home Page`. Yang dibuat oleh beliau adalah form untuk terhubung dengan database. Nah kemudian setelah itu karena akhirnya menjadi populer beliau terus mengembangkan. Yang awalnya PHP/FI Saja yang dimana namanya adalah `Personal Home Page/ Form Interpreter` menjadi `PHP Tools v.1` Pada tahun 1995 dan muncul juga `PHP Tools v.2` pada tahun 1997. Dan pada tahun 1998 terdapat beberapa orang yang terlibat dalam pengembangannya **Zeev Suraski** dan **Andi Gutmans** dimana mereka membuat parser PHP dan sebuah perusahaan bernama `Zend Technologies`. Dan dari situ juga namanya berganti menjadi `PHP: Hypertext Preprocessor`. Dan di tahun 2000 muncul PHP 4 Dengan `Zend Engine` dibuat oleh `Zend Technologies` yang fungsinya sebagao interpreter

Pada tahun 2004 muncul nih PHP 5 Dengan fitur yang sangat melimpah dengan Adanya `Object Oriented Proggraming` dan `PDO` Atau `PHP Data Object` jadi dia dapat menggunakan **PDO** Ini kamu bisa berinteraksi dengan database, dia menggunakan **Zend Engine 2**. Bermanfaat bukan?. Sebenernya tuh mereka mau mengadakan PHP 6 yang dimana niat mereka adalah untuk memperbaiki unicode atau kalau kalian tidak tau si unicode ini adalah dukungan penulisan bahasa seperti jepang, russia, china, korea serta lain lain tapi ujungnya dia diabaikan atau istilahnya ditunda. dan muncullah PHP 7 Yang menggunakan **Zend Engine 3**

### Karakteristik

- Menggunakan ekstensi file .php (Kalian bisa menggunakan HTML Dan PHP itu sendiri disini. Nah kalian bisa menuliskan HTML saja Atau PHP saja disini, bersamaan juga bisa)
- Ditulis menggunakan delimiter atau pembatasan / kalau kita kenalnya di html sebagai tag

```php
<?php
// Isinya disini
?>
```

- Case sensitive dimana harus sesuai besar kecilnya
- Kemudian menggunakan Titik Koma di akhir perintah

## Pemahaman Dasar

### 1. Sintaks Dasar PHP

#### 1.1 Output PHP

Nah untuk output PHP Sendiri yang perlu kit ketahui saat ini ada 4 Yakni `echo` dan `print` yang fungsinya menampilkan berupa variabel ataupun tulisan. Kemudian ketiga ada `print_r` untuk menampilkan array dan `var_dump` untuk menampilkan detail variabel

Oke mudahnya bisa dicoba langsung menggunakan `Belajar PHP\1. Sintaks Dasar\Output.php` dijalankan ya. Nah bisa dilihat penjelasan detail dan hasilnya

[Percobaan Output](/1. Sintaks Dasar/Output.php) 

- echo

```php
// Untuk ini bisa langsung seperti ini
echo "Nama saya Ananda"
```

- print

```php
// Cara penulisannya juga sama dengan yang diatas
print "Nama saya adalah Panji"
```

- print_r

```php
// Nah yang ini menggunakan tanda kurung
print_r("Nama saya Adalah Ananda")
```
- var_dump

```php
// Untuk yang ini sama seperti print_r dia membutuhkan tanda kurung
var_dump("Nama saya Ananda")
```

Namun untuk yang ini spesial ya. Dimana dia akan menampilkan detail dari variabel yang contohnya akan tampil begini

![Tampilan dari var_dump](/github/var_dump.png)

#### 1.2 Penulisan Sintaks PHP

Untuk ini kalian akan mencoba eksperimen membuat PHP Tersebut bersama dengan HTML. Nah dalam hal ini PHP Memiliki 2 Cara untuk penggunaannya Pada PHP Untuk web yaitu

##### 1.2.1 PHP didalam HTML

Nah untuk yang pertama adalah PHP Didalam HTML. Untuk caranya simpel sekali sebagai eksperimen

Selayaknya HTML Pasti kita akan menuliskan

```php
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML dengan PHP Didalamnya</title>
</head>
<body>
    
</body>
</html>
```

Nah kita akan fokus kepada bagian `body` dimana disana kita akan menyempilkan atau memasukan php kedalamnya. Bisa di coba untuk menambahkan

```php
<h1>Selamat di Portofolio saya, Nama saya <?php echo "Ananda Cahya" ?></h1>
```

 Sebagai contoh seperti ini

 ![Penulisan PHP Didalam HTML](/github/contoh_penulisan_sintaks_php_dalam_html.png)

 [Coba Ini](/1. Sintaks Dasar/PenulisanSintaks.php)

 Hasilnya akan seperti ini

![Hasil Penulisan PHP Didalam HTML](/github/hasil_penulisan_sintaks_php_dalam_html.png)

`Kalau PHP Nya lebih dari satu bagaimana? Bisa tidak?`
Bisa ya. Kalau tidak percaya silahkan coba ini

```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML dengan PHP Didalamnya</title>
</head>
<body>
    <h1>Selamat di Portofolio saya, Nama saya <?php echo "Ananda Cahya" ?></h1>
    <h4>Role saya lebih sering ke bagian <?php echo "Frontend Developer" ?></h4>
</body>
</html>
```

##### 1.2.2 HTML didalam PHP

Sama seperti yang ditulis untuk yang satu ini kita akan mengeluarkan html menggunakan PHP. Kira kira seperti ini

```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML dengan PHP</title>
</head>
<body>
    <p>
        <?php
        //Didalamnya ada html
        echo "Saya adalah proggramer berasal dari <b>Indonesia</b>"
        ?>
    </p>
</body>
</html>
```

Bisa dilihat disana terdapat tulisan indonesia yang di bold agar menjadi lebih tebal

[Coba semua Sintaks Dasar](/1.%20Sintaks%20Dasar/PenulisanSintaks.php)