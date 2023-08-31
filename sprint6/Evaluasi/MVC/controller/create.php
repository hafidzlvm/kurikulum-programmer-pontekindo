<?php 
include_once "../model/data.php";
function revenue($data){
    global $conn;
    $jumlah = htmlspecialchars($data["jumlah"]);
    $query = "INSERT INTO pemasukan (jumlah) VALUE ('$jumlah')";
    mysqli_query($conn, "$query");
    return mysqli_affected_rows($conn);
}
function expenditure($data){
    global $conn;
    $jumlah = htmlspecialchars($data["jumlah"]);
    $query = "INSERT INTO pengeluaran (jumlah) VALUE ('$jumlah')";
    mysqli_query($conn,"$query");
    return mysqli_affected_rows($conn);
}
?>