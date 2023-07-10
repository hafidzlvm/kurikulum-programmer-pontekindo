<?php

// // Tipe tipe Data Pada PHP
// // Tipe Data Number


// // Var Dump Bisa DiPakai Untuk Debugging Sama Halnya dengan print_r
// // Var Dump Kurang Lebih Mengecek
// var_dump(1234);
// // print_r(1234);

// // Number menggunakan perintah breupa underscore atay garus bawah
// var_dump(1_123_234_456);

// var_dump(1.45); //float

// // Tipe Data Boolean
// var_dump(true);
// var_dump(false);

// var_dump((bool) "aha"); // jika terdapat data baik "aha" atau nilai 1-## atau (-1)-(-##) maka akan menampilkan true


// // TIpe Data String -> Karakter

// var_dump("karakter");
// var_dump('karakter'); // sama saja, petik satu terbatas hanya untuk karakter saja tidak untuk echo
// echo "\nMuhammad\t Hafidz";

// // Heredoc
// echo <<<here

// bsafdsafdsa
// afdasf "adsf"

// here;

// // TIpe Data NULL -> tipe data yang tidak punya valur
// var_dump(NULL);

// // Tipe Data Array-> tipe data yang berisi beberapa jenis tipe data
// var_dump(array(1,true,"false",NULL));
// var_dump(array(1,true,"false",NULL,true)); // dua contoh ini adalah penggunaan dari array dapat menggunakan kurung biasa atau kurung siku


// VARIABLE -> bisa dirubah nilai nya
$nama = "Hafidz";
$umur = "19";
$nama = "Dota";
$umur = "14";
// yang muncul ialah yang paling terbaru yaitu Dota dan 14

echo 'Nama saya adalah $nama. Umur saya $umur';
echo "\n"; // fungsi nya ialah untuk enter karna jika tidak tulisan yang ditampilkan hanya satu baris kekanan sampai full
echo "Nama saya adalah $nama.\t Umur saya $umur\n";



// CONSTANT
// Temannya Variable ialah CONSTANT -> tidak bisa dirubah nilai nya 
define("NAMA", "HAFIDZ"); // ->menggunakan function bawaan php define
const UMUR = 23; // ->menggunakan const
// const UMUR = 17; jika kita menambahkan line ini maka akan terjadi eror karena konstanta merupakan wadah dari nilai yang sudah tidak bisa dirubah
echo "\n";
echo NAMA . UMUR; // titik di samping memiliki arti "dan" maksudnya mehubungkan antara dua karakter
//  cara bacanya ialah echo constant
echo "\n";

echo $nama;
var_dump($nama); // artinya apa yang di tampilkan nantinya lebih detil contoh (Dotastring(4) "Dota")
echo PHP_EOL;

// menghapus data di dalam variable menggunakan NULL
$nama = NUlL; // NULL tidak case-sensitive
// echo $nama;
var_dump(($nama));

// menghapus variable
unset ($nama);
echo $nama; // yang tertampilkan ialah php warning karena undefined $nama tersebut yang dihapus oleh unset
// var and const is case-sensitive (namanya harus sesuai dengan apa yang dideklarasikan)







