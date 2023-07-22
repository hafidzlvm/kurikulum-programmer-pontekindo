<?php
// balik:
// echo "Masukkan Nama Produk : ";
// $nama=(ucwords(trim(fgets(STDIN))));
// echo "Masukkan Deskripsi Produk : ";
// $dsc=(ucwords(trim(fgets(STDIN))));
// harga:
// echo "Harga Produk : ";
// $harga=trim(fgets(STDIN));
// 
// if(is_numeric($nama) || is_numeric($dsc)){
    // echo "Masukkan Input yang Benar \n";
    // echo "---------------------------\n";
    // goto balik;
// }
// echo "==============================\n";
// echo "Nama Produk : $nama\n";
// echo "Deskripsi : $dsc\n";
// if (is_numeric($harga)){
    // $harga=number_format($harga,0,"",".");
    // echo "Harga Produk : $harga\n";
// } else {
    // echo "Masukkan Inputan Harga yang Benar\n";
    // echo "----------------------------------\n";
    // goto harga;
// }

// buatlah sebuah inputan dinamis yang mana nanti setelah di echo setiap kata pertama nya ialah huruf capital, produk, deskripsi, harga, di bagian harga harus int dan format numbernya rupiah.


// Manipulasi Array

$array1 = ["Buku", "Pensil", "Pulpen", "Penghapus", "Penggaris"];
$array2 = [
    "Merah" => "Apel",
    "Kuning" => "Lemon",
    "Hijau" => "Mangga",
];


// implode : array -> string
// echo  implode(",",$array1) . "\n";

// explode : string -> array
// var_dump(explode(" ", "Buku Pensil Pulpen Penghapus Penggaris"));

// count : menghitung jumlah data array
// echo count($array2).PHP_EOL;

// mengubah salah satu data dalam array
$array2["Hijau"] = "Melon";
echo $array2["Hijau"].PHP_EOL;

$array1[3] = "Papan Tulis";
// var_dump($array1);
foreach ($array1 as $key => $value) {
    echo $key . " : " . $value . PHP_EOL;
} 

// // menghapus data array
// unset($array2["Hijau"]);
// var_dump($array1);
// unset($array1);
// $array1 = NULL;
// var_dump($array1);
// unset($array1[1]);
// var_dump($array1);



// menambah data array
// $array2[] = "Papan Tulis";
// $array2["nomor"] = "Kertas";
// $array2[] = "Tipe-X";
// var_dump($array2);

// menggabungkan beberapa array
// echo "Array 1 dan 2 digabungkan menjadi array 3 : \n";
// $array3 = array_merge($array1, $array2);
// $keys3 = array_keys($array3);
// $values3 = array_values($array3);
// // var_dump($values3);
// foreach ($values3 as $keys => $values) {
//     echo $keys.":".$values .PHP_EOL;
// }

// Mengurutkan data array
// $numer = [3,1,5,2,4];
// rsort($numer);//dari besar ke kecil
// sort($numer);// dari kecil ke besar
// foreach ($numer as $key => $value) {
//     echo $value . PHP_EOL;
// }

// shuffle untuk mengacak value array
$jankenpon = ['batu','kertas','gunting'];
shuffle($jankenpon);
echo $jankenpon[0];