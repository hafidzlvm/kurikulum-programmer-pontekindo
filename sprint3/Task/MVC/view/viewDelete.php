<?php
    include_once "../controller/delete.php";
    function viewDelete(){
        global $data;
        echo "Nomor list yang akan di hapus : ";
        $delete=input();
        echo "List ".$data[$delete]." akan di hapus.\n";
        delete($delete);
    }
?>