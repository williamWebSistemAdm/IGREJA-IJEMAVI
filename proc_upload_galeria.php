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
	</head>
	<body>


		<?php
			// Iniciando Sessão
			session_start();
			include 'includes/conexao.inc.php';//conexao com o banco

			// novo nome escolhido pelo usuario
			$nome_img_galeria	= $_POST['nome_img_galeria'];
			// nome original do arquivo
			$img_galeria	= $_FILES['img_galeria']['name'];
			$postador_img	=	'eu';

			// Data e hora
			date_default_timezone_set( 'America/Sao_Paulo' );
			$data = date('d-m-Y--H-i-s');

			//Tamanho máximo do arquivo em Bytes
			$_UP['tamanho'] = 1024*1024*100; //5mb

			//Array com a extensões permitidas
			$_UP['extensoes'] = array('png', 'jpg', 'jpeg', 'gif', 'bmp');


			//Array com os tipos de erros de upload do PHP
			$_UP['erros'][0] = 'Não houve erro';
			$_UP['erros'][1] = 'O arquivo no upload é maior que o limite do PHP';
			$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especificado no HTML';
			$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
			$_UP['erros'][4] = 'Não foi feito o upload do arquivo';

			//Verifica se houve algum erro com o upload. Sem sim, exibe a mensagem do erro
			if($_FILES['img_galeria']['error'] != 0){
				die("Não foi possivel fazer o upload, erro: <br />". $_UP['erros'][$_FILES['img_galeria']['error']]);
				exit; //Para a execução do script
			}

			//Faz a verificação da extensao do arquivo
			$extensao					= explode('.', $img_galeria);
			$extensao					= end($extensao);
			if(array_search($extensao, $_UP['extensoes'])=== false){
				echo "<script>alert('A extensão .".$extensao." NÃO é permitida! Extensões permitidas .jpg, .jpeg e .png '); window.location.href='upload_galeria.php';</script>";
			}

			//Faz a verificação do tamanho do arquivo
			else if ($_UP['tamanho'] < $_FILES['img_galeria']['size']){
				echo "<script>alert('Arquivo muito grande.'); window.location.href='upload_galeria.php';</script>";
			}

			//O arquivo passou em todas as verificações, hora de tentar move-lo para a pasta foto
			else{
				// Cria um novo nome para o arquivo
				$novo_nome = $img_galeria . '-' . $data . '.' . $extensao;

				$sql_galeria = "SELECT * FROM galeria";
				$result_galeria = $conexao->query($sql_galeria);

				//Verificar se é possivel mover o arquivo para a pasta escolhida
				if(move_uploaded_file($_FILES['img_galeria']['tmp_name'], 'img/img_galeria/'. $novo_nome)){
					//Upload efetuado com sucesso, exibe a mensagem
					// $query_galeria = mysqli_query($conexao, "INSERT INTO galeria (img_galeria) VALUES('$img_galeria')");
					$query_galeria = mysqli_query($conexao, "INSERT INTO galeria (img_galeria, nome_img_galeria, postador_img, data_post_img) VALUES('$img_galeria', '$nome_img_galeria', '$postador_img', now())");
					if($result_galeria->num_rows > 0){
       				echo "<script>alert('Imagem adicionada com sucesso!.'); window.location.href='upload_galeria.php';</script>";
							exit; //Para a execução do script
		 				}else {
							echo "<script>alert('Salvou a imagem, mas nao iseriu no banco de dados. Algum erro de SQL.'); window.location.href='upload_galeria.php';</script>";
		 				};

				}else{
					//Upload não efetuado com sucesso, exibe a mensagem
					echo "<script>alert('Banner NÃO foi cadastrado com suceso!.'); window.location.href='upload_galeria.php';</script>";
				}
			};

			//
			// //Pegar id carrouses
			// $pegar_id_carrouses = "SELECT MAX(id) FROM carrouses LIMIT 1";
			// $result_id_carrouses =  mysqli_query($conexao, $pegar_id_carrouses);
			//
			// while($row = mysqli_fetch_row($result_id_carrouses))
			// {
			// 	$id_carrouses= $row[0];
			// }
			// //
			// // //Pegar id_obreiros
 			// $id_obr_sessao = $_SESSION['id_obreiros'];
			// // $pegar_id_obreiros = "SELECT id_obreiros FROM obreiros";
			// // $result_id_obreiros =  mysqli_query($conexao, $pegar_id_obreiros);
			// // while($row = mysqli_fetch_row($result_id_obreiros)){
			// // 	$id_obreiros = $row[0];
			// // 	// echo "id obreiros: ".$id_obreiros;
			// // }
			//
			//
			// $id_obreiro_carousel_fk = "UPDATE carrouses SET id_obreiro_carousel_fk='$id_obr_sessao' WHERE id='$id_obr_sessao'";
			// $salvar_id_obr_carousel_fk = mysqli_query($conexao, $id_obreiro_carousel_fk);

		?>


    <script src="js/jquery-3.3.1.slim.min.js" ></script>
    <script src="js/bootstrap.min.js" ></script>
  </body>

</html>
