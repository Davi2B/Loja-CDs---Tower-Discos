<?php 
	include_once 'conexao.php';
	include_once'header.php';
	if (isset($_GET['editar'])){
		$id = $_GET["id"];
		$sql = mysqli_querry($conection, "SELECT * FROM usuarios WHERE id=$id ");
		$cont = (is_array($sql)) ? count($sql) : 1 ;
		if ($count) {
			# code...
		$n = mysqli_fetch_array($sql);	
		$alternativa = $n['alternativa'];
		$nome = $n["nome"];
		$curso = $n["curso"];
		$data = $n["data"];

	}
}
if (isset($_POST['editar'])){
		$id = $_GET['id'];
		$nome = $_POST["nome"];
		$senha = $_POST["senha"];
		$email = $_POST["email"];

		$query = "UPDATE usuarios SET nome = '$nome', senha= '$senha', email = '$email' WHERE id = $id ";
	    $consulta = mysqli_query($conection, $query);

	    header('location: tabela.php');
	}
?>
<div style="size: absolute;">
<div class="container col-md-6 offset-md-3" style="margin-left: 350px;">

<br><br><br>

<h2 align="center">Atualizar dados</h2>
<form method="POST">

 <div class="row">
    <div class="col">
      <input name="nome" type="text" class="form-control" placeholder="Nome"></input>
    </div>
    <div class="col">
      <input name="senha" type="password" class="form-control" placeholder="Senha"></input>
    </div>
    <div class="col">
      <input name="email" type="email" class="form-control" placeholder="Email">
    </div>
 </div>

   <button name="editar" type="submit" class="btn btn-primary col-md-6 offset-md-3">Atualizar</button>
</form>
<a href="tabela.php">
	<a href="tabela.php" class="btn btn-danger col-md-6 offset-md-3 ">Cancelar</a>
</a>
</div>

</div>