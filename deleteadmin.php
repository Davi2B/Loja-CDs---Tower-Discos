<?php 
include_once 'conexao.php';
$id = $_GET["id"];
if (isset($_GET["id"])) {
	$sqlp = mysqli_query($connection, "DELETE FROM produto WHERE id = {$id}") or die(mysqli_error($connection));
	header('location: tabeladmin.php');
}
 ?>