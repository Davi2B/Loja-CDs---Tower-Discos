<?php
include_once 'conexao.php';
$id = $_GET["id"];
if (isset($_GET["id"])) {
$sqlu = mysqli_query($connection, "DELETE FROM usuarios WHERE id = {$id}") or die(mysqli_error($connection));
	header('location: usuarios.php');
	}
?>