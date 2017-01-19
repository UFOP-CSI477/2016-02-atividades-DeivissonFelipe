<?php 
	require_once("../acesso.php");

	$sql = "SELECT a.id, a.nome, c.nome as cidade FROM alunos a, cidades c WHERE a.cidade_id = c.id";
	$resultado = $conn->execute($sql);