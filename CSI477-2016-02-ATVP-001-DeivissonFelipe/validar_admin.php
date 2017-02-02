<?php 
	require_once("acesso.php");
	$usuario = $_POST['login'];
	$senha = $_POST['senha'];

	$sql = "SELECT id, nome, tipo FROM usuarios WHERE login = '$usuario' AND senha = '$senha'";
	$resultado = $conn->execute($sql);


	if($resultado->num_rows > 0){

	// ---------------------------------------->
		$linha = $resultado->fetch_assoc();
		session_start();
		$_SESSION['adminID'] = $linha['nome'];
		$_SESSION['typeAdmin'] = $linha['tipo'];
		$_SESSION['id_admin'] = $linha['id'];
	// ---------------------------------------->


		header('Location: protect_admin.php');
		die();
	}
	else{
		echo "Usuário e/ou senha inválidos!";
		echo '<a href="login_admin.php">Voltar</a>';
	}
