<?php 
require_once "model/data.php";
function conn(){
    global $conn;
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else
    echo "Connected successfully";
}
?>