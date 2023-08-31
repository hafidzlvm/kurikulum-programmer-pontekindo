<?php
    function delete($delete){
        global $data;      
            for($o=$delete;$o<count($data);$o++){
                $data[$o]=$data[$o+1];
            }
        unset($data[$o]);
        // var_dump($data,$count);
    }
?>