<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Análises Laboratoriais</title>
	<link rel="stylesheet" href=".\css\bootstrap.min.css">
	<link rel="stylesheet" href=".\font-awesome-4.7.0\css\font-awesome.min.css">
	<script src=".\js\jquery-3.1.1.js" type="text/javascript"></script>
</head>
<body>

	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="index.php">Laboratório Clínico</a>
	    </div>
	    <ul class="nav navbar-nav">
	      <li><a href="areaGeral.php">Área Geral</a></li>
	      <li><a href="protect_paciente.php">Paciente</a></li>
	      <li  class="active"><a href="">Administração</a></li>
	    </ul>
	  </div>
	</nav>

	<div class="container well">		
		<div class="col-sm-6 col-sm-offset-3">
			<?php 
				require_once 'acesso.php';

				session_start();
				if(isset($_SESSION['adminID'])){
					
					$sql = "SELECT * FROM procedimentos ORDER BY `procedimentos`.`nome` ASC";
					$resultado = $conn->execute($sql);

				}
				else{
					echo "não tem admin logado!";
				}
			 ?>

			<table class="table table-striped table-bordered">
				<tr>
					<th class="text-center">ID</th>
					<th class="text-center">Nome</th>
					<th class="text-center">Preço</th>
					<th class="text-center">CRUD</th>
				</tr>
				
				
				<?php 
					while($linha = $resultado->fetch_assoc()){
				?>

				<tr>
					<td align="center"><?php echo $linha["id"]; ?></td>
					<td align="center"><?php echo $linha["nome"]; ?></td>
					<td align="center"><?php echo $linha["preco"]; ?></td>
					<td align="center">
						<a href="alterar_exame_preco.php?id=<?php echo $linha["id"]?>"><i class="fa fa-pencil fa-1x" aria-hidden="true"></i></a>
					</td>
				</tr>
				
				<?php } ?>				

			</table>
		</div>
	</div>

</body>
</html>