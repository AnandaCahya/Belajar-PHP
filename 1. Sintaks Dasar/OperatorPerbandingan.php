<?php
// * --------------------------- 7.1. Operator Perbandingan PHP

/*
? Apa ini?
Fungsinya adalah untuk melihat apakah angka itu memiliki nilai sesuai dengan pembandingnya

* Untuk caranya adalah menggunakan tanda <, >, <=, >=, !=
Kalau untuk < dan > untuk melihat apakah itu lebih besar atau lebih kecil 
Kalau untuk <= dan >= untuk melihat nilai tersebut seperti diatas namun dengan tambahan jika angka tersebut sama maka akan di iyakan
Kalau untuk tanda == dan != jika nilainya sama atau tidak sama

? Maksudnya di iyakan itu bagaimana dan apa maksudnya jika sama?
Jadi kalau semisalnya angkanya sama / sesuai dia akan mengembalikan boolean
*/

//Mudahnya kita coba ini
var_dump(10 > 5); //Harusny a jika dijalankan dia akan menjawab iya
//Nah disitu dia akan mengembalikan nilai true

// ? Masih kurang paham nih
//Anggap saja jika true dia mengiyakan jika false berarti menjawab tidak. Atau kalau menurut bahasa, true berarti benar dan false artinya salah

// * --------------------------- 7.2. Operator Identitas PHP

/*
? Apa ini?
Fungsinya adalah untuk melihat apakah memiliki tipe data yang sama

* Untuk caranya adalah menggunakan tanda === dan !==
Kalau untuk === untuk melihat apakah itu memiliki tipe data yang sama
Kalau untuk !== untuk melihat apakah itu memiliki tipe data yang tidak sama


? Maksudnya di iyakan itu bagaimana dan apa maksudnya jika sama?
Akan lebih muda jika dibandingkan antara 1 dan "1". Dua ini memiliki tipe data yang berbeda bukan?. Kita coba saja
*/

var_dump(3 === "3"); //Kan ini berbeda tuh. Nah jawabannya false
var_dump(3 !== "3"); //Nah karena dia melihat apakah keduanya berbeda. Maka jawabannya adalah true

// * --------------------------- 7.2. Operator Logika PHP

/*
? Apa ini?
Fungsinya adalah untuk melihat apakah ada dua ketentuan itu sama sama atau salah satunya benar

* Untuk caranya adalah menggunakan tanda !, && dan ||
Kalau untuk && untuk melihat apakah dua ketentuan sama sama terpenuhi
Kalau untuk || untuk melihat apakah dua ketentuan salah satunya terpenuhi

*/

//Contohnya seperti ini
var_dump(5 > 2 && 1 > 2); 
//Nah untuk ini pasti jika di coba akan menghasilkan false. Alasannya karena hanya 5 lebi besar dari 2 saja yang benar. Sedangkan satunya salah
//Contohnya seperti ini
var_dump(5 > 2 || 1 > 2); 
//Nah untuk ini pasti jika di coba akan menghasilkan true. Alasannya karena 5 lebi besar dari 2 sudah benar. Karena salah satu benar saja sudah dianggap cukup maka dia menyatakan bahwa itu benar

// * Mudahnya anggap saja jika && adalah dan, kemudian || itu atau

// ? Terus yang ! bagaimana
//Coba ini
var_dump(!5 > 2); //Coba jalankan hasilnya kira kira jawabannya apa
// Kalau kalian jawab hasilnya sebaliknya dari jawaban nya maka kalian benar. Itu fungsinya
// * Anggap saja jika kalian menambahkan ! maka dia akan jadi pertanyaan "jika bukan"
// ? Gimana tuh
// * Begini contohnya adalah diatas !5 > 2. Maka akan jadi seperti "Jika 5 tidak lebih besar dari 2' Maka karena dia lebih besar maka dia anggap salah


?>