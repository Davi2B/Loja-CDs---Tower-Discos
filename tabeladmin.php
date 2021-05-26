<?php include_once 'headeradm.php';?>
<?php include_once 'conexao.php';?>
<?php include_once 'listar.php'; ?>
<br>
	<div class="container">
		<h3>Lista Dos Produtos</h3>
<table class="table table-hover">
  <thead>
    <tr>
      <th>Nome</th>
      <th>Autor</th>
      <th>Preço</th>
      <th>Gênero</th>
      <th>Ações</th>
    </tr>
  </thead>
  <?php while($produto = mysqli_fetch_assoc($sqlp)){ ?>
  <tbody>
    <tr>
      <td> <?php echo $produto['id'];?></td>
      <td> <?php echo $produto['nome']; ?></td>
      <td> <?php echo $produto['autor']; ?></td>
      <td> <?php echo $produto['preco']; ?></td>
      <td> <?php echo $produto['genero']; ?></td>
      <td>
        <a href="editaradmin.php? id =<?php echo $produto['id'];?>" class="btn btn-warning">Editar</a>
        <a href="deleteadmin.php? id=<?php echo $produto['id']; ?>" class="btn btn-danger">Deletar</a>
      </td>
    </tr>
  </tbody>
<?php }; ?>
</table>
<a href="indexadmin.php" class="btn btn-primary">Voltar</a>
</div>
</body>
</html>