<?php 
	require_once 'acesso.php';
	$id = $_POST['idExame'];
	$procedimento = $_POST['procedimento'];
	$data = $_POST['data'];
	
	$sql = "UPDATE exames SET procedimento_id = '$procedimento', data = '$data' WHERE id = '$id'";
	$resultado = $conn->execute($sql);

	header('Location: solicitar_exame.php'); 
	die();

 ?>