<?php 
	session_start();
	if(!$_SESSION['adminID']){
		header('Location: login_admin.php');
	}
	else{
		if($_SESSION['typeAdmin'] == 1){
			header('Location: CRUD.php');
		}
		else if($_SESSION['typeAdmin'] == 2){
			header('Location: listar_exame_admin.php');	
		}
		
	}

 ?>