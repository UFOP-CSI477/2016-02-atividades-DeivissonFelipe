<?php 
	require_once("acesso.php");
	$usuario = $_POST['login'];
	$senha = $_POST['senha'];

	$sql = "SELECT id, nome FROM pacientes WHERE login = '$usuario' AND senha = '$senha'";
	
	// $sql = "SELECT id, nome FROM pacientes WHERE login = '$usuario' AND senha = md5('$senha')";

	$resultado = $conn->execute($sql);

	if($resultado->num_rows > 0){

	// ---------------------------------------->
		$linha = $resultado->fetch_assoc();
		session_start();
		$_SESSION['username'] = $usuario;
		$_SESSION['system'] = 'sisanalise';
		$_SESSION['id_paciente'] = $linha['id'];
	// ---------------------------------------->


		header('Location: protect_paciente.php');
		die();
	}
	else{
		echo "Usuário e/ou senha inválidos!";
		echo '<a href="login_paciente.php">Voltar</a>';
	}
