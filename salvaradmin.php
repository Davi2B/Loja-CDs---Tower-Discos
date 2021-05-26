<?php
	include_once 'conexao.php';

	$preco = $_POST['preco'];
	$autor = $_POST['autor'];
	$nome = $_POST['nome'];
	$genero = $_POST['genero'];
		$bdp = "INSERT INTO produto( preco, autor, nome, genero) VALUES ( '$preco', '$autor', '$nome', '$genero')";
		$sqlp = mysqli_query($connection, $bdp);
if (!$sqlp) {
	header('cadasto.php');}
	 else {
	header('cadasto.php');
}


?>