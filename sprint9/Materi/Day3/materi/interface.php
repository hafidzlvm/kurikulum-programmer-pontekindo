<?php 
// dia tidak boleh ada properties
interface Kendaraan{ // otomatis akan menjadi abstract, artinya menjadi patokan. 
    public function berjalan();
    public function gas();
}
// untuk interface gunakan implements bukan extends
class mobil implements Kendaraan{
    public function berjalan(){
        echo "Mobil Berjalan";
    }
    public function gas (){
        echo "Ini kelas parent";
    }
}

$mobil = new mobil();
$mobil->berjalan();


// interface hanya sekedar patokan, interface bisa di inheritance

?>