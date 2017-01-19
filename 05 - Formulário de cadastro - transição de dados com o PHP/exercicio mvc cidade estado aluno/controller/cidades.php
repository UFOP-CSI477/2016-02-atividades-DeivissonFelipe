<?php 
	session_start();
	if(isset($_SESSION['username'])){
		require("../model/model_cidade.php");
		require("../view/lista_cidades.php");
	}
	else{
		header('Location: ../login.php');
		die();
	}

 ?>	
