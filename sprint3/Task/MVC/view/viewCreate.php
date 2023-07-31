<?php
    // include_once "../controller/create.php";
    function viewCreate(){
        echo "Masukkan data baru :\n";
        $create=input();
        create($create);
    }
?>