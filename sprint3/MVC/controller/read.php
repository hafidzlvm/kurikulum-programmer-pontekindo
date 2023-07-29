<?php

function read($filter){
    global $santri;
    foreach ($santri as $no => $nama){
        echo "$no. ".$filter($nama).PHP_EOL;
    }
}