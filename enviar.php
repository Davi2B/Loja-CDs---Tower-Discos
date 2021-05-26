<?php 
include_once 'conexao.php'

$alternativa = $_POST['alternativa'];
$alter = implode(",", $_POST['alternativa']);
$nome = $_POST['nome'];
$curso = $_POST['curso'];
$data = $_POST['data'];


};
if (isset($_POST['alternativa'])) {
	$sql = mysqli_query($conection,"INSERT into  questoes(alternativa, nome, curso, data) VALUES ('
$alter', '$nome', '$curso', $data)");
	header('location: index.html');
}
?>