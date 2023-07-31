<?php
    // include_once "../controller/update.php";
    function viewUpdate(){
        global $data;        
        echo "Masukkan nomor list yang akan di edit : ";
        $update=input();
            if ($update<=count($data)&&$update>0){
                echo "List yang akan anda edit $data[$update] :\n";
                $updated=input();
                update($update,$updated);
            }elseif ($update>count($data)||$update<0||!is_numeric($update)){
                echo "Input Invalid\n";
            }
    }

?>