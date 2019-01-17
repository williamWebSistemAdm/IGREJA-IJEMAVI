<?php
	// header('content-type: text/html;charset=utf8');
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "ijemavi";

	//Criar a conexao
	$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);

	// $conexao->query('SET NAME "utf8"');
	// $conexao->query('SET character_set_connection=utf8');
	// $conexao->query('SET character_set_client=utf8');
	// $conexao->query('SET character_set_results=utf8');

?>
