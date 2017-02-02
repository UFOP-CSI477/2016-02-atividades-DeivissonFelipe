<?php 
	session_start();
	if(!$_SESSION['username']){
		header('Location: login_paciente.php');
	}
	else{
		header('Location: solicitar_exame.php');
	}

 ?>