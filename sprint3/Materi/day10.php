<?php

function tugas(...$siswa){return $siswa;}
echo implode("\n", 
tugas(
    "Danu","Hanif","Hafidz"
)
);
echo PHP_EOL;