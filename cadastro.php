<?php include_once 'headeradm.php'; 
	  include_once 'salvaradmin.php';?>
<div>
	<h2>Cadastro de Cds</h2>
	<form action="salvaradmin.php" method="POST">
		<label>
			<span class="titulo">Nome do CD</span>
			<input type="text" name="nome" placeholder="Nome do CD">
		</label>
		<label>
			<span class="titulo">Nome do Arstista/Banda</span>
			<input type="text" name="autor" placeholder="Nome do Autor">
		</label>
		<label>
			<span class="titulo">Preço</span>
			<input type="text" name="preco" placeholder="Preço do CD">
	</label>
	<label>
		<span class="titulo">Gêneros Musicais</span>
		<select name="genero">
			<option>Escolha um Gênero</option>
			<option>Forró</option>
			<option>Rock</option>
			<option>Pop</option>
			<option>Sertanejo</option>
			<option>Eletrônica</option>
			<option>Jazz</option>
			<option>Country</option>
		</select>
	</label><br>
	<label><input type="submit" name="Enviar" class="btn btn-primary"></label>
	</form>
</div>
<?php include_once 'footer.php';
?>