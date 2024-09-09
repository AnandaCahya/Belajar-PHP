<?php
// --------------------------- 1. Output Dasar PHP

// Untuk output PHP sendiri ada
/*
- print // Menampillkan Variabel dan tulisan ke layar 
- echo //  Sama seperrti print
- print_r // Untuk melihat array
- var_dump // Untuk melihat variabel

2 Terakhir fungsinya lebih kearah untuk debugging mengetahui isi variabel tanpa menampilkan ke layar
*/

echo "Nama saya adalah Panji"; // Pasti kalau di lihat di versi webnya akan keluar Nama saya dalah Panji

// ! Oh Iya jangan lupa dikasih titik koma ya ';'

print "Saya adalah seorang proggramer pemula"; // Sama

// ? Kalau yang print_r sama var_dump sama kah?
// Beda ya coba buat seperti ini

print_r("Nama saya adalah Panji");

// ? Lho katanya buat array
// * Untuk print_r itu bisa untuk menampilkan array dan string

//Nah ini yang beda
var_dump("Nama saya adalah Panji"); // Pasti keluarannya 

// ? Kalau mau nampilin angka?
// Bisa coba aja begini

echo 120; // * Untuk nampilin angka tidak usah diberi tanda petik

// ? Kalau mau nampilin boolean

echo true; //Begini untuk true
echo false; //Dan begini untuk false

/* 
* Nah kita bahas ulang untuk string tadi. Untuk tanda petik kalian bisa menggunakan ' dan "
? Fungsinya buat apa kok ada dua
Untuk penggunaan sendiri bisa disesuaikan sesuai kebutuhan. Semisal kita ingin menuliskan kata
yang memiliki tanda ' seperti Jum'at nah kita bisa melihat seperti ini
*/

echo "Jum'at"; //Tidak ada yang eror

// ! Jadi untuk string sendiri itu harus dibuka dengan tanda petik yang sama. Jika dimulai menggunakan petik " maka diakhiri dengan itu juga
// Jadi jika ada kata yang menggunakan ' dan kamu membuat string menggunakan ' pasti akan terjadi masalah, Karena misal kata Jum'at, sebelum kata at itu diaggap sebagai penutup string. Coba aja deh hehehe
// * Jadi kita harus peka sama program kita, Karena mereka tidak peka dan menganggap itu sebagai penutup ^^. Hehehe bercanda

?>