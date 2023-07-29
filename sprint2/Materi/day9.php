<?php

// CRUD, Create Read Update Delete.

/* // Bagian 1
echo "Masukkan Inputan  : ";
$b=trim(fgets(STDIN));
$a=[];
$a[count($a)+1]=$b;
// unset($a[0]);
// count($a)+1;
foreach ($a as $key => $value) {
    echo $key . ": " . $value .PHP_EOL;
};   
do {
    echo "Masukkan Inputan  : ";
    $b=trim(fgets(STDIN));
    $a[]=$b;
    foreach ($a as $key => $value) {
        echo $key . ": " . $value .PHP_EOL;
    };   
} while (true);

*/


// Bagian 2

// $array1=[];
// do{ // Create
//     echo "Masukkan Data : ";
//     $input=trim(fgets(STDIN));
//     $index=count($array1)+1;
//     $array1[$index]=$input;
//     // Read
//     foreach($array1 as $key1 => $value1){
//         echo "$key1. $value1\n";
//     }
//     // Update
    // echo "Edit data (y/n) : ";
    // $edit=trim(fgets(STDIN));
    // if($edit=="y"){
    //     echo "Pilih Data Yang Ingin Diedit : ";
    //     $edit=trim(fgets(STDIN));
    //     echo "Anda akan mengedit $array1[$edit]\n";
    //     echo "Masukkan Data Baru : ";
    //     $update=trim(fgets(STDIN));
    //     $array1[$edit]=$update;
    // }
    // // Delete
    // // Menimpa data terlebih dahulu barulah nanti akan dihapus data yang bagian akhir.
//     echo "Hapus data (y/n) : ";
//     $h=trim(fgets(STDIN));
//     if ($h=="y"){
//         echo "Pilih data yang akan dihapus : ";
//         $delete=trim(fgets(STDIN));
//         echo "Anda akan mengdelete $array1[$delete]\n";
//         for($i=$delete;$i<count($array1);$i++){
//             $array1[$i]=$array1[$i+4];
//         }
//     }
// }while(true); 
// */

// Function : wadah yang berisi suatu program tertentu yang bisa kita gunakan kalau kita memanggilnya

function sayHello($name){// Nama di sini adalah parameter : variable yang akan kita gunakan dalam function
    // global $name , $...; bisa mengggunakan koma
    echo "$name Telah Terdaftar" . PHP_EOL;
}
sayHello("Eko");// Dua ini adalah Argument : value yang akan dikirimkan ke parameter
sayHello ("Budi");


function test(){
    echo "Hello Function\n";
}
test();
test();

//  Kode : Kesalahan Default Argument Value
/*
function test2 ($fistName = "Anonymous", $lastName){
    echo "Hello $fistName $lastName" . PHP_EOL;
}
test2 ("Kurniawan"); */
// Nilai Default Harus di letakkan di ahkir agar lebih berguna, karena jika di awal atau di tengah akan eror atau tidak evective.
function test2 ($lastName,$fistName = "Good Morning"){
    echo "Hello $lastName $fistName" . PHP_EOL;
}
test2 ("Kurniawan"); 

// Kode: Type Declaration
function sum(int $first, int /* int yang di sini di sebut data output nya harus integer */ $last)/* : int => ini berfungsi sebagai paksaan akan jawaban integer, atau bisa kita sebut sebagai data outputnya harus integer */{
    $total = $first + $last;
    echo "Total $first + $last = $total" . PHP_EOL;
}
sum ("100", "100");
sum (100, 100);
sum (true, false);
// sum([],[]);

// Kode: Variable-length Argument List
function sumAll(...$values)// titik tiga ini menampung argument dalam jumlah banyak
{
        $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
        echo "Total ".implode (" +", $values) . " = $total" . PHP_EOL;
}
SUmALl (10, 20, 30, 40);
SUmALL(... [10, 20, 30, 40]);

echo "\n";
// Kode: Function Return Value (1)
function sum1(int $first, int $second):int{
    return $first + $second;
}
$total = sum1(10, 10);
var_dump ($total); // jika tanpa var_dump maka data tersebut seperti buah buahan yang hanya di letakkan di dalam belender, artinya cuman ditampung
$total = sum1(20, 20);
var_dump ($total);

