<?php
    function viewRead(){
        global $santri;
        if (empty($santri)){
            echo "Data Kosong\n";
        }else {
            echo "----- Data Santri -----\n";
            read("ucwords");
        }

    }
