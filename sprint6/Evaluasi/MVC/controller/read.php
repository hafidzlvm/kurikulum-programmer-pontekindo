<?php 
include_once "../model/data.php";


function transaction(){
    global $conn;
    $query = "SELECT
    t.id AS id,
    t.jenis_transaksi AS jenis_t,
    COALESCE(p.jumlah, peng.jumlah) AS jumlah,
    COALESCE(p.id, peng.id) AS id_p_pg,
    COALESCE(p.tanggal, peng.tanggal) AS tanggal_t

    FROM
        transaksi t
    LEFT JOIN
        pemasukan p ON t.id_pemasukan = p.id
    LEFT JOIN
        pengeluaran peng ON t.id_pengeluaran = peng.id
    ";

    $result=mysqli_query($conn,$query);
    $rows=[];
    while($row = mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }
    return $rows;
}
function saldo(){
    global $conn;
    $query = "SELECT * FROM view_saldo";
    $result=mysqli_query($conn,$query);
    $a = mysqli_fetch_assoc($result);
    foreach ($a as $b){
        return $b;
    }

}
// Khusus Update
function read_pemasukan($id){
    global $conn;
    $query = "SELECT * FROM pemasukan WHERE id = $id";
    $result=mysqli_query($conn,"$query");
    $rows=[];
    while($row = mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }
    return $rows["0"];
}
function read_pengeluaran($id){
    global $conn;
    $query = "SELECT * FROM pengeluaran WHERE id = $id";
    $result=mysqli_query($conn,"$query");
    $rows=[];
    while($row = mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }
    return $rows["0"];
}
// Khusus Delete
function read_p(){
    global $conn;
    $query = "SELECT * FROM pemasukan";
    $result=mysqli_query($conn,"$query");
    $rows=[];
    while($row = mysqli_fetch_assoc($result)){
        $rows[]=$row["id"];
    }
    return $rows;

}
function read_pg(){
    global $conn;
    $query = "SELECT * FROM pengeluaran";
    $result=mysqli_query($conn,"$query");
    $rows=[];
    while($row = mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }
    return $rows["0"]["id"];
}




?>