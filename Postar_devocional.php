<?php
  // Iniciando Sessao
  session_start();
  //Conecxao com Banco
  include 'includes/conexao.inc.php';//conexao com o banco
  // include '../includes/seguranca.inc.php';//seguranca

  // include 'msg_boas_vindas.inc.php';//mensagem de boas vindas
 ?>
<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="IJEMAVI - Igreja de Jesus Manacial de Águas Vivas, ijemavi">
		<meta name="keywords" content="Igreja, Jesus, Manancial, Águas, Vivas, Pastor, Família, Adoradores, IJEMAVI, ijemavi">
		<meta name="author" content="Igreja IJEMAVI">
		<meta http-equiv="refresh" content="300">
		<title>Postar Devocional</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<link rel="stylesheet" href="css/style.css" >
		<link rel="stylesheet" href="style.css" >
		<link rel="stylesheet" href="css/devocional.css" >

	</head>

	<body>

    <div class="container-fluid">
			<!-- Menu -->
			<?php	include 'includes/header_adm.inc.php'; ?>
      <a class="nav-link" href="includes/sair.inc.php">Sair</a>

			<div class="container">

      <h1>Postar Devocional</h1>
			<div id="formulario" >
			<form action="Postar_devocional.inc.php" method="post" enctype="multipart/form-data">
				<label for="fname">Título</label>
				<input type="text" id="fname" name="titulo">

				<label for="subject">Resumo</label>
				<textarea maxlength="300" id="subject" name="resumo" placeholder="300 caracteres" style="height:100px"></textarea>

				<label for="subject">Texto</label>
				<textarea id="subject" name="texto" style="height:200px"></textarea>

				<label for="fname">Autor</label>
        <?php include 'includes/select_obreiros.inc.php';//Selecionando Obreiro?>
				<input type="text" id="fname" name="autor" value="<?php echo "$tipocargo_obr -"." $nome_obr"; ?>" disabled>

				<label>Imagem</label><br /><br />
				<input type="file" name="userfile"><br />

				<input type="submit" name="submit" value="Postar">
			</form>

			</div>
			<div>
			<?php include 'includes/footer.inc.php'; ?>
			</div>
			</div>

	</body>

</html>
