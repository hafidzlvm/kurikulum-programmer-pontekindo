<?php

// Tipe Data Array
// Array Numerik -> indexnya berupa angka yang dimana dimulai dari angka 0

$array = ["string",321,true,null,-12.3];
// var_dump ($array);
echo $array[3]; 
echo PHP_EOL;
echo "\n";
// Array Assosiatif -> indexnya / array key bisa kita atur sendiri, index berupa tulisan pertama sebelum value seperti di bawah; "pertama" dan "kedua" maka dua hal ini bisa juga di isi dengan kata lain contoh "28" maka yang nanti di hitung berupa tulisan seperti di contoh adapun perbedaan nya dengan array biasa maka nanti sebuah index(nilai sebelum value tersebut) ditampilkan dalam sebuah angka nomor yang dimulai dari nomor 0


// Array assosiatif == Map (di bahasa pemrograman lain)
$arrayAssoc = array(
    "pertama" => "awaludin",
    "kedua" => "akhirudin"
);

// var_dump($arrayAssoc);
// echo $arrayAssoc ["pertama"];
// echo PHP_EOL; echo "\n";

// Array di dalam array

$hafidz = array(
    "id" => "1",
    "name" => "Muhammad Hafidz",
    "age" => "19",
    "address" => [
        "city" => [
            "Pontianak",
            "Bandung",
            "Banyumas",
            "Tegal"
        ],
        "country" => "Indonesia"
    ]
);

// Perlu diperhatikan masalah koma dan titi koma, dan yang terpenting juga bahwa jika terdapat tanda panah di dalam array tersebut maka ini menunjukkan index tersebut bisa diubah ubah berbeda dengan array yang index nya tidak bisa di rubah yang defult nya menggunakan numeric

// echo $hafidz["address"]["city"][3]; 
// untuk array di dalam array maka menggunakan tutup kurung siku seperti contoh, echo $hafidz["address"]["city"][3]; bisa juga echo $hafidz["name"];
echo PHP_EOL;


// Nanti menyusul, ada materi mengenai manipulasi array dan string


// Macam-macam operator pada PHP
// Operator Aritmatika -> seperti matematika misal penjumlahan, pengurangan, dan lain-lain
// Operand -> Yang dioperasikan nanti tipe data Number
// Maka nanti operand dari aritmatika adlaah tipe data number


// kalau negatif tinggal di kasi negatif nanti nya -18 * -3 gituu
// Penjumlahan -> +
$num1 = 12;
$num2 = 4;
echo "num1 = $num1";
echo "\n";
echo "num2 = $num2";
echo "\n";
echo "penjumlahan :";
echo $num1 + $num2;
echo "\t";
echo 12 + 12 ;
echo "\n";

// Pengurangan
echo "Pengurangan :";
echo $num1 - $num2;
echo "\n";

// Perkalian -> *
echo "Perkalian :";
echo $num1 * $num2;
echo "\n";

// Pembagian -> /
echo "Pembagian :";
echo $num1 / $num2;
echo "\n";

// Pangkat -> /
echo "Pangkat :";
echo $num1 ** $num2;
echo "\n";

// Modulus (Sisa hasil bagi) -> %
echo "Modulus :";
echo 15 % $num2;
echo "\n";

$num1 = 15; // samadengan di sini menunjukkan penegasan ulang ataupun penegasan
echo "\n";
echo $num1;
echo "\n";
echo "\n";

// Operator Penugasan
// Artinya DiTambah -> += (mirip dengan penjumlahan)

$angka1 = 2;
$angka2 = 4;

// $angka1 += 17;
// Maksud nya $angka1 = $angka1+ 17;
// echo $angka1;
// echo "\n";

// dikurang -> -=
// $angka1 -= $angka2;
// echo $angka1;
// echo "\n";

// dikali -> *=
// $angka1 *= $angka2;
// echo $angka1;
// echo "\n";

// dibagi -> /=
// $angka1 /= $angka2;
// echo $angka1;
// echo "\n";

// pangkat -> **=
// $angka1 **= $angka2;
// echo $angka1;
// echo "\n";

// modulus -> %=
$angka2 %= $angka1;
echo $angka2;
echo "\n";


// Ambil input lewat cli/terminal
// trim adalah fungsi bawaan php untuk menghapus spasi pada awal dan akhir data
$misal = " faqih \n  ";
echo trim($misal);
echo "\n";
echo "\n";
echo "\n";
echo "\n";
echo "\n";
echo "\n";

// fgets adalah fungsi untuk mengambil inputan dari cli/terminal.
// STDIN adalah standar input -> tempat untuk menyimpan data sebelum ditampilkan
// php://stdin, kita menggunakan nya seperti ini

echo "--------Menghitung luas persegi ---------" .PHP_EOL;
echo "Ketikkan sisi persegi : ";
$sisi =trim(fgets(STDIN)); // bacanya dari kiri ke kanan
$luas = $sisi * $sisi;
$keliling = 4 * $sisi;
echo "Sisi = $sisi\n";
echo "Luas = sisi * sisi \nLuas = $sisi * $sisi = $luas" .PHP_EOL ;
echo "Luas = 4 * sisi \nKeliling = 4 * $sisi = $keliling" .PHP_EOL;









