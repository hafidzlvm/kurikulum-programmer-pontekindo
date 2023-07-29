<?php
function create($nama){
    global $santri;
    $index=count($santri)+1;
    // echo "Masukkan Nama Santri : ";
    // $nama=input();
    $santri[$index]=$nama;
}           