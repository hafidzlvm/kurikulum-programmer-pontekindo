<?php

$array1=[];
do{ // Create
    echo "Masukkan Data : ";
    $input=trim(fgets(STDIN));
    $index=count($array1)+1;
    $array1[$index]=$input;
    // Read
    foreach($array1 as $key1 => $value1){
        echo "$key1. $value1\n";
    }
    // Update
    echo "Edit data (y/n) : ";
    $edit=trim(fgets(STDIN));
    if($edit=="y"){
        echo "Pilih Data Yang Ingin Diedit : ";
        $edit=trim(fgets(STDIN));
        echo "Anda akan mengedit $array1[$edit]\n";
        echo "Masukkan Data Baru : ";
        $update=trim(fgets(STDIN));
        $array1[$edit]=$update;
    }
    // Delete
    // Menimpa data terlebih dahulu barulah nanti akan dihapus data yang bagian akhir.
    echo "Hapus data (y/n) : ";
    $h=trim(fgets(STDIN));
    if ($h=="y"){
        echo "Pilih data yang akan dihapus : ";
        $delete=trim(fgets(STDIN));
        echo "Anda akan mengdelete $array1[$delete]\n";
        for($i=$delete;$i<count($array1);$i++){
            $array1[$i]=$array1[$i+4];
        }
    }
}while(true); 
