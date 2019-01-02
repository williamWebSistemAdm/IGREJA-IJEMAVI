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


		<?php
			include '../includes/conexao.inc.php';//conexao com o banco

			$arquivo = isset($_FILES['arquivo'])?$_FILES['arquivo']:"";
			$nome_escolhido = isset($_POST['nome_escolhido'])?$_POST['nome_escolhido']:"";

			if (isset($_FILES['arquivo']) and isset($_POST['nome_escolhido']) ) {
				// nome original do arquivo
				$nome 						= $arquivo['name'];
				// novo nome escolhido
				$nome_escolhido		= $_POST['nome_escolhido'];

				$tipos_permitidos = ['jpg', 'jpeg', 'png'];
				$tamanho					= $arquivo['size'];
				// pegando a extensão do arquivo
				$extensao					= explode('.', $nome);
				$extensao					= end($extensao);
				// Atribuindo nome para a foto com o nome escolhido do usuário e mais um número aleatório para que não se repita no banco de dados
				$novo_nome				= $nome_escolhido . '-' . rand() . '.' . $extensao;

				// Fazendo as verificações necessárias
				// Verificando extensão
				if (in_array($extensao, $tipos_permitidos)) {

	//	NÃO FUNCIONOU O VERIFICA TAMANHO

					// Verificando tamanho do arquivo até 5mb ( O LIMITE DO PHP É  8388608 Megabytes)
					if ($tamanho > 5000000) {
						echo "O tamanho do arquivo excede 5Mb (Cinco Megabytes).<br>Dimunua o arquivo ou escolha um menor.";
					}else {

	//	NÃO FUNCIONOU O MOVER

						// Mover o arquivo para a pasta
						$mover = move_uploaded_file($_FILES['arquivo']['tmp_name'], 'imagens/'. $novo_nome);
						 // echo "<img src='imagens/$novo_nome' width='200'>";
					}

				}else {
					echo "A extensão <strong>.".$extensao."</strong> não é permitida!<br>Extensões permitidas .jpg, .jpeg e .png .";
				}



			}

		?>


    <script src="../js/jquery-3.3.1.slim.min.js" ></script>
    <script src="../js/bootstrap.min.js" ></script>
  </body>

</html>
