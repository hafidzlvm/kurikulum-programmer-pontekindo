<?php
    include_once "../controller/update.php";
    function viewUpdate(){
        global $data;        
        echo "Masukkan nomor list yang akan di edit : ";
        $update=input();
            if ($update<=$data[$update]){
                echo "List yang akan anda edit $data[$update] :\n";
                $updated=input();
                update($update,$updated);
            }else{
                echo "Input Invalid\n";
            }
    }
?>