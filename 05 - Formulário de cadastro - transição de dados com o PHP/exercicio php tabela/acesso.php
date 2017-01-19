<?php
	$conexao = new mysqli("localhost", "sistemaweb", "123456", "academico");
	$conexao->set_charset('utf8');

	if($conexao->connect_errno){
		echo "Falha na conexão!";
	}
	else{
		// echo "Conexão realizada com sucesso!";
		// echo $conexao->host_info;
	}

	$sql = "SELECT id, nome FROM alunos";
	$resultado = $conexao->query($sql);