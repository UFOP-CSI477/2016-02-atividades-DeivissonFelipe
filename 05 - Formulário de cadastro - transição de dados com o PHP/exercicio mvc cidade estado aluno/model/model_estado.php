<?php 
	require_once("../acesso.php");

	$sql = "SELECT id, nome, sigla FROM estados";
	$resultado = $conn->execute($sql);