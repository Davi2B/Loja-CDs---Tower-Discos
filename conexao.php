<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "loja";

$connection = mysqli_connect($server, $user, $pass, $db);

if (!$connection) {
	echo "Não conectado";
}
?>