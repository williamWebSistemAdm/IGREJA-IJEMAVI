<?php


		include 'includes/conexao.inc.php';//conexao com o banco

		$titulo = $_POST["titulo"];
		$resumo = $_POST["resumo"];
		$texto = $_POST["texto"];
		$autor = $_POST["autor"];
		$foto_dev = $_FILES["foto_dev"];

			// Data e hora
			date_default_timezone_set( 'America/Sao_Paulo' );
			$data = date('d-m-Y--H-i');

		//Tamanho máximo do arquivo em Bytes
		$_UP['tamanho'] = 1024*1024*100; //5mb

		//Array com a extensões permitidas
		$_UP['extensoes'] = array('png', 'jpg', 'jpeg', 'bmp', 'gif');

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
		$extensao					= explode('.', $foto_dev);
		$extensao					= end($extensao);
		if(array_search($extensao, $_UP['extensoes'])=== false){
			echo "<script>alert('A extensão .".$extensao." NÃO é permitida! Extensões permitidas .jpg, .bmp, .gif, .jpeg e .png '); window.location.href='postar_devocional.php';</script>";
		}

		//Faz a verificação do tamanho do arquivo
		else if ($_UP['tamanho'] < $_FILES['foto_dev']['size']){
			echo "<script>alert('Arquivo muito grande.'); window.location.href='postar_devocional.php';</script>";
		}

		//O arquivo passou em todas as verificações, hora de tentar move-lo para a pasta foto
		else{
			// Cria um novo nome para o arquivo
			$novo_nome = $foto_dev . '-' . $data . '.' . $extensao;

			$sql_dev = "SELECT * FROM devocional";
			$result_dev = $conexao->query($sql_dev);

			//Verificar se é possivel mover o arquivo para a pasta escolhida
			if(move_uploaded_file($_FILES['foto_dev']['tmp_name'], 'img/img_devocional/'. $novo_nome)){
				//Upload efetuado com sucesso, exibe a mensagem
				$query_dev = mysqli_query($conexao, "INSERT INTO devocional (titulo_dev, resumo_dev, texto_dev, autor_dev, foto_dev, data_dev, id_obreiro_dev_fk) VALUES('$titulo', '$resumo', '$texto', '$autor', '$foto_dev', current_timestamp, NULL)");
				if($result_dev->num_rows > 0){
     				echo "<script>alert('Devocional cadastrado com suceso!.'); window.location.href='postar_devocional.php';</script>";
	 				};

			}else{
				//Upload não efetuado com sucesso, exibe a mensagem
				echo "<script>alert('Devocional NÃO foi cadastrado com suceso!.'); window.location.href='postar_devocional.php';</script>";
			}
		}




		// Inserir no Banco
		// $sql = "INSERT INTO devocional (titulo, resumo, texto, nome_imagem, data) VALUES ('$titulo', '$resumo', '$texto', '$nome_imagem', current_timestamp)";
		// if($conn->query($sql) === TRUE){
		// 	echo 'Registro adicionado com sucesso';
		// }else{
		// 	echo 'Erro: ' . $sql . '<br />' . $conn->error;
		// }
		//
		// // Fechar conexão
		// $conn->close();

?>
