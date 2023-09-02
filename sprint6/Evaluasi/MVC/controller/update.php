<?php 
include_once "../model/data.php";

function updateRevenue($data){
    global $conn;
    $jumlah = htmlspecialchars($data['jumlah']);
    $id = $data['id'];
    $query = "UPDATE pemasukan 
        SET jumlah = '$jumlah',
        tanggal = CURRENT_TIMESTAMP          
        WHERE id = $id";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
// CATATAN untuk penulisan query di bagian ke dua mysqli_query harus di tutup string.

}
function updateExpenditure($data){
    global $conn;
    $jumlah = htmlspecialchars($data['jumlah']);
    $id = $data['id'];
    $query = "UPDATE pengeluaran SET 
        jumlah = '$jumlah',
        tanggal = CURRENT_TIMESTAMP
        WHERE id = $id";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
