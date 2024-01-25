<?php
$server = "localhost";
$user = "root";
$pass ="";
$database ="db_kantin";
$conn = mysqli_connect($server, $user, $pass, $database);
if(!$conn) {
	die("<script>alert('Gagal tersambung Dengan Database.')</script");
}
?>