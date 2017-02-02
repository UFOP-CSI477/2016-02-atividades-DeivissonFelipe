<?php 
	require_once 'acesso.php';
	$id = $_GET['id'];

	
	$sql = "SELECT * FROM exames WHERE procedimento_id = '$id'";
	$resultado = $conn->execute($sql);

	//Tratamento do caso em que um procedimento está agendado para um exame.
	//Exclusão proibida
	if($resultado->num_rows >0){
		header('Location: CRUD.php'); 
		die();
	}
	else{

		$sql = "DELETE FROM procedimentos WHERE id = '$id'";
		$resultado = $conn->execute($sql);
	}

	header('Location: CRUD.php'); 
	die();

 ?>
