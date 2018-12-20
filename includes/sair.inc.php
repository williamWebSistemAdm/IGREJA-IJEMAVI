<?php

// inicia a sessão
	session_start();

// destruir a sessão
	session_destroy();


// destruir os dados do usuario na sessão
	unset($_SESSION['id_obreiros'],
				$_SESSION['nome_obr'],
				$_SESSION['senha_obr'],
				$_SESSION['usuario_obr'],
				$_SESSION['tipocargo_obr']);

// redireciona o usuario para a tela de login
	header('Location: ../restrito.php');
 ?>
