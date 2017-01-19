<?php 
	session_start();
	if(isset($_SESSION['username'])){
		require("../model/model_aluno.php");
		require("../view/lista_alunos.php");
	}
	else{
		header('Location: ../login.php');
		die();
	}

 ?>	
