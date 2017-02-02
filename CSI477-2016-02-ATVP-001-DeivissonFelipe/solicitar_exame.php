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
	      <li class="active"><a href="">Paciente</a></li>
	      <li><a href="protect_admin.php">Administração</a></li>
	    </ul>
	  </div>
	</nav>

	<div class="container well">		
		<div class="col-sm-2 "> 
		  		
			<ul class="nav nav-pills nav-stacked">
			<li align= "center"><a  href="solicitar_exame.php">Solicitação de Exames</a></li>
			<li align= "center"><a  href="lista_exame_order_proc.php">Lista de Exames</a></li>
			</ul>
		
		</div>
		
		<div class="col-sm-8 col-sm-offset-2" id="conteudo">
			
			<?php 
				require_once 'acesso.php';

				session_start();
				if(isset($_SESSION['username'])){
					
					$sql = "SELECT * FROM procedimentos ORDER BY `procedimentos`.`nome` ASC";
					$resultado = $conn->execute($sql);

					$sql2 = "SELECT nome, data, exames.id, exames.paciente_id FROM procedimentos JOIN exames ON procedimentos.id = exames.procedimento_id WHERE exames.paciente_id = ". $_SESSION['id_paciente'];
					
					$resultado2 = $conn->execute($sql2);

				}
				else{
					echo "não tem paciente logado!";
				}
			 ?>

			<h1>Solicitar Exame</h1>
			<br>

			<div class="row">
				<div class="col-sm-8">
					<div class="form-group">
						<form action="model_incluir_exame.php" id="incluirExame" method="post">
							<label for="procedimento">Procedimento:</label>			
							<select id="procedimento" name="procedimento" class="form-control">
									
								<?php 
									while($linha = $resultado->fetch_assoc()){
								?>

									<option value=" <?php echo $linha["id"]; ?> "><?php echo $linha["nome"]; ?></option>
								
								<?php } ?>

							</select>
							
							<br>
							<div class="form-group">
								<label for="data">Data:</label>
								<input type="text" id="data" name="data" class="form-control" minlength="0">
							</div>
							<br>
							<input class="btn btn-default" type="submit" value="Incluir exames">
						</form>	
					</div>
				</div>
			</div>	

			<br><br>		

			<table class="table table-striped table-bordered">
				<tr>
					<th class="text-center">Procedimento</th>
					<th class="text-center">Data</th>
					<th class="text-center">Alterar</th>
					<th class="text-center">Excluir</th>
				</tr>
				
				<?php 
					while($linha2 = $resultado2->fetch_assoc()){
				?>

				<tr>
					<td align="center"><?php echo $linha2["nome"]; ?></td>
					<td align="center"><?php echo $linha2["data"]; ?></td>
					<td align="center"><a href="alterar_exame.php?id=<?php echo $linha2["id"]?>"><i class="fa fa-pencil fa-1x" aria-hidden="true"></i></a></td>
					<td align="center"><a href="model_excluir_exame.php?id=<?php echo $linha2["id"]?>"><i class="fa fa-trash fa-1x" aria-hidden="true"></i></a></td>
				</tr>

				<?php } ?>
			</table>

		</div>

	</div>

</body>
</html>