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
			<li align= "center"><a  href="lista_exame.php">Lista de Exames</a></li>
			</ul>
		
		</div>
		
		<div class="col-sm-8 col-sm-offset-2" id="conteudo">
			
			<?php 
				require_once 'acesso.php';

				session_start();
				if(isset($_SESSION['username'])){

					$sql = "SELECT * FROM procedimentos ORDER BY `procedimentos`.`nome` ASC";
					$resultado = $conn->execute($sql);

					$id = $_GET['id'];
					$sql2 = "SELECT * FROM exames WHERE id = '$id' ";	
					$resultado2 = $conn->execute($sql2);
					$linha2 = $resultado2->fetch_assoc();
				}
				else{
					echo "não tem paciente logado!";
				}
			 ?>

			<h1>Alterar Exame</h1>
			<br>

			<div class="row">
				<div class="col-sm-8">
					<div class="form-group">
						<form action="model_alterar_exame.php" method="post">
							<label for="procedimento">Procedimento:</label>			
							<select id="procedimento" name="procedimento" class="form-control">

								<?php 
									while($linha = $resultado->fetch_assoc()){

										if($linha2["procedimento_id"] == $linha["id"]){
								?>
											<option value=" <?php echo $linha["id"]; ?> " selected><?php echo $linha["nome"]; ?></option>
								
								<?php 
										}
										else{
								 ?>
											<option value=" <?php echo $linha["id"]; ?> "><?php echo $linha["nome"]; ?></option>

								<?php
										}
								 } ?>

							</select>
							
							<br>
							<div class="form-group">
								<label for="data">Data:</label>
								<input type="text" id="data" name="data" class="form-control" value="<?php echo $linha2['data'] ?>">
							</div>
							
							<input type="hidden" name="idExame" value="<?php echo $id ?>">

							<br>
							<input class="btn btn-default" type="submit" value="Salvar alteração">
						</form>	
					</div>
				</div>
			</div>	


		</div>

	</div>

</body>
</html>