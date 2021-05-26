<?php include_once 'headeradm.php';?>
<?php include_once 'conexao.php';?>
<?php include_once 'listar.php'; ?>
<br>
	<div class="container">
		<h3>Lista Dos usuarioss</h3>
<table class="table table-hover">
  <thead>
    <tr>
      <th>id</th>
      <th>Nome</th>
      <th>Autor</th>
      <th>Preço</th>
      <th>Ações</th>
    </tr>
  </thead>
  <?php while($usuarios = mysqli_fetch_assoc($sqlu)){ ?>
  <tbody>
    <tr>
      <th> <?php echo $usuarios['id']; ?></th>
      <td> <?php echo $usuarios['nome']; ?></td>
      <td> <?php echo $usuarios['email']; ?></td>
      <td> <?php echo $usuarios['senha']; ?></td>
      <td>
        <a href="deletaru.php? id=<?php echo $usuarios['id']; ?>" class="btn btn-danger">Deletar</a>
      </td>
    </tr>
  </tbody>
<?php }; ?>
</table>
<a href="indexadmin.php" class="btn btn-primary">Voltar</a>
</div>
</body>
</html>