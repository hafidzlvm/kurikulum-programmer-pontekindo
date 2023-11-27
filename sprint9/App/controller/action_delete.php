<?php 
require_once "model/db.php";
require_once "model/util.php";

$db = new Database;
$util = new util;

$i = $_GET['no'];
$readOne = $db->readOne($_GET['id']);

if (isset($_POST['delete'])) {
    $id = $util->testInput($_POST['id']);
    $jenis = $util->testInput($_POST['jenis']);
    if ($db->delete($id, $jenis)) {
      echo $util->showMessage2('Deleted successfully!');
    } else {
      echo $util->showMessage2('Something went wrong!');
    }
}




?>