<?php

echo "------Operator Perbandingan-------\n";


// Sama Dengan -> == : nilai yang dibandingkan dengan nilai lainnya, nilai tersebut memiliki nilai yang sama meskipun tipe data yang berbeda maka outputnya true
var_dump("1945" == 1945);


// identik -> === : nilai dan tipe data harus sama agar outputnya true
var_dump("1945" === 1945);

// Tidak Sama Dengan -> <> / != : nilainya tidak sama maka hasilnya true, tipe data tidak mempengaruhi
var_dump("21" != 22 ); // maka output nya true


// Tidak Identik -> !== : nilai dan tipe data tidak sama maka hasilnya true
var_dump(100!==100); // maka hasil nya false karena ia tidak identik (sama)

// Kurang dari -> < : kalau nilai perbandingan nya benar maka true
var_dump(23 < 22); // hasilnya false

// Lebih dari -> > 
var_dump(35 > 33); // true

// Kurang dari Sama Dengan -> <= 
var_dump(77<=77); // true

// Lebih dari Sama Dengan -> >= 
var_dump(53>=33); // true



echo "-----------Operator Logika-----------\n";
// And -> && / and : salah satu false maka hasilnya false
var_dump(77<=77 && 25===29);

// Or -> || / or : salah satu true maka hasilnya true
var_dump(true || false);

// Xor -> xor : kalau input sama maka hasilnya false
var_dump(false xor false);

// Not -> ! : true jika $a bernilai false
$a = 4; 
var_dump(5 == !$a);


echo "------------Operator Increment dan Decrement------------\n";
// post increment -> (diakhir)dikembalikan dulu varnya baru ditambah nilai 1
$angka = 22 ;
$angka++;
echo $angka .PHP_EOL;
// pre increment -> (diawal)ditambah nilai 1 dulu baru dikembalikan ke varnya
$angka = 23 ;
++$angka;
echo $angka .PHP_EOL;


// post decrement -> -- (diakhir) dikembalikan dulu varnya baru dikurang nilai 1
$angka = 22 ;
$angka--;
echo $angka .PHP_EOL;
// pre decrement  -> -- (diawal) dikurang nilai 1 dulu baru dikembalikan ke varnya
$angka = 23 ;
--$angka;
echo $angka .PHP_EOL;


$a =1;
$b =1;

$a = $b++; // jika menggunaka pre seperti $a=++$b maka hasil yang keluar ialah 2 dan 2 karena command pre memilki dampak ke variable yang ada di depan nya ataupun di belakang nya
echo $a .PHP_EOL;
echo $b .PHP_EOL;























