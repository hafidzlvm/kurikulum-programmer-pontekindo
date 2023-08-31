<?php 

$task0=function(string $task1,$task){
    $task1=trim(fgets(STDIN));
    echo "Jumlah Kata : ".$task($task1);
};
// $task0("",function($task4){return strlen($task4);});


// Buat pemisah nilai Ganjil, Genap
function nilai(...$positif){
    echo "Nilai Genap : ";
    foreach ($positif as $l){
    if($l%2==0){
        echo $l." ";
    }
    }
    echo PHP_EOL."Nilai Ganjil : ";
    foreach ($positif as $l){
        if($l%2==1or$l%2==-1){
            echo $l." ";
        }
        }
}
// nilai(13,32,43,54,-42,-3,-8,-75);


// buat program menghitung luars persegi pakai arrow function
$keterangan="Luas : ";
$arrow1= fn($sisi)=>$sisi*$sisi;
echo $arrow1(14).PHP_EOL;