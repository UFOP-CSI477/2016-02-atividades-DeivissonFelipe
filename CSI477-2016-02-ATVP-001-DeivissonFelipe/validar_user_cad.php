<?php 
	require_once("acesso.php");
	$usuario = $_POST['nome'];
	$login = $_POST['login'];
	$senha = $_POST['senha'];

	$sql = "SELECT login FROM pacientes WHERE login = '$login'";
	$resultado = $conn->execute($sql);


	if($resultado->num_rows > 0){
		header('Location: erro_user.php'); 
		die();
	}
	else{
		
		$sql = "INSERT INTO pacientes (nome, login, senha) VALUES ('" . $usuario. "','" . $login. "','". $senha. "')";

		$resultado = $conn->execute($sql);

		header('Location: sucess_user_cad.php'); 
		die();
	}
