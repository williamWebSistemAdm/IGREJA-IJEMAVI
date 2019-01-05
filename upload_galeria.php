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
		<title>Adiconar imagem</title>
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<link rel="stylesheet" href="css/style.css" >
		<link rel="stylesheet" href="style.css" >
    <link rel="shortcut icon" type="image/png" href="img/logo_favicon.ico">
	</head>
	<body>

    <div class="container-fluid">
			<!-- Menu -->
			<?php	include 'includes/header_adm.inc.php'; ?>

			<div class="container">

		  <h1>Adiconar imagem</h1><br>

				<div class="col-6">
          <div class="row">

            <form method="POST" action="proc_upload_galeria.php" enctype="multipart/form-data">
              <div class="form-group">

                <label for="exampleFormControlFile1">Nome da imagem:</label>
                <input type="text" placeholder="Ex: Culto de ensino" name="nome_img_galeria" class="form-control" id="exampleFormControlFile1" required>

                <label for="exampleFormControlFile1">Arquivo:</label>
                <input type="file"  name="img_galeria" class="form-control" id="exampleFormControlFile1" required>

      				<input class="btn btn-primary" type="submit" value="Adicionar">
            </div>
      			</form>
          </div> <!-- row -->
			  </div>
		  </div> <!--  container -->
		</div>

    <script src="js/jquery-3.3.1.slim.min.js" ></script>
    <script src="js/bootstrap.min.js" ></script>
  </body>

  </html>
