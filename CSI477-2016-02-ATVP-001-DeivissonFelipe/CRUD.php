<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Análises Laboratoriais</title>
	<link rel="stylesheet" href=".\css\bootstrap.min.css">
	<link rel="stylesheet" href=".\font-awesome-4.7.0\css\font-awesome.min.css">
	<script src=".\js\jquery-3.1.1.js" type="text/javascript"></script>
	<script src="./js/funcoes.js"></script>
	<script src="./js/jquery.validate.js"></script>
	<style>
       .error{
             color:red
       }
	</style>
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
		<div class="col-sm-2 "> 
		  		
			<ul class="nav nav-pills nav-stacked">
			<li align= "center"><a  href="listaP.php">Lista de Pacientes</a></li>
			<li align= "center"><a  href="listaE.php">Exames Cadastrados</a></li>
			</ul>
		
		</div>		
		<div class="col-sm-8 col-sm-offset-1">
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


			<div class="row">
			<h3 align="center" class="text-warning"> Incluir Procedimentos</h3>
				<div class="col-sm-8">
					<div class="form-group">
						<form action="model_incluir_procedimento.php" id="crud" method="post">
							<div class="form-group">
								<label for="nome">Nome:</label>
								<input type="text" id="nome" name="nome"class="form-control" minlength="0">
							</div>
							
							<br>
							<div class="form-group">
								<label for="preco">Preço:</label>
								<input type="text" id="preco" name="preco" class="form-control" minlength="0">
							</div>
							<br>
							<button class="btn btn-default" type="submit">
								<span class="fa fa-plus fa-1x" aria-hidden="true"> Add Exames</span>	
							</button>
						</form>	
					</div>
				</div>
			</div>	

			<br><br>
	

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
						<a href="alterar_exame_admin1.php?id=<?php echo $linha["id"]?>"><i class="fa fa-pencil fa-1x" aria-hidden="true"></i></a>  |
						<a href="model_excluir_procedimento.php?id=<?php echo $linha["id"]?>"><i class="fa fa-trash fa-1x" aria-hidden="true"></i></a>   
						
					</td>
				</tr>
				<?php } ?>

			</table>

		</div>
	</div>

</body>
</html>