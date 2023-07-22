<?php

// Buat array assosiative berisi 1 produk fashion dengan disertai id, nama barang, harga, jumlah stok, deskripsi, tanggal produksi.
// Lalu tampilkan menggunakan foreach

$barang=array( // CATATAN PENTING => untuk index key nya harus huruf kecil semua untuk mengikuti standar dan untuk spasi menggunakan garis bawah
    "id" => 93202,
    "nama_barang" => "Flannel",
    "harga" => "150.000 Rp",
    "stok" => "1945",
    "deskripsi" => "Bahan Premium, Tidak Mudah Kusut, Lembut.",
    "tanggal_produksi" => "19/06/20023",
);

// foreach ($ba rang as $key => $val){
//     echo "$key : $val\n";
// }

// FUNCTION
// Setiap fungsi harus berada di dalam tanda kurung
// Manipulasi string : Mengubah/ mengedit, menambah, menghapus.
$string="Hello World Coding";
$var="HELLO WORLD CODING";
$vin="saya suka kurma";
$number=1_324_535;
$c=["Hello", "World", "Coding"];
// strlen() : Menghitung panjang string -> Menghitung jumlah karakter
var_dump(strlen($string));
// str_word_count() : Menghitung jumlah kata dalam string
var_dump(str_word_count($string));
// str_replace() : Mengganti string dengan string yang baru
// jere kenapa ga di buat variable yang baru aja nek make str_replace
// number_format() : Mengubah angka menjadi string dengan format angka
var_dump(number_format($number,1/*bilangan decimal di akhir dari nomor*/,","/*pemisah atau separator dari decimal*/,"."/*separator dari numeric yang puluhan*/));
var_dump(strtoupper($string));
// strtolower() : Mengubah semua huruf menjadi huruf kecil
var_dump(strtolower($var));
// ucowrds() :Mengubah huruf pertama menjadi huruf kapital
var_dump(ucwords($vin));
var_dump(ucwords(strtolower($var)));
// str_repeat() : Mengulang string
echo str_repeat($string.PHP_EOL,7);
// substr() : Mengambil beberapa karakter dari data string
var_dump(substr($string,3,6)); // variable pertama nilai tengah ialah nilai awal, dan terakhir nilai dari jumlah panjang
// Menggunakan kurung kurawal (curly brace) pada variable di dalam string
$buku = "buku";
echo "Saya sedang melakukan pem{$buku}an\n" ."Saya beli $buku baru\n"; // Menambahkan dot juga termasuk dalam manipulasi string
// yang tidak terbaca di echo berupa curly brace, dan yang tidak terbaca di variable ialah "_"
// explode => break string into array
var_dump(explode(" "/*petik dua ini pemisah baik diisi dengan spasi atau koma, jika diisi dengan koma maka yang diecho ialah array 1 line*/,$string));
// Implode => mengubah array menjadi string
echo(implode("-",$c)).PHP_EOL;
