<?php
function update($edit,$update){
    global $santri;
    // echo "Data yang ingin diedit : ";
    // $edit=input();
    // echo "Anda akan mengedit $santri[$edit]\n";
    // echo "Masukkan Data Baru : ";
    // $update=input();
    $santri[$edit]=$update;
}