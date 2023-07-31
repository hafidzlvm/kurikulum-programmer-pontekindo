<?php
    // include_once "../controller/delete.php";
    function viewDelete(){
        global $data;
        echo "Nomor list yang akan di hapus : ";
        $delete=input();
        if ($delete<=count($data)&&$delete>0){
            echo "List '".ucwords($data[$delete])."' akan di hapus.\n";
            delete($delete);
        }elseif ($delete>count($data)||$delete<0||!is_numeric($delete)){
            echo "Input Invalid\n";
        }
    }
?>