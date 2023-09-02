<?php 
require_once "../controller/delete.php";
require_once "../controller/read.php";
$id=$_GET['id'];
$read = read($id);
$reads = $read[0];
var_dump($reads['id_p_pg']);

// var_dump($id);die;
if ( $reads['jenis_t'] == "pemasukan" ){
    if (deleteRevenue($reads['id_p_pg'])>0) {
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
 elseif ( $reads['jenis_t'] == "pengeluaran" ){
    if (deleteExpenditure($reads['id_p_pg'])>0) {
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