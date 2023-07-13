<?php

// Ini adalah sebuah wawasan saja
// Experssion : nilai/value
// Statement : kalimat code hingga akhir / titik koma
// Block : code yang berada di dalam {}

// Percobaan -> if

echo "==================================\n";
echo "=======Mendata Nilai Santri=======\n";
echo "==================================\n";
echo "Masukkan Nama Santri :";
$nama=trim(fgets(STDIN));
echo "Masukkan Nilai Santri :";
$nilai=trim(fgets(STDIN));
echo "Nama Santri : $nama\n";
echo "Nilai Santri : $nilai dengan predikat : ";
if($nilai === 100){
    echo "Perfect";
    echo "\n";
}elseif($nilai >=80){
    echo "Excellent";
    echo "\n";
}elseif($nilai >=60){
    echo "Good";
    echo "\n";
}else{
    echo "Not Passed";
    echo "\n";
}
    

// Switch -> mirip seperti if else namun syntax lebih simple