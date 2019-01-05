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
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<link rel="stylesheet" href="css/style.css" >
		<link rel="stylesheet" href="style.css" >
    <link rel="shortcut icon" type="image/png" href="img/logo_favicon.ico">
	</head>

	<body>


		<?php
			// Iniciando Sessão
			session_start();
			include 'includes/conexao.inc.php';//conexao com o banco

			// nome original do arquivo
			$nome 	= $_FILES['arquivo']['name'];
			// novo nome escolhido pelo usuario
			$nome_escolhido		= $_POST['nome_escolhido'];
			$data_evento  		= $_POST['data_evento'];

			// Data e hora
			date_default_timezone_set( 'America/Sao_Paulo' );
			$data = date('d-m-Y--H-i-s');

			//Tamanho máximo do arquivo em Bytes
			$_UP['tamanho'] = 1024*1024*100; //5mb

			//Array com a extensões permitidas
			$_UP['extensoes'] = array('png', 'jpg', 'jpeg');


			//Array com os tipos de erros de upload do PHP
			$_UP['erros'][0] = 'Não houve erro';
			$_UP['erros'][1] = 'O arquivo no upload é maior que o limite do PHP';
			$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especificado no HTML';
			$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
			$_UP['erros'][4] = 'Não foi feito o upload do arquivo';

			//Verifica se houve algum erro com o upload. Sem sim, exibe a mensagem do erro
			if($_FILES['arquivo']['error'] != 0){
				die("Não foi possivel fazer o upload, erro: <br />". $_UP['erros'][$_FILES['arquivo']['error']]);
				exit; //Para a execução do script
			}

			//Faz a verificação da extensao do arquivo
			// $extensao = strtolower(end(explode('.', $_FILES['arquivo']['name'])));
			$extensao					= explode('.', $nome);
			$extensao					= end($extensao);
			if(array_search($extensao, $_UP['extensoes'])=== false){
				echo "<script>alert('A extensão .".$extensao." NÃO é permitida! Extensões permitidas .jpg, .jpeg e .png '); window.location.href='upload_banner.php';</script>";
			}

			//Faz a verificação do tamanho do arquivo
			else if ($_UP['tamanho'] < $_FILES['arquivo']['size']){
				echo "<script>alert('Arquivo muito grande.'); window.location.href='upload_banner.php';</script>";
			}

			//O arquivo passou em todas as verificações, hora de tentar move-lo para a pasta foto
			else{
				// Cria um novo nome para o arquivo
				$novo_nome = $nome_escolhido . '-' . $data . '.' . $extensao;

				$sql = "SELECT * FROM carrouses";
				$result = $conexao->query($sql);

				//Verificar se é possivel mover o arquivo para a pasta escolhida
				if(move_uploaded_file($_FILES['arquivo']['tmp_name'], 'img/img_banner/'. $novo_nome)){
					//Upload efetuado com sucesso, exibe a mensagem
					$query = mysqli_query($conexao, "INSERT INTO carrouses (imagen_carousel, nome, data_hora_post) VALUES('$novo_nome', '$novo_nome', current_timestamp)");
					if($result->num_rows > 0){
       				echo "<script>alert('Banner cadastrado com suceso!.'); window.location.href='upload_banner.php';</script>";
		 				}else {
							echo "<script>alert('Salvou a imagem, mas nao iseriu no banco de dados. Algum erro de SQL.'); window.location.href='upload_banner.php';</script>";
		 				};

				}else{
					//Upload não efetuado com sucesso, exibe a mensagem
					echo "<script>alert('Banner NÃO foi cadastrado com suceso!.'); window.location.href='upload_banner.php';</script>";
				}
			}

				// FALTA INSERIR DATA HORA DO EVENTO NO BANCO E NO PHPMYADMIM
				// FALTA INSERIR DATA HORA DO EVENTO NO BANCO E NO PHPMYADMIM
				// FALTA INSERIR DATA HORA DO EVENTO NO BANCO E NO PHPMYADMIM
				// FALTA INSERIR DATA HORA DO EVENTO NO BANCO E NO PHPMYADMIM

			//Pegar id carrouses
			$pegar_id_carrouses = "SELECT MAX(id) FROM carrouses LIMIT 1";
			$result_id_carrouses =  mysqli_query($conexao, $pegar_id_carrouses);

			while($row = mysqli_fetch_row($result_id_carrouses))
			{
				$id_carrouses= $row[0];
			}
			//
			// //Pegar id_obreiros
 			$id_obr_sessao = $_SESSION['id_obreiros'];
			// $pegar_id_obreiros = "SELECT id_obreiros FROM obreiros";
			// $result_id_obreiros =  mysqli_query($conexao, $pegar_id_obreiros);
			// while($row = mysqli_fetch_row($result_id_obreiros)){
			// 	$id_obreiros = $row[0];
			// 	// echo "id obreiros: ".$id_obreiros;
			// }


			$id_obreiro_carousel_fk = "UPDATE carrouses SET id_obreiro_carousel_fk='$id_obr_sessao' WHERE id='$id_obr_sessao'";
			$salvar_id_obr_carousel_fk = mysqli_query($conexao, $id_obreiro_carousel_fk);

		?>


    <script src="js/jquery-3.3.1.slim.min.js" ></script>
    <script src="js/bootstrap.min.js" ></script>
  </body>

</html>
