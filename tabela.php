<?php 
  include_once 'conexao.php';
  include_once 'listar.php';
  include_once 'header.php';?>
<body>
	<br>
	<div class="container">
		<h3>Atualizar seus Dados</h3>
<table class="table table-hover">
  <thead>
    <tr>
      <th>id</th>
      <th>Nome</th>
      <th>Email</th>
      <th>Senha</th>
      <th>Ações</th>
    </tr>
  </thead>
  <?php while($questoes = mysqli_fetch_assoc($sqlu)){ ?>
  <tbody>
    <tr>
      <th> <?php echo $questoes['id']; ?></th>
      <td> <?php echo $questoes['nome']; ?></td>
      <td> <?php echo $questoes['email']; ?></td>
      <td> <?php echo $questoes['senha']; ?></td>
      <td><a href="editar.php? id =<?php echo $questoes['id'];?>" class="btn btn-warning">Editar</a></td>
    </tr>
  </tbody>
<?php } ?>
</table>
<a href="index.php" class="btn btn-primary">Voltar</a>
</div>
</body>
</html>