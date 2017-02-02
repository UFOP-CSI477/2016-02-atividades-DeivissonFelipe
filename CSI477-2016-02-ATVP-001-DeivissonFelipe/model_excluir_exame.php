<?php 
	require_once 'acesso.php';
	$id = $_GET['id'];

	$sql = "DELETE FROM exames WHERE id = '$id'";
	$resultado = $conn->execute($sql);

	header('Location: solicitar_exame.php'); 
	die();

 ?>