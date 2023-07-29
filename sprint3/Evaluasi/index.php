<?php
    require_once "Evaluasi.php";
    function nilaiSantri(){
        global $nilaiSantri;
        implode($nilaiSantri);
        $max=max($nilaiSantri);
        $min=min($nilaiSantri);
        echo "max : ".$min.PHP_EOL;
        echo "min : ".$max.PHP_EOL;

    }



?>