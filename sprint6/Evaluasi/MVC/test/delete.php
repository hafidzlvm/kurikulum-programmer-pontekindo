<?php 
require_once "../controller/delete.php";
$id=$_GET["id"];
$set=$_GET["jenis-t"];

if ($set=='pemasukan'){
    if (deleteRevenue("$id")>0) {
        echo "
        <script>
        alert ('Data Berhasil Dihapus!');
        document. location.href = 'read.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert ('Data Gagal Dihapus!');
        document. location.href = 'read.php';
        </script>
        ";
    }
    
} elseif ($set=="pengeluaran"){
    if (deleteExpenditure($id)>0) {
        echo "
        <script>
        alert ('Data Berhasil Dihapus!');
        document. location.href = 'read.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert ('Data Gagal Dihapus!');
        document. location.href = 'read.php';
        </script>
        ";
    }
}









?>