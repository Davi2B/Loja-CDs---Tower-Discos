<?php 	include_once 'conexao.php';
	include_once 'headeradm.php';
if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$sqlpp = mysqlpi_query($connection, "SELECT * FROM produto WHERE id=$id ");

    $count = (is_array($sqlpp))? count($sqlp) :1 ;
		if ($count) {
			$n = mysqlpi_fetch_array($sqlp);
			$preco = $n['preco'];
			$autor = $n['autor'];
			$nome = $n['nome'];
			$genero = $n['genero'];

		}
	}
	
	if(isset($_POST['editar'])){
		$id = $_GET["id"];
		$nome = $_POST["nome"];
		$preco = $_POST["preco"];
		$autor = $_POST["autor"];
		$genero = $_POST["genero"];
		$query = "UPDATE produto SET preco = '$preco', autor = '$autor', nome = '$nome', genero = '$genero' WHERE id = $id";
	    $consulta = mysqlpi_query($connection, $query);

	    header('location: tabeladin.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Editar CDs</title>
</head>
	<form method="POST">
<div class="container col-md-5 offset-md-3">
	<input type="hidden" name="id" value="<?php echo $id; ?>"></input>
	<h2>Atualizar de Cds</h2>

		<label>
			<input type="text" name="nome" placeholder="Insira o Novo Nome">
		</label>
		<label>
			<input type="text" name="autor" placeholder="Insira o Novo Autor ou Banda">
		</label>
		<label>
			<input type="text" name="preco" placeholder="Insira o Novo Preço">
	</label>
	<label>
		<select name="genero">
			<option>Insira o Novo Gênero</option>
			<option>Forró</option>
			<option>Rock</option>
			<option>Pop</option>
			<option>Sertanejo</option>
			<option>Eletrônica</option>
			<option>Jazz</option>
			<option>Country</option>
		</select>
	</label><br>
<button name="editar" type="submit" class="btn btn-primary col-md-6 offset-md-3 " class="">Atualizar</button>
</form>
<a href="tabela.php">
	<a href="tabela.php" class="btn btn-danger col-md-6 offset-md-3 ">Cancelar</a>
</div>

</div>

</body>
</html>