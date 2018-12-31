<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<style>
		body {
			margin: 0;
			padding: 0;
		}

		body:before {
			content: '';
			position: fixed;
			width: 100vw;
			height: 100vh;
			background-image: url("img/4.jpeg");
			background-position: center center;
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: cover;
			-webkit-filter: blur(10px);
			-moz-filter: blur(10px);
			-o-filter: blur(10px);
			-ms-filter: blur(10px);
			filter: blur(10px);
		}

		.contact-form {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			width: 400px;
			height: 500px;
			padding: 80px 40px;
			box-sizing: border-box;
			background: rgba(0, 0, 0, .5);
			border-radius: 10px;
		}

		.avatar {
			position: absolute;
			width: 80px;
			height: 80px;
			border-radius: 50%;
			overflow: hidden;
			top: calc(-80px/2);
			left: calc(50% - 40px);
		}

		.contact-form h2 {
			margin: 0;
			padding: 0 0 20px;
			color: #fff;
			text-align: center;
			text-transform: uppercase;
		}

		.contact-form p {
			margin: 0;
			padding: 0;
			font-weight: bold;
			color: #fff;
		}

		.contact-form input {
			width: 100%;
			margin-bottom: 20px;
		}

		.contact-form input[type="text"],
		.contact-form input[type="password"] {
			border: none;
			border-bottom: 1px solid #fff;
			background: transparent;
			outline: none;
			height: 40px;
			color: #fff;
			font-size: 16px;
		}

		.contact-form input[type="submit"] {
			height: 30px;
			color: #fff;
			font-size: 15px;
			background: red;
			cursor: pointer;
			border-radius: 25px;
			border: none;
			outline: none;
			margin-top: 15%;
		}

		.contact-form a {
			color: #fff;
			font-size: 14px;
			font-weight: bold;
			text-decoration: none;
		}

		input[type="checkbox"] {
			width: 20%;
		}
	</style>
</head>

<body>
    <?php
    // Apaga dados do usuario se voltar ao login
        unset($_SESSION['id_obreiros'],
			        $_SESSION['nome_obr'],
			        $_SESSION['senha_obr'],
			        $_SESSION['email_obr'],
			        $_SESSION['tipocargo_obr']);
    ?>
	<div class="contact-form">
		<img src="img/2.jpg" class="avatar">
		<h2>IJEMAVI</h2>
		<form method="post" action="includes/validar_login.inc.php">
			<p>Usuário</p>
			<input type="text" name="email_obr" placeholder="Seu E-Mail" required autofocus>
			<p>Senha</p>
			<input type="password" name="senha_obr" placeholder="Sua Senha" required>
			<input type="submit" name="entrar" value="Login">
		</form>
        <p class="text-center text-danger">
        <?php

         // Mensagem de erro
        if (isset($_SESSION['erro_login'])){
            echo $_SESSION['erro_login'];
            unset($_SESSION['erro_login']);
        }
				else{
            // header('Location: includes/administrativo.php');
            }
         ?>
        </p>
	</div>
</body>

</html>
