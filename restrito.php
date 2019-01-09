<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="shortcut icon" type="image/png" href="img/logo_favicon.ico">
		<!-- <link rel="stylesheet" href="css/style.css" > -->
		<!-- <link rel="stylesheet" href="style.css" > -->
		<link rel="stylesheet" href="style_login.css" >

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
	<div class="contact-form"><br>
		<img src="img/logo.png" class="avatar">
		<!-- <h2>IJEMAVI</h2> -->
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
            // header('Location: administrativo.php');
            }
         ?>
        </p>
	</div>
</body>

</html>
