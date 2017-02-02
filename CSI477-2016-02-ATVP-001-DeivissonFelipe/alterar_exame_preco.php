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
		<div class="col-sm-6 col-sm-offset-3">
			<?php 
				require_once 'acesso.php';

				session_start();
				if(isset($_SESSION['adminID'])){

					$id = $_GET['id'];
					$sql = "SELECT * FROM procedimentos WHERE id = '$id' ";
					$resultado = $conn->execute($sql);
					$linha = $resultado->fetch_assoc();

				}
				else{
					echo "não tem admin logado!";
				}
			 ?>

			<div class="row">
				<div class="col-sm-8">
					<div class="form-group">
						<form action="model_alterar_preco.php" id="alterarPreco" method="post">
							<div class="form-group">
								<label for="nome">Nome:</label>
								<input type="text" id="nome" name="nome" class="form-control" readonly value="<?php echo $linha['nome'] ?>">
							</div>
							
							<br>
							<div class="form-group">
								<label for="preco">Preço:</label>
								<input type="text" id="preco" name="preco" class="form-control" value="<?php echo $linha['preco'] ?>" minlength="0">
							</div>
							<input type="hidden" name="idExame" value="<?php echo $id ?>">
							<br>
							<button class="btn btn-default" type="submit">
								<span class="fa fa-pencil fa-1x" aria-hidden="true"> Alterar o preço</span>	
							</button>
						</form>	
					</div>
				</div>
			</div>	

		</div>
	</div>

</body>
</html>