<?php
	include_once 'conexao.php';
	$sqlp = mysqli_query($connection, "SELECT * FROM produto") 
   	or die(mysqli_error($connection) 
	);
	$sqlu = mysqli_query($connection, "SELECT * FROM usuarios") 
   	or die(mysqli_error($connection) 
	);
?>