<?php
echo "-----------------------------------------\n";
echo "-----------Penyewaan Buku Perpus---------\n";
echo "-----------------------------------------\n";
echo "Nama Penyewa : ";
$n=trim(fgets(STDIN));
echo "Harga Penyewaan Buku : ";
$hb=trim(fgets(STDIN));
echo "Batas Hari Penyewaan : ";
$bs=trim(fgets(STDIN));
echo "Jumlah Hari Penyewaan : ";
$hs=trim(fgets(STDIN));

$ht=$hs-$bs; // hari tenggang
$hbt=$hb*$bs; // harga buku dalam satu kali sewa
$hd=10000; // denda tiap buku
$d=$ht*$hd;
$t=$d+$hbt;
echo"\n";
switch ($ht){
    case $ht>=1:
        echo "Denda : $d\n";
        echo "Total : $t";
        break;
    default:
        echo "Invalid Input";
        break;
}
echo "\n";
echo "-----------------------------------------\n";