<?php 
	require_once 'acesso.php';

	session_start();

	$sql = "INSERT INTO exames (data, paciente_id, procedimento_id) VALUES ('". $_POST['data'] ."','" . $_SESSION['id_paciente']. "','" .$_POST['procedimento']. "')";
	$resultado = $conn->execute($sql);

	header('Location: solicitar_exame.php'); 
	die();

 ?>