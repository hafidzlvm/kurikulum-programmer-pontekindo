<?php
echo "-----------------------------------------\n";
echo "List Barang Family Mart PonTekIndo 
- Sayur
- Daging
- Beras
- Nasi
- Telur\n";
echo "Masukkan Barang Belanjaan: ";
$barang1=trim(fgets(STDIN));
echo "Masukkan Barang Belanjaan: ";
$barang2=trim(fgets(STDIN));
echo "Masukkan Barang Belanjaan: ";
$barang3=trim(fgets(STDIN));
echo "\n";

$Sayur =10000;
$Daging =35000;
$Beras =30000;
$Nasi=10000;
$Telur=12000;


if($barang1=="Sayur"){
    echo "Sayur : $Sayur";
    $barang1=$Sayur;
}elseif ($barang1=="Daging") {
    echo "Daging : $Daging";
    $barang1=$Daging;
}elseif ($barang1=="Beras") {
    echo "Beras : $Beras";
    $barang1=$Beras;
}elseif ($barang1=="Nasi") {
    echo "Nasi : $Nasi";
    $barang1=$Nasi;
}elseif ($barang1=="Telur") {
    echo "Telur : $Telur";
    $barang1=$Telur;
}
echo "\n";
if($barang2=="Sayur"){
    echo "Sayur : $Sayur";
    $barang2=$Sayur;
}elseif ($barang2=="Daging") {
    echo "Daging : $Daging";
    $barang2=$Daging;
}elseif ($barang2=="Beras") {
    echo "Beras : $Beras";
    $barang2=$Beras;
}elseif ($barang2=="Nasi") {
    echo "Nasi : $Nasi";
    $barang2=$Nasi;
}elseif ($barang2=="Telur") {
    echo "Telur : $Telur";
    $barang2=$Telur;
}
echo "\n";
if($barang3=="Sayur"){
    echo "Sayur : $Sayur";
    $barang3=$Sayur;
}elseif ($barang3=="Daging") {
    echo "Daging : $Daging";
    $barang3=$Daging;
}elseif ($barang3=="Beras") {
    echo "Beras : $Beras";
    $barang3=$Beras;
}elseif ($barang3=="Nasi") {
    echo "Nasi : $Nasi";
    $barang3=$Nasi;
}elseif ($barang3=="Telur") {
    echo "Telur : $Telur";
    $barang3=$Telur;
}
echo "\n";
echo "\n";
$all=0;
$all+=$barang1;
$all+=$barang2;
$all+=$barang3;
echo "Total : $all\n";