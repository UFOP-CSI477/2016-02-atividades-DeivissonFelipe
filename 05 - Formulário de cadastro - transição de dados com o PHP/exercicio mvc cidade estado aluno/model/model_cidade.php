<?php 
	require_once("../acesso.php");

	//$sql = "SELECT id, nome FROM cidades";

	$sql = "SELECT c.id, c.nome, e.sigla FROM cidades c, estados e WHERE c.estado_id = e.id";

	$resultado = $conn->execute($sql);
	