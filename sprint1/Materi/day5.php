<?php

// // Pengkondisian
// // Ternary
// echo "Nilai : ";
// $nilai = trim(fgets(STDIN));
// // $nilai = 40;
// $result = $nilai >= 100 ? "Perfect" : ( $nilai >= 80 ? "Excellent" : ($nilai >= 40 ? "Good" : "Not Passed" ));
// echo $result .PHP_EOL;

// Buat pengkondisian menggunakan ternary yang menghasilkan nama buah sesuai warna nya apabila kita menginput warna buah(dinamis). Misal bila menginput wanra merah akan mengoutput buah apel

// //  Perulangan 
// $i = 1;
// for (;$i < 10;){
//     echo "Hello\n";
//     $i++;
// }

// for ($i=1;$i<10;$i++){
//     echo "Hello\n";
// }

// buatlah perulangan menggunakan for loop dengan kondisi if-else dimana output akan menghasilkan warna merah apabila nilai $i bernilai 5 dan berwarna hijau apabila nilai $i bernilai 10

/*
1
2
3
4
merah
6
7
8
9
*/

// // Ini adalah Contoh dari for loop
// // for (Nilai Awal;Batas Akhir;Post Steatment)
// $i=1;
// for (;$i<11;$i++){
//     if ($i==5){
//         echo "Merah\n"; // bisa juga memasukkan continue sebagai property fungsinya mengskip nilai 5 yang dituju
//     } elseif($i==10) {
//         echo "Hijau"; // bisa juga memasukkan break sebagai property fungsinya menghilangkan perulangan di nilai 10 
//     } else {
//         echo $i.PHP_EOL;
//     }
// }
// echo "\n";

// // While Loop, Contoh :
// // Di dalam nya hanya ada kondisi, Dan lebih simpel dari pada For
// $i = 1;
// while ($i<=10){
//     echo "Hello\n";
//     $i++;
// }

// DO WHILE , Minimal dilakukan sekali walaupun tidak bernilai true dan ini merupakan perbedaan antara while dan do while.

$counter = 3;

do {echo "Hello While Loop : ".$counter . PHP_EOL;
$counter++;
} while ($counter <= 10);
