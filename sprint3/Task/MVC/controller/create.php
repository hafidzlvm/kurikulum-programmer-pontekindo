<?php
    include_once "../helper/input.php";
    include_once "../model/data.php";

    function create($create){
        global $data;
        // echo "Masukkan data baru :\n";
        // $create=input();
        $index=count($data)+1;
        $data[$index]=$create;
    }
?>