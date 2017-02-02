<?php 
	require_once 'acesso.php';
	 $id = $_POST['idExame'];
	 $nome = $_POST['nome'];
	 $preco = $_POST['preco'];
	
	 $sql = "UPDATE procedimentos SET nome = '$nome', preco = '$preco' WHERE id = '$id'";
	 $resultado = $conn->execute($sql);

	 header('Location: CRUD.php'); 
	 die();

 ?>