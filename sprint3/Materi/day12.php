<?php 
$var=19;
// Variable Function
function hitung($d){
    return $d;
};
$a=hitung(fn($var)=>$var*4);
// echo $a(8);


// Jika menggunakan output validasi maka harus mengguanakan return
// Anonymous function itu Tidak ada nama setelah function seperti function(), adapun jika function contoh(). Maka Contoh Function ini  

// function keliling($keliling){echo"Keliling : ".$keliling(12);}
// keliling(fn($sisi) =>4*$sisi);

// contoh 
// $jadi_uppercase="strtoupper";
// $jadi_uppercase();

// callback function
function naruto($cita, callable $uppercase):string{
    $hasilnya=call_user_func($uppercase,$cita);
    return "Saya akan menjadi ".$hasilnya;
}
// echo naruto("hokage","strtoupper").PHP_EOL;

// recursive function
// jika menggunakan recrusive function ini dapat menjadi problem ketika sangat dalam contoh kita memasukkan FR(3000000) 3 juta.
function FR(int $value): int{
    if ($value==1){
        return 1;
    }else{
        return $value* FR($value-1);
    }
}
// echo FR(8);


// Global scoope and Local Scope,
$nama="Hafidz";
function n(/*$nama*/){
    global $nama;
    echo $nama.PHP_EOL;
}
// n();
function t(/*$nama*/){

    $nama1="Hafidz";
    echo $nama1.PHP_EOL;
}
// t();
// echo $nama1; // tidak dapat di panggil sama sekali(Never Happend)karena merupakan local variable, hanya bisa di panggil di dalam function

function inc(){
    static $loop=0;
    echo "$loop\n";
    $loop++;
}
// inc();
// inc();
// inc();
// inc();


function sayHai($nama){
    echo "Hai $nama\n";
}




// Konsep CRUD : Create, Read, Update, Delete.
// Konsep MVC : Model, View, Controller.
// Model : data yang akan diolah oleh controller
// View : data yang akan ditampilkan oleh controller
// Controller : fungsi yang akan dijalankan untuk manipulasi suatu data