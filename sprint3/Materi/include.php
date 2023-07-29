<?php

echo "ini require\n";
include_once "day1.php";
sayHai("");
echo "ini require\n";

/*- Pada require, jika file yang kita ambil tidak ada, maka akan terjadi error dan program terhenti
-   Pada include, jika file yang kita ambil tidak ada, maka hanya akan memberi peringatan, namun program akan tetap dilanjutkan
-   Kode program PHP akan dibaca dari atas ke bawah, oleh karena itu pastikan posisi require dan include sesuai dengan yang kita inginkan
-   Misal jika sampai kita salah menempatkan posisi require dan include, bisa jadi kita malah memanggil function yang belum ada 
*/