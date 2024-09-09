# Selamat datang

Terimakasih telah menggunakan repo saya untuk belajar dan mencari apa yang ingin kalian ketahui. Kurang lebih semua yang disini adalah hasil praktek saya terhadap bahasa `PHP`. Jadi kalian hany melihat contoh dari sintak sintaks saja yang saya kelompokkan ke masing masing folder. Sama sama belajar ya!

Oke baiklah selamat mencoba 🥰

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