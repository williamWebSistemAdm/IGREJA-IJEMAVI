<?php
  // Iniciando Sessao
  session_start();
  //Conecxao com Banco
  include '../includes/conexao.inc.php';//conexao com o banco
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
		<title>Adiconar Banner</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="../css/bootstrap.min.css" >
		<link rel="stylesheet" href="../css/style.css" >
		<link rel="stylesheet" href="../style.css" >

	</head>

	<body>

    <div class="container-fluid">
			<!-- Menu -->
			<?php	include '../includes/header_adm.inc.php'; ?>

			<div class="container">

			  <h1>Adiconar Banner</h1><br>

				<div class="col-6">
          <div class="row">
            <!-- <h1> Carregar a foto</h1> -->
            <!-- <form method="POST" action="proc_upload.php" enctype="multipart/form-data">
            	Arquivo: <input  class="form-control-file" name="arquivo" type="file"><br><br>

            	<input  class="btn btn-primary" type="submit" value="Adicionar">
            </form> -->
            <form method="POST" action="proc_upload.php" enctype="multipart/form-data">
              <div class="form-group">
                <label for="exampleFormControlFile1">Escreva o nome do banner:</label>
                <input type="text" placeholder="Ex: Festa dos Jovens" name="nome_escolhido" class="form-control-file" id="exampleFormControlFile1" required>
                <label for="exampleFormControlFile1">Arquivo:</label>
                <input type="file"  name="arquivo" class="form-control-file" id="exampleFormControlFile1" required>
      				<input class="btn btn-primary" type="submit" value="Adicionar">
            </div>
      			</form>
          </div> <!-- row -->
			  </div>
		  </div> <!--  container -->
		</div>

    <script src="../js/jquery-3.3.1.slim.min.js" ></script>
    <script src="../js/bootstrap.min.js" ></script>
  </body>

  </html>
