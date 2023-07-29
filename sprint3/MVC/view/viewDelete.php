<?php

    function viewDelete(){
        global $santri;
        echo "Data yang ingin dihapus : ";
        $delete = input();
        echo "Anda akan menghapus $santri[$delete]\n";
        delete($delete);
    }
?>