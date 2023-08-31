<?php
    function viewCreate(){
        echo "Masukkan Nama Santri : ";
        $nama=input();
        create($nama);
    }
?>