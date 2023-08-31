<?php


echo "----------------Apl----------------\n";

echo "Masukkan Nama Konsumen = ";
$n = trim (fgets(STDIN));
echo "Belanjaan 1 = ";
$n1 = trim (fgets(STDIN));
echo "Harga $n1 = ";
$h1 = trim (fgets(STDIN));
echo "Belanjaan 2 = ";
$n2 = trim (fgets(STDIN));
echo "Harga $n2 = ";
$h2 = trim (fgets(STDIN));
echo "Belanjaan 3 = ";
$n3 = trim (fgets(STDIN));
echo "Harga $n3 = ";
$h3 = trim (fgets(STDIN));
echo "\n";
echo "\n";
echo "\n";
$t=$h1+$h2+$h3;
echo "Nama : $n\n";
echo "Total Belanjaan = $t\n";


if($t >= 50000){
    echo "Total Promo = 5000";
    echo "\n";
}elseif($t >= 30000){
    echo "Total Promo = 4000";
    echo "\n";
}elseif($t >= 25000){
    echo "Total Promo = 3,500";
    echo "\n";
}elseif($t >= 20000){
    echo "Total Promo = 2000";
    echo "\n";
}elseif($t >= 15000){
    echo "Total Promo = 1,500";
    echo "\n";
}elseif($t >= 10000){
    echo "Total Promo = 1000";
    echo "\n";
}elseif($t >= 5000){
    echo "Total Promo = 500";
    echo "\n";
}elseif($t < 5000){
    echo "Total Promo = 0";
    echo "\n";
};

$t1=$t-5000;
$t2=$t-4000;
$t3=$t-3.500;
$t4=$t-2000;
$t5=$t-1.500;
$t6=$t-1000;
$t7=$t-500;
$t8=$t-0;

if($t >= 50000){
    echo "Total = $t1";
    echo "\n";
}elseif($t >= 30000){
    echo "Total = $t2";
    echo "\n";
}elseif($t >= 25000){
    echo "Total = $t3";
    echo "\n";
}elseif($t >= 20000){
    echo "Total = $t4";
    echo "\n";
}elseif($t >= 15000){
    echo "Total = $t5";
    echo "\n";
}elseif($t >= 10000){
    echo "Total = $t6";
    echo "\n";
}elseif($t >= 5000){
    echo "Total = $t7";
    echo "\n";
}elseif($t < 5000){
    echo "Total = $t8";
    echo "\n";
};

echo "----------Terimakasih Telah Berbelanja-----------\n";

