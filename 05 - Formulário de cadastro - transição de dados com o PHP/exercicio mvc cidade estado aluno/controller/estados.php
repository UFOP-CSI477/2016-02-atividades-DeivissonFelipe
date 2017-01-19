<?php 
	session_start();
	if(isset($_SESSION['username'])){
		require("../model/model_estado.php");
		require("../view/lista_estados.php");
	}
	else{
		header('Location: ../login.php');
		die();
	}

 ?>	
