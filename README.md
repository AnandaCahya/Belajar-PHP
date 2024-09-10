 <h1>Belajar Bahasa Pemrograman PHP</h1>
<img align="left" width="100" height="100" src="https://avatars.githubusercontent.com/AnandaCahya">

# Selamat datang

Terimakasih telah menggunakan repo saya untuk belajar dan mencari apa yang ingin kalian ketahui. Kurang lebih semua yang disini adalah hasil praktek saya terhadap bahasa `PHP`. Jadi kalian hany melihat contoh dari sintak sintaks saja yang saya kelompokkan ke masing masing folder. Sama sama belajar ya!

Oke baiklah selamat mencoba 🥰

> Jika ada kesalahan silahkan sampaikan di issues akan saya periksa dan revisi

## Permulaan

### Instalasi

Ada 2 cara untuk menggunakan PHP. Yaitu Client Side dan Server Side. Apa itu

`client-side merujuk pada segala sesuatu yang terjadi di sisi pengguna (browser)` Yang artinya apa yang dilihat oleh user atau pengunjung web itu adalah client side proggraming. Sebaliknya yang tidak dapat dilihat oleh pengguna adalah `server-side`

#### Web / Client Side

1. Silahkan install `XAMPP`, `LAMPP`, `MAMPP`, `WAMPP`. (Pilih salah satu, Untuk Windows saya rekomendasikan menggunakan `XAMPP` dan Linux `LAMP`)
2. Kalau sudah jalankan buka aplikasi. Silahkan `start` pada bagian Apache

![Jalankan XAMPP](/github/xampp_start.png)

3. Nah download dan ekstrak Belajar PHP di github ini dan letakkan di mana XAMPP / LAMPP kalian ada

![Disini](/github/placement.png)

Letakkan Folder yang kalian downlad disitu. Agar bisa kalian lihat hasil PHPNya harus diletakkan pada folder  `XAMPP` dan didalam `htdocs` seperti diatas

4. Silahkan buka browser kalian dan ketikan pada kolom url dengan `localhost`. Misalnya saya beri nama `Belajar PHP` dan saya buka di browser seperti ini

![Seperti ini](/github/contoh_folder_belajar.png)

#### Server / Server Side

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

4. Cara membuka foldernya? Coba gunakan `cd` dimana kalian letakkan folder tadi
5. Cara menjalankan nya? Gunakan langsung `php test.php` ganti test.php menjadi nama dile kalian

**Untuk instalasi dan detail tentang ini jika kurang jelas bisa cari tutorial instalasi yang lebih jelas**

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
echo "Nama saya Ananda";
```

- print

```php
// Cara penulisannya juga sama dengan yang diatas
print "Nama saya adalah Panji";
```

- print_r

```php
// Nah yang ini menggunakan tanda kurung
print_r("Nama saya Adalah Ananda");
```
- var_dump

```php
// Untuk yang ini sama seperti print_r dia membutuhkan tanda kurung
var_dump("Nama saya Ananda");
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
    <h1>Selamat di Portofolio saya, Nama saya <?php echo "Ananda Cahya"; ?></h1>
    <h4>Role saya lebih sering ke bagian <?php echo "Frontend Developer"; ?></h4>
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
        echo "Saya adalah proggramer berasal dari <b>Indonesia</b>";
        ?>
    </p>
</body>
</html>
```

Bisa dilihat disana terdapat tulisan indonesia yang di bold agar menjadi lebih tebal

[Coba semua Sintaks Dasar](/1.%20Sintaks%20Dasar/PenulisanSintaks.php)

### 1.3 Variabel dan Tipe Data

Untuk penulisan variabel sama seperti bahasa javascript ataupun python dimana dia tidak perlu menuliskan tipe data

```php
$nama = "Andi";
```

Contoh tipe data lain:

```php
$nama = "Andi";
$umur = 17;
```

Oke saatnya membahas tentang tanda petik. Untuk tanda petik " dalam bahasa php ini memiliki kemampuan spesial. Dia menggunakan interpolasi atau gampangannya dia bisa memanggil variabel kedalam string. Sebagai contoh seperti ini

```php
$nama = "Ananda";

echo "Nama saya adalah $nama";
```

Nah silahkan di [coba](/1.%20Sintaks%20Dasar/Variabel.php)

### 1.4 Operator
Untuk operator yang umum ada di semua bahasa pemrograman ada pada bahasa php ini. Diantaranya adalah

Simbol | Jenis | Peruntukan
---|---|---
| `+` | Aritmatika | Penjumlahan
| `-` | Aritmatika | Pengurangan
| `*` | Aritmatika | Perkalian
| `/` | Aritmatika | Pembagian
| `%` | Aritmatika | Menghitung sisa pembagian
| `.` | Concat | Menggabungkan string
| `=` | Assignment | Menetapkan Nilai
| `+` | Assignment | Penjumlahan serta menetapkan nilai
| `-` | Assignment | Pengurangan serta menetapkan nilai |
| `*` | Assignment | Perkalian serta menetapkan nilai
| `/` | Assignment | Pembagian serta menetapkan nilai
| `%` | Assignment | Menghitung sisa pembagian serta menetapkan nilai
| `.` | Assignment Concat | Menggabungkan string serta menetapkan nilai
| `<` | Perbandingan | Digunakan untuk melihat bilangan yang lebih kecil
| `>` | Perbandingan | Digunakan untuk melihat bilangan yang lebih besar
| `<=` | Perbandingan | Digunakan untuk melihat bilangan yang lebih kecil atau sama
| `>=` | Perbandingan | Digunakan untuk melihat bilangan yang lebih besar atau sama
| `!=` | Perbandingan | Melihat apabila jawaban sebenarnya bukan itu
| `===` | Identitas | Melihat apakah nilai dan tipe data sama
| `!==` | Identitas | Melihat apakah nilai dan tipe data tidak sama
| `&&` | Logika | Melihat apakah seluruh nilai benar
| `\|\|` | Logika | Melihat apakah salah satunya benar
| ! | Logika | Membalik nilai yang benar 

Kalau begitu ssekarang bagaimana cara menggunakannya

#### 1.4.1 Aritmatika
Bisa dilihat di [Tabel Operator](#14-operator) bahwa dalam bahasa pemrograman terdapat matematika jua yang dapat kalian manfaatkan sebagai contoh

```php
$angka = 3 + 2;
echo $angka;
```

Maka akan keluar angka 5. Namun kalian juga bisa membuatnya terlihat singkat seperti ini

```php
echo 3 + 2;
```

Apakah selain penjumlahan memiliki cara yang sama? Ya benar aritmatika semua caranya adalah sama

[Coba aritmatika](/1.%20Sintaks%20Dasar/OperatorAritmatika.php)

```php
echo 5 + 3;
echo 5 - 3;
echo 5 * 3;
echo 5 / 3;
echo 5 % 3;
```

#### 1.4.2 Concatenation

Fungsinya adalah menggabungkan 2 string atau lebih menjadi satu string sebagai contoh adalah ini

```php
$nama_depan = "Ananda";
$nama_belakang = "Cahya";

//Maka cara menggunakannya adalah
echo $nama_depan . " " . $nama_belakang;
```

Ataupun seperti ini

```php
$nama = $nama_depan . " " . $nama_belakang;

echo "Nama saya adalah $nama";
```

#### 1.4.3 Assignment

Untuk ini tentunya untuk menetapkan nilai. Sesuai namanya assign yang artinya tetapkan

```php
$angka = 3 + 2;
echo $angka;
```

Kita ambil contoh sebelumnya nah ini adalah assignment ke variabel. Terus yang aritmatika fungsinya apa?. Nah kira kira begini

```php
$umur = 18;
$umur += 5;
```

Berfungsi? Ya tentu maka umur berubah menjadi 23 karena 18 + 5 sama dengan 23. Kemudian dia menetapkan nilai pada variabel umur secara langsung

Kalau string? Iya begini

```php
$nama = "Ananda";
$nama .= " ";
$nama .= "Cahya";
```

Seharusnya menjadi Ananda Cahya

#### 1.4.4 Perbandingan

Sama seperti namanya yang artinya membandingkan mana yang tertinggi dan terendah, Itu adalah fungsi dari operator ini. Yang sering digunakan adalah lebih besar dan lebih kecil dari. Bagaimana cara menggunakannya

```php
var_dump(10 > 5);
```

Nah sebagai contoh kita akan menggunakan var dump untuk mengetahui nilai jawabannya. 10 kan lebih besar dari 5 maka harusnya dia bener dong. Nah dijawablah true sama si perbandingan. Silahkan di coba

#### 1.4.5 Identitas

Nah yang ini fungsinya adalah untuk memeriksa apakah jawaban dari 2 variabel sama dan memiliki tipe data yang sama juga

Contoh

```php
var_dump(10 === "10");
```
Apakah benar. Tidak salah, jika programnya membaca ini akan beranggapan hal yang sama. Lho salahnya dimana kan sama sama sepuluhnya. Nggak bisa ya, karena sepuluhnya itu satu bilangan bulat dan satunya teks atau string

```php
var_dump(10 !== "10");
```
Kalau ini baru benar karena dia butuh validasi jika mereka itu berbeda, dan ternyata beneran berbeda maka dia akan mengiyakan.

#### 1.4.6 Logika

Untuk ini dia fungsinya adalah untuk memastikan jika terdapat 2 perbandingan yang memiliki jawaban yang sama atau tidak

```php
var_dump(10 > 5 && 3 > 4);
```

Sebagai contoh ini nah dia memiliki 2 jawaban berbeda. Antara satu benar dan satunya lagi salah. Untuk itu karena dia membutuhkan keduanya benar dia akan menjawab hasil dari perbandingan keduanya tidak memenuhi syaratnya atau `false`

```php
var_dump(10 > 5 || 3 > 4);
```

Berbeda dengan sebelumnya. Kali ini dia hany membutuhkan salah satunya benar. Maka dia akan mengiyakan dan menganggap sudah menenuhi syarat.