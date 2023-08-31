<?php
include_once "../model/data.php";
function deleteRevenue($data){
    global $conn;
    $query = "DELETE FROM pemasukan WHERE id = ('$data')";
    mysqli_query($conn, "$query");
    return mysqli_affected_rows($conn);
}
function deleteExpenditure($data){
    global $conn;
    $query = "DELETE FROM pengeluaran WHERE id = ('$data')";
    mysqli_query($conn, "$query");
    return mysqli_affected_rows($conn);
}
?>