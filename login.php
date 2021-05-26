<?php 
session_start();
include_once('conexao.php');

if (empty($_POST['email']) || empty($_POST['senha'])) {
 	header('location: index_login.html');
	exit();
 } 
$usuario = msqli_real_escape_string($connection, $_POST['email']);
$senha = msqli_real_escape_string($connection, $_POST['senha']);

$querry = "select usuario from where usuario = '{$email}' and senha = 'md5({$senha})'";

$result = mysqli_query($connection, $querry);

$row = mysqli_num_rows($result);

if ($row == 1) {
	$_SESSION['email'] = $usuario;
	header('location: index.php');
	exit();
} else{
	$_SESSION['nao_autenticado'] = true;
	header('location: index_login.html');
	exit();
}

?>