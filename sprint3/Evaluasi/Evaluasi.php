<?php

    $soal1=[216, 769, 255, 512, 363, 121];
    function tigaTertinggi(){
        global $soal1;
        rsort($soal1);
            foreach ($soal1 as $key => $value){
                if($key<3){
                    echo $value.PHP_EOL;
                }
            }

    }
    tigaTertinggi();
        

    
    $tinggi=20;
    $alas=12;
    $luasSegitiga=fn()=>1/2*$alas*$tinggi;
    echo "Luas Segitiga : ".$luasSegitiga().PHP_EOL;

    function ubahData(...$data){
        echo implode("|",$data);
        

    }
    ubahData("Vario","Supra","Revo","Vixion","Mio","Beat");
    echo PHP_EOL;

    echo "Masukkan Jumlah Penduduk : ";
    $input=trim(fgets(STDIN));
    $jumlahPenduduk=function($input){
        if ($input>200){
            echo "padat penduduk\n";
        }elseif ($input>=100 and $input<200){
            echo "cukup penduduk\n";
        }elseif ($input<100){
            echo "sedikit penduduk\n";
        }
    };
    echo $jumlahPenduduk($input);
    echo PHP_EOL;

    // 5. 
    // Variable scope adalah kondisi dimana kita menggunakan variable tersebut, ada yang cakupan kondisi nya luas, ada yang terbatas.
    // jenis-jenisnya global scope,local scope, static scope.

    // global scope
    $contoh="ini contoh ";
    $contoh2="global scope";
    echo $contoh." ".$contoh2.PHP_EOL;
    // varible ini dapat di panggil dimana saja setelah letak pendeklarasian
    
    // local scope
    function localScope(){
        // global $contoh; // variable yang diluar function dapat di panggil menggunakan global 
        $contoh="ini contoh local scope\n";
        echo "$contoh\n";
    }
    localScope();

    // variable contoh di dalam function tidak dapat dipanggil ke luar function dan function dapat di panggil di mana saja setelah function di deklarasikan, untuk menggunakan

    //ada juga static scope berguna agar data di dalam function tersimpan dan tidak terhapus. dengan menambahkan keyword static.

    require_once "index.php";
    $nilaiSantri = [90, 85, 94, 77, 62, 88];
    nilaiSantri();

?>