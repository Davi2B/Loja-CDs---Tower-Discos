<?php 
include_once 'conexao.php';
$id = $_GET["id"];
if (isset( $_GET["id"])) {
	$sql = mysqli_query($conection, "DELETE FROM usuarios WHERE id= {$id}") or die(mysqli_error($conection));
	header('location: tabela.php');
}


 ?>