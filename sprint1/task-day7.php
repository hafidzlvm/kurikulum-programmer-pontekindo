<?php
    $nyawa=2;
    $tebak=(rand(1,9));
    echo "========= Tebak Angka 1-9 ==========\n";
    echo "Nyawa Anda Tersisa : $nyawa\n"; 
for (;$nyawa>-1;){
    $angka=(int) trim(fgets(STDIN));
    if ($angka<$tebak){
        echo "Kurang Tepat\n";
        echo "Nyawa Anda Tersisa : $nyawa\n";
        echo "Yahahaha lagi dong??\n";
    } elseif ($angka>$tebak){
        echo "kelebihan\n";
        echo "Nyawa Anda Tersisa : $nyawa\n";
        echo "Berapa hayoo??\n";
    } elseif ($angka==$tebak){
        echo "Wuiih Deneng Bener\n";
        exit;
    }
    // if ($nyawa==3) {
    //     echo $tebak.PHP_EOL;
    // }
    $nyawa--;
}
echo "$tebak\n";