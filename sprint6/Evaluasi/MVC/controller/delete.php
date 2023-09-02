<?php
include_once "../model/data.php";
function deleteRevenue($id){
    global $conn;
    $query = "DELETE FROM pemasukan WHERE id = $id";
    mysqli_query($conn, "$query");
    return mysqli_affected_rows($conn);
}
function deleteExpenditure($id){
    global $conn;
    $query = "DELETE FROM pengeluaran WHERE id = $id";
    mysqli_query($conn, "$query");
    return mysqli_affected_rows($conn);
}
?>