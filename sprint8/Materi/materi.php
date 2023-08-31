<?php 

class Laptop {
    const DB = "MARIA DB";
    var ?string $brand;
    // var adalah properties
    var float $price = 15.000;
    // 4. type declaration ini kurang lebih sebagai validasi
    // 5. yang kedua ini adalah default value
    // 6. tanda tanya tersebut berguna sebagai nullable, ketika kita isi NULL maka tidak terjadi eror 
    
    // 10. define("PASSWORD","12345"); Belajar const, Define sudah tidak berlaku di dalam class. untuk constant peletakkan nya paling atas lalu properties lalu function


    // 12. method yang paling awal akan otomatis dijalankan. construct 
    function __construct(){
        echo "<br>Hai saya adalah Construct<br>";
    }

    function sayThis($milik,$c){
    echo "INI LAPTOP ".$c($milik)."<br>";
        // 7. ini disebut sebagai method
    }

    function hargaProduk(){
        $harga = number_format($this->price,0,0,".");
        echo "Laptop merek {$this->brand} <br> Harganya Rp. ($harga) <br>";
        echo "Database yang di gunakan adalah : ".self::DB."<br>";
    }
    // 8. untuk penulisan dari kurawal itu merupakan opsional
    // 9. properties akan selalu berada di atas


    // 11. this berkaitan dengan properties adapun constant gunakan self, jadi terdapat dua kata kunci

    // 12. destruct ini akan otomatis dijalankan begitu pula construct, walaupun di simpan tidak di tempat nya namun akan selalu berada di paling atas atau pun bawah, dan contoh penulisan nasional menuntut penulisan construct di paling atas dan sebaliknya
    function __destruct(){
        echo "Hai saya adalah Destruct <br>";
    }
}

class SantriPondokTeknkologi {
    // 1. ini adalah contoh dari class menggunakan CamelCase

}

// 2. contoh dari object, kata kunci new dan diikuti nama class nya.


// 10. Belajar const
// $lenovo = new Laptop();
// $lenovo -> brand = "Lenovo";
// $lenovo -> price = 4500000;
// $lenovo -> hargaProduk();
// echo Laptop::DB;
// echo "<br>";

// 3. ini contoh dari manipulasi properties dengan ->
// $lenovo = new Laptop();
// var_dump($lenovo);
// echo "<br> Nama Brand : ".$lenovo->brand."<br>".PHP_EOL;
// echo "Harga : ".number_format($lenovo->price,0,0,".");
// echo "<br>";
// $lenovo -> sayThis("Fauzan","strtoupper");

// echo "<br>";
// $asus = new Laptop();
// var_dump($asus);
// echo "<br>";
// $hp = new Laptop();
// var_dump($hp);

class Produk extends Laptop {
    
}

// $laptop = new Laptop();
$asus = new Produk;
echo $asus->price;


?>