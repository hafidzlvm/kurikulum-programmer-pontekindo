<?php 
// contoh jika kita memiliki abstarct class dengan nama kendaraan
abstract class Kendaraan{
    static public $string = "Kendaraan";
    abstract function berjalan();
    // ini dijadikan sebuah patokan sehingga tidak bisa djalankan di child class 
    public function gas(){
        echo "Ini kelas parent";
    }
}

class Mobil extends Kendaraan {
    public function gas (){
        echo parent::$string;
    }
    public function berjalan(){
        echo "Mobil Berjalan";
    }
    static public function showMobil(){
        echo "Mobil";
    }
}

class Motor extends Kendaraan {

    public function berjalan(){
        echo "Motor Berjalan";
    }
}


// echo Kendaraan::$string;
$mobil = new Mobil();
$mobil->gas();
echo "<br>";
$mobil->showMobil();
// Mobil::gas();
echo "<br>";
Mobil :: showMobil();
echo "<br>";
echo Mobil :: $string;





?>