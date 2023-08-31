<?php 
// procedural
// $conn= mysqli_connect("localhost","hfdzlvm","sundatila12","market");
// if(mysqli_connect_errno()){
//     echo "Koneski Ke Database Gagal : ".mysqli_connect_error();
// }
// echo "Koneksi Database Berhasil";


// object oriented
// $mysql=new mysqli("localhost","hfdzlvm","sundatila12","market");

// if($mysql->connect_errno){
//     echo "Koneksi Database Gagal : ".$mysql->connect_error;
// }
// echo "Connect Successfully. Host Info : ".mysqli_get_host_info($mysql);


// PDO
// $pdo = new PDO ("","","");

require 'config.php';


try {
	$pdo = new PDO("mysql:local=localhost;dbname=market", $user, $password);

	if ($pdo) {
		echo "Connected to the $db database successfully!";
	}
} catch (PDOException $e) {
	echo $e->getMessage();
}
?>