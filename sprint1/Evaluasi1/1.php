<?php

// 1. Perbedaan dari != dan !== ialah jika yang pertama memiliki arti ketidak samaan dan yang kedua ketidak identikan, artinya tipe nya tidak sama
$a = 100;
$b = "100";
var_dump ($a!=$b);// -> false, nilai a sama dengan nilai b, adapun jika nilai nya sama walaupun berbeda tipe akan tetap true
var_dump ($a!==$b);// -> true, nilai a tidak satu type dengan nilai b

echo "\n";

// 2. Perbedaan variable dan constanta, ialah variable sebuah nilai yang dapat berubah ubah dengan adanya pendeklarasian baru, adapun constanta suatu yang tetap ketika awal pendeklarasian tersebut.
// echo "Contoh Variable : "; 
// $c=1_2_3_4_5;
// echo $c.PHP_EOL;
// echo "Contoh Constanta : ";
// define ("d","Tendencies",);
// echo d;
// define ("d","Decimal",);
// echo d;// ini adalah contoh bahwa constanta merupakan nilai static

echo "\n";

// 3. Daftar array anggota 1 divisi 
// $e = array(
//     "Danu"(
//         17,
//         "Jambi",
//     )
// )
// echo $e(Danu);
echo "No .3 ..... thx u";

// 4. Operator Penugasan

$f=0;
$g=50000;
$h=20000;
$i=5000;

$f+=$g;
$f-=$h;
$f+=$i;

echo "Uang Budi saat ini : $f\n";

echo "\n";

// 5. Aritmatika
$j=7;
$k=3;

echo $j**$k.PHP_EOL;

// 6.Operator Logika dan Pengkondisian
echo "\n";
echo "Nama : Budi \n";
echo "List :
-baik
-cukup baik
-kurang
Akhlak Budi : ";
$akhlak=trim(fgets(STDIN));
echo "Budi Adalah Seorang yang Good Rekening? [Y/n]";
$goodr=trim(fgets(STDIN));
echo "Budi Adalah Seorang yang Good Looking? [Y/n]";
$goodl=trim(fgets(STDIN));

if ($akhlak == "baik" and $goodr == "y") {
    echo "acc";
} elseif ($akhlak == "baik" and $goodl == "y") {
   echo "acc";
} else {
   echo "not acc";
}

echo "\n";
echo "\n";

// 7. Buatlah Switch

echo "Berat Timbangan : ";
$berat = trim(fgets(STDIN));

switch ($berat) {
    case $berat<11:
    echo "Ringan kok....";
        break;
    case $berat<21:
        echo "Agak Ringan paling kek ngankat semut....";
            break;
    case $berat<1000:
        echo "Ini mah Ringan pol pol pol....";
            break;
    default:
    echo "Ringan banget kek makan angin";
        break;
}
echo "\n";
