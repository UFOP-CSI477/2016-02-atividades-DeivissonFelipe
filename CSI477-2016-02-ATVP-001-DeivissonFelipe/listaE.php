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
		<div class="col-sm-2 "> 
		  		
			<ul class="nav nav-pills nav-stacked">
			<li align= "center"><a  href="listaP.php">Lista de Pacientes</a></li>
			<li align= "center"><a  href="CRUD.php">CRUD de Procedimentos</a></li>
			</ul>
		
		</div>		
		<div class="col-sm-8 col-sm-offset-1">
			<?php 
				require_once 'acesso.php';

				session_start();
				if(isset($_SESSION['adminID'])){
					
					$sql = "SELECT exames.id AS id, pacientes.nome AS nome, procedimentos.nome AS exame, exames.data AS data FROM exames 
					INNER JOIN procedimentos ON procedimentos.id = exames.procedimento_id
					INNER JOIN pacientes ON pacientes.id =  exames.paciente_id" ;

					$resultado = $conn->execute($sql);

				}
				else{
					echo "não tem admin logado!";
				}
			 ?>


			<h3 align="center" class="text-warning">Exames Cadastrados</h3>
			<br>

			<table class="table table-striped table-bordered">
				<tr>
					<th class="text-center">ID</th>
					<th class="text-center">Paciente</th>
					<th class="text-center">Procedimento</th>
					<th class="text-center">Data</th>
				</tr>
				
				<?php 
					while($linha = $resultado->fetch_assoc()){
				?>

				<tr>
					<td align="center"><?php echo $linha["id"]; ?></td>
					<td align="center"><?php echo $linha["nome"]; ?></td>
					<td align="center"><?php echo $linha["exame"]; ?></td>
					<td align="center"><?php echo $linha["data"]; ?></td>
				</tr>
				<?php } ?>

			</table>

		</div>
	</div>

</body>
</html>