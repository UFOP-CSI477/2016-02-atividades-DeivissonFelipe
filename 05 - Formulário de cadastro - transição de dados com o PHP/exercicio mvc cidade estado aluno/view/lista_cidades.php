<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Dados das Cidades</title>
	<link rel="stylesheet" href="../css/bootstrap.css" />	
</head>
<body>
	<div class="container">
		<h2 align="center" class="text-warning"> Relação de Cidades Cadastrados</h2><br><br>
		<table class="table table-striped table-bordered">
			<tr>
				<th class="text-center">Código</th>
				<th class="text-center">Cidade</th>
				<th class="text-center">Estado</th>
			</tr>

			<!-- Exibição dos dados dos alunos//-->
			<?php
				while($linha = $resultado->fetch_assoc()){
			?>
			<tr>
				<td align="center"><?php echo $linha["id"]; ?></td>
				<td align="center"><?php echo $linha["nome"]; ?></td>
				<td align="center"><?php echo $linha["sigla"] ?></td>
			</tr>
			<?php }?>
		</table>
		<a href="../menu.php" class="btn btn-default btn-lg" role="button"  >Voltar</a><br><br>
	</div>
</body>
</html>