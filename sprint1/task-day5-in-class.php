<?php

$merah="Apel, Ceri, Strawberry, Buah Naga, Palm";
$oren="Jeruk, Mangga, Pepaya, Persik";
$kuning="Pisang, Pear, Lemon";
$hijau="Melon, Avokad, Semangka";
$ungu="Anggur, Blueberry";

echo "--------Jenis - Jenis Buah Berdasarkan Warna--------".PHP_EOL;

echo "--------Menu--------".PHP_EOL;
echo "List Menu : 
1 . Mulai
2 . End
Pilih Menu : ";
$star = trim(fgets(STDIN));
if ($star==1){
echo "Masukkan Warna : ";
$nilai = trim(fgets(STDIN));
// $nilai = 40;
$result = $nilai == "merah" ? "$merah" : ( $nilai == "oren" ? "$oren" : ($nilai == "kuning" ? "$kuning" : ($nilai == "hijau" ? "$hijau" : ($nilai == "ungu" ? "$ungu" : "invalid" ))));
echo $result .PHP_EOL;
}   else{ echo
    exit;
}