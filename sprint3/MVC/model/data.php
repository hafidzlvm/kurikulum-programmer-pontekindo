<?php 

// CRUD
$santri=[];
/*
do{ // Create
    echo "Masukkan Data : ";
    $input=trim(fgets(STDIN));
    $index=count($santri)+1;
    $santri[$index]=$input;
    // Read
    foreach($santri as $key1 => $value1){
        echo "$key1. $value1\n";
    }
    // Update
    echo "Edit data (y/n) : ";
    $edit=trim(fgets(STDIN));
    if($edit=="y"){
        echo "Pilih Data Yang Ingin Diedit : ";
        $edit=trim(fgets(STDIN));
        echo "Anda akan mengedit $santri[$edit]\n";
        echo "Masukkan Data Baru : ";
        $update=trim(fgets(STDIN));
        $santri[$edit]=$update;
    }
    // Delete
    // Menimpa data terlebih dahulu barulah nanti akan dihapus data yang bagian akhir.
    echo "Hapus data (y/n) : ";
    $h=trim(fgets(STDIN));
    if ($h=="y"){
        echo "Pilih data yang akan dihapus : ";
        $delete=trim(fgets(STDIN));
        echo "Anda akan mengdelete $santri[$delete]\n";
        for($i=$delete;$i<count($santri);$i++){
            $santri[$i]=$santri[$i+4];
        }
    }
}while(true); 
*/