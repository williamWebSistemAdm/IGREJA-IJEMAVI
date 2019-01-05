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
    <link rel="shortcut icon" type="image/png" href="img/logo_favicon.ico">
	</head>

	<body>

    <div class="container-fluid">
			<!-- Menu -->
			<?php	include 'includes/menu_adm.inc.php'; ?>
      <a class="nav-link" href="includes/sair.inc.php">Sair</a>

			<div class="container">

      <h1>Postar Devocional</h1>
			<div id="formulario" >
			<form action="proc_postar_devoc.inc.php" method="post" enctype="multipart/form-data">

				<label >Título</label>
				<input type="text" id="fname" name="titulo_dev" required>

				<label for="subject">Resumo</label>
				<textarea maxlength="300" id="subject" name="resumo_dev" placeholder="300 caracteres" style="height:100px" required></textarea>

				<label >Texto</label>
				<textarea id="subject" name="texto_dev" style="height:200px" required></textarea>

        <?php include 'includes/select_obreiros.inc.php';//Selecionando Obreiro?>

        <!-- Autor escolhido pelo usuario -->
        <label >Autor</label><br>
        <input type="text" id="fname" name="autor_dev" required>
        <?php echo "$tipocargo_obr -"." $nome_obr"; ?>
        <!-- Autor Usuário logado que vai para o banco -->
				<input type="hidden" name="usuario_logado_dev" value="<?php echo "$tipocargo_obr -"." $nome_obr"; ?>" >

				<!-- <label>Imagem</label><br /><br />
				<input type="file" name="foto_dev"><br /> -->
        <br> <label >Imagem:</label>
        <input type="file"  name="foto_dev" class="form-control" required>

				<input type="submit" name="submit" value="Postar">
			</form>

			</div>
			<div>
			<?php include 'includes/footer.inc.php'; ?>
			</div>
			</div>
      <script src="js/jquery-3.3.1.slim.min.js" ></script>
      <script src="js/bootstrap.min.js" ></script>
	</body>

</html>
