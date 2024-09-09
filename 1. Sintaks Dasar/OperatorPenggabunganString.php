<?php
// --------------------------- 5. Operator Penggabungan String PHP

/*
? Apa ini?
Fungsinya adalah untuk menggabungkan string. Untuk istilahnya dikenal sebagai concat / concatenation

* Untuk caranya adalah menggunakan tanda .
Berbeda dengan javascript yang menggunakan +
*/

$nama_depan = "Ananda";
$nama_belakang = "Cahya";

//Maka cara menggunakannya adalah
echo $nama_depan . " " . $nama_belakang;

//Atau alternatifnya seperti ini

$nama = $nama_depan . " " . $nama_belakang;

echo "Nama saya adalah $nama";
?>