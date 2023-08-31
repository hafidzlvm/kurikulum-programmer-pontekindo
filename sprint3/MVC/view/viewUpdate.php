<?php
function viewUpdate(){
    global $santri;
    echo "Data yang ingin diedit : ";
    $edit = input();
    echo "Anda akan mengedit $santri[$edit]\n";
    echo "Masukkan Data Baru : ";
    $update = input();
    update($edit,$update);
}