<?php

// 1.
echo "------------Nomor. 1------------\n";
echo "Masukkan Nama Produk : ";
$n_produk=ucwords(trim(fgets(STDIN)));
balik1:
echo "Deskripsi Produk : ";
$d_produk=trim(fgets(STDIN));
$d1_produk=str_word_count($d_produk);
if ($d1_produk>5){
    echo "Deskripsi terlalu panjang\n";
    goto balik1;
}
balik11:
echo "Masukkan Inputan Id : ";
$id=trim(fgets(STDIN));
$cek=strlen($id);
$cek2=is_numeric($id);
if ($cek>8 or $cek2==false){
    echo "Input Invalid\n";
    goto balik11;
}
echo PHP_EOL;
echo "Nama Produk : $n_produk\nDeskripsi Produk : $d_produk\nId Produk : $id";
echo PHP_EOL;
echo PHP_EOL;
echo "------------Nomor. 2------------\n";
// 2. 
echo "Masukkan Input Barang : ";
$i_barang=trim(fgets(STDIN));
$pol=ucwords($i_barang);
$pol1=(int ($i_barang));

if ($pol1<=50){
    echo "barang rare\n";
}elseif ($pol1>51){
    echo "barang ultra rare\n";
}// elseif()
elseif ($pol=="A" or $pol=="B" or $pol=="C"){
    echo "barang unique";
}elseif ($pol=="D" or $pol=="E" or $pol=="F"){
    echo "barang legend";
}else {
    echo "barang common";
}
// - apabila dua karakter pertama adalah angka di atas 50 maka menampilkan kalimat 'barang super rare'
// - apabila dua karakter pertama adalah karakter dan angka maka menampilkan kalimat 'barang ultra rare'
// - apabila karakter pertama adalah huruf A/B/C maka menampilkan kalimat 'barang unique'
// - apabila karakter pertama adalah huruf D/E/F maka menampilkan kalimat 'barang legend'
// - apabila selain dari itu semua maka menampilkan kalimat 'barang common'

// 3. 
/*
$string="Aqidah & Fiqih & Hadits & Tafsir & Tajwid & Adab";
$array3=explode("&",$string);
var_dump($array3);

// 4. 
echo "----------Nomor. 4----------\n";
$array4 = [-2,4,-18,9,0,21,-5];
$urutkan=rsort($array4);
echo "Urutan :";
foreach ($array4 as $key4 => $value4) { 
    echo $value4." ";
}
$urutkan=sort($array4);
echo "\nPositive : ";
foreach ($array4 as $key44 => $value44) {
    if ($value44>0){
        echo $value44." ";
    }
}
echo "\nNegative : ";
foreach ($array4 as $key444 => $value444) {
    if ($value444<0){
        echo $value444." ";
    }
}
echo PHP_EOL;
echo PHP_EOL;
echo "------------Nomor. 5-7------------\n";
// 5-7.

$data = [
    "id" => 582,
    "username" => "Fulan",
    "email" => "fulan@gmail.com",
    "password" => "123fulan321",
    "password_confirmation" => "123fulan321",
];
// 5. Create nomor
echo "Masukkan Nomor WA : ";
$d_nomor=trim(fgets(STDIN));
$nomor="nomor cellphone";
$data[$nomor]=$d_nomor;

echo "----------------------------------\n";
foreach($data as $key5 => $value5){
   echo "$key5 : $value5\n";
}
// 6. Delete psswd_confirm..
unset($data["password_confirmation"]);

echo "----------------------------------\n";
// 7. Ubah username fulan menjadi nama masing-masing, gunakan foreach
echo "Masukkan Nama Baru : ";
$n_baru=trim(fgets(STDIN));
$data["username"]=$n_baru;
echo "----------------------------------\n";
foreach($data as $key55 => $value55){
    echo "$key55 : $value55\n";
 }

*/