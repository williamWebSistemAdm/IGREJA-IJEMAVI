<?php
  // Iniciando Sessao
  session_start();
  //Conecxao com Banco
  include 'includes/conexao.inc.php';//conexao com o banco
  include 'includes/seguranca.inc.php';//seguranca
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
    <link rel="shortcut icon" type="image/png" href="img/logo_favicon.ico">
		<!-- <meta http-equiv="refresh" content="300"> -->
		<title>Administrativo</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<link rel="stylesheet" href="css/style.css" >
    <link rel="shortcut icon" type="image/png" href="img/logo_favicon.ico">
	</head>

	<body>
				<!-- Menu -->
				<?php	include 'includes/menu_adm.inc.php'; ?>
				<div class="container">

	      <?php
          @$link = $_GET['link'];
          // Obreiro
          $pag['1'] = 'listar_obreiros.php';
          $pag['2'] = 'ver_perfil_obr.php';
          $pag['3'] = 'cad_obreiro.php';
          $pag['4'] = 'editar_obreiro.php';
          $pag['5'] = 'excluir_obreiro.php';
          // Devocional
          $pag['6'] = 'Listar_devocional.php';
          $pag['7'] = 'postar_devocional.php';
          $pag['8'] = 'editar_devocional.php';
          $pag['9'] = 'excluir_devocional.php';
          // Foto Galeria
          $pag['10'] = 'listar_banner.php';
          $pag['11'] = 'upload_banner.php';
          $pag['12'] = 'excluir_banner.php';
          // Foto galeria
          $pag['13'] = 'listar_foto_galeria.php';
          $pag['14'] = 'upload_galeria.php';
          $pag['15'] = 'excluir_foto_galeria.php';
          // localização
          $pag['16'] = 'listar_end_igreja.php';
          $pag['17'] = 'editar_end_igreja.php';
          // Dia culto
          $pag['18'] = 'listar_dia_culto.php';
          $pag['19'] = 'editar_dia_culto.php';


          // validar se apagina existe e redirecionar para ela
          if (!empty($link)) {
            if (file_exists($pag[$link])) {
              include $pag[$link];
            }
          }
          else {
            echo "Bem Vindo!";
          }
          // else {
          //   // Verifica se é administrador ou usuario comum
          //   if (($_SESSION['tipocargo_obr'] == "adm_padrao") || ($_SESSION['tipocargo_obr'] == "pr_presidente")) {
          //     header('Location: administrativo.php');
          //   }
            // else {
              // header('Location: usuario_comum.php');
            // }

        ?>


		  <br>
		  <!-- <a href="sair.inc.php">Sair</a> -->

		</div>

    <script src="js/jquery-3.3.1.slim.min.js" ></script>
    <script src="js/bootstrap.min.js" ></script>
  </body>

  </html>
