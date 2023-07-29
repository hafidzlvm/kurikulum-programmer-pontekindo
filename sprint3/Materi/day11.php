<?php

function sum($a, $b){
    $t = $a + $b;
    return $t;
}
$penjumlahan=sum(55,45);
echo $penjumlahan.PHP_EOL.PHP_EOL;

// buat variable funciton dengan tujuan untuk menampilkan nama dan devisi dengan parameter di isi default value

function tes($c="Hafidz",$d="Progammer"){
    return "Nama : ".$c.PHP_EOL."Divisi : ".$d.PHP_EOL; 
}
$tes1=tes();
echo $tes1;

// while(true){
    function tes2(...$e){
        return implode(" ",$e);
        /* Ini Hasil Pengerjaan Saya
        $fd=trim(fgets(STDIN));
        $e[]=$fd;
        implode(",",$e);
        return $fd; */
    }
    $tes22="tes2";
    // echo $tes22();
    echo $tes22("Sapi", "Kucing", "Domba").PHP_EOL;

    // echo "Lanjut : ";$kl=strtoupper(trim(fgets(STDIN)));
    // $result=$kl=="Y"?exit:"invalid";
// }

function jumlah_kata($string, $closure){
    echo "Jumlah kata : ".$closure($string);
}
jumlah_kata("Saya adalah seorang kapiten", function($kalimat){return str_word_count($kalimat);});

$buah="Melon";
$tampilBuah= function ($tunjuk) use ($buah){
    echo "$tunjuk $buah\n";
};
$tampilBuah("ini");

// Untuk use HANYA BISA DI PAKAI DI DALAM ANONYMOUS FUNCTION, Dan untuk menggunakan variable luar di dalam function secara umum letakkan global $....; di dalam function