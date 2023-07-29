<?php
    include_once "../controller/read.php";
    function viewRead(){
        global $data;
        if(empty($data)){
            echo "----- List -----\n";
            echo "1.-".PHP_EOL;
        }else{
            echo "----- List -----\n";
            read("ucwords");
        }
    }
?>