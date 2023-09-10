<?php 
require_once "model/db.php";
require_once "model/util.php";

$db = new Database;
$util = new util;

$id=$_GET['id'];
$i=$_GET['no'];
$readOne = $db->readOne($id);

if (isset($_POST['Edit'])) {
    $id = $util->testInput($_POST['id']);
    $jenis = $util->testInput($_POST['jenis']);
    $jumlah = $util->testInput($_POST['jumlah']);
    if ($db->update($id, $jenis, $jumlah)) {
      echo $util->showMessage2('Updated successfully!');
    } else {
      echo $util->showMessage2('Something went wrong!');
    }
}

?>