<?php 
	require_once 'acesso.php';

	session_start();

	$sql = "INSERT INTO procedimentos (nome, preco, usuario_id) VALUES ('". $_POST['nome'] ."','" . $_POST['preco']. "','" .$_SESSION['id_admin']. "')";
	$resultado = $conn->execute($sql);

	header('Location: CRUD.php'); 
	die();

 ?>