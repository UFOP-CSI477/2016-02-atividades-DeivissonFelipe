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
	      <li class="active"><a href="">Paciente</a></li>
	      <li><a href="protect_admin.php">Administração</a></li>
	    </ul>
	  </div>
	</nav>

	<div class="container well">		
		<div class="col-sm-2 "> 
		  		
			<ul class="nav nav-pills nav-stacked">
			<li align= "center"><a  href="solicitar_exame.php">Solicitação de Exames</a></li>
			<li align= "center"><a  href="">Lista de Exames</a></li>
			</ul>
		
		</div>
		
		<div class="col-sm-8 col-sm-offset-2" id="conteudo">
			
			<?php 
				require_once 'acesso.php';

				$sql = "SELECT nome, data, preco FROM procedimentos JOIN exames ON procedimentos.id = exames.procedimento_id ORDER BY nome ASC";
				$resultado = $conn->execute($sql);
				
				$soma = 0;
			?>

			<h1>Lista de Exames Solicitados</h1>
			<br><br>
			<table class="table table-striped table-bordered">
				<tr>
					<th class="text-center"><a href="">Procedimento <i class="fa fa-sort fa-1x" aria-hidden="true"></i></a></th>
					<th class="text-center"><a href="lista_exame_order_data.php">Data <i class="fa fa-sort fa-1x" aria-hidden="true"></i></a></th>
					<th class="text-center">Valor</th>
				</tr>
			
				<?php 
					while($linha = $resultado->fetch_assoc()){
				?>

				<tr>
					<td align="center"><?php echo $linha["nome"]; ?></td>
					<td align="center"><?php echo $linha["data"]; ?></td>
					<td align="center"><?php echo $linha["preco"]; ?></td>
					<?php 
						$soma += $linha["preco"];
					 ?>
				</tr>

				<?php } ?>

			</table>

			<p>Quantidade de exames: <?php echo "$resultado->num_rows";?></p>
			<p>Preço: <?php echo "$soma" ?> </p>



		</div>

	</div>

</body>
</html>