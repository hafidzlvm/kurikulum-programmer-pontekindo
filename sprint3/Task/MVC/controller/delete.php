<?php
    function delete($delete){
        global $data;
        // echo "Masukkan nomor list yang akan di delete : ";
        // $delete=input();
        for($o=$delete;$o<count($data);$o++){
            $data[$delete]=$data[$o+1];
        }
        unset($data[count($data)]);
        // var_dump($data);
    }
?>