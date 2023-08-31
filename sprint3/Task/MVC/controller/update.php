<?php
    function update($update,$updated){
        global $data;
        // echo "Masukkan nomor list : ";
        // $update=input();
        // echo "List yang akan anda edit $data[$update] :\n";
        // $updated=input();
        $data[$update]=$updated;
        unset($update,$updated);
    }
?>