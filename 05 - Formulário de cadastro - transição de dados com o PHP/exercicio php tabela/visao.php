<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Dados dos alunos</title>
	<link rel="stylesheet" href="bootstrap.css" />
</head>
<body>
	<div class="container">
		<h2 align="center" class="text-primary"> Relação de Alunos Cadastrados</h2><br><br>
		<table class="table table-striped table-bordered">
				
			<tr>
				<th class="text-center">Id</th>
				<th class="text-center">Nome</th>
			</tr>
			
			<!-- Exibição dos dados dos alunos//-->
			<?php 
				while($linha = $resultado->fetch_assoc()){
			?>
			<tr>
				<td align="center"><?php echo $linha["id"]; ?></td>
				<td align="center"><?php echo $linha["nome"]; ?></td>
			</tr>
			<?php }?>
		</table>
	</div>
</body>
</html>