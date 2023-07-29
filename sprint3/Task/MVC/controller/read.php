<?php
    function read($filter){
        global $data;
        foreach($data as $no => $value){
            echo "$no.".$filter($value).PHP_EOL;
        }
    }
?>