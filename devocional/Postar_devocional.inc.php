<?php

	if (isset($_POST['submit'])) {
				include 'connection.php';

				$titulo = $_POST ["titulo"];
				$resumo = $_POST ["resumo"];
				$texto = $_POST ["texto"];
				// $autor = $_POST ["autor"];
				$foto = $_FILES ["userfile"];

				if (!empty($foto["name"])) {
					echo 'Devocional adicionado';
					preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);
					$nome_imagem = md5(uniqid(time())) . "." . $ext[1];
					$caminho_imagem = "fotos/" . $nome_imagem;
					move_uploaded_file($foto["tmp_name"], $caminho_imagem);
				}else{
					echo 'Devocional adicionado';
					$nome_imagem = '';
				}

				// Inserir no Banco
				$sql = "INSERT INTO devocional (titulo, resumo, texto, nome_imagem, data) VALUES ('$titulo', '$resumo', '$texto', '$nome_imagem', current_timestamp)";
				if($conn->query($sql) === TRUE){
					echo 'Registro adicionado com sucesso';
				}else{
					echo 'Erro: ' . $sql . '<br />' . $conn->error;
				}

				// Fechar conexão
				$conn->close();
	}

?>
