<?php
// --------------------------- 6. Operator Assignment
/*
? Apa ini?
Fungsinya adalah untuk mengisi atau assign variabel
* Nah operator ini terdapat beberapa tanda sama seperti aritmatika. Jelas yang pertama ada = dasar dari assign ini. Kemudian ada +=, -=, *=, /=, dan %=
*/

$angka = 7;
echo $angka;
$angka += 8;
echo $angka; //Hasilnya akan menjadi 15
$angka -= 2;
echo $angka; //Hasilnya akan menjadi 13
$angka *= 5;
echo $angka; //Hasilnya akan menjadi 65
$angka /= 5;
echo $angka; //Hasilnya akan menjadi 13
$angka %= 5;
echo $angka; //Hasilnya adalah 3

// ? Jadi ini apa
// Ya harusnya udah bisa ditebak bahwa kita bisa langsung menambahkan variabel tanpa membuatkannya variabel baru. Atau mungkin mudahnya dibilang kalau yang lama diganti yang baru.

// * Nah sekarang string yang tadi

$nama = "Ananda";
$nama .= " ";
$nama .= "Cahya";
echo $nama; // Hasilnya adalah Ananda Cahya

?>