<?php

		// Iniciando Sessão
		session_start();
		include 'conexao.inc.php';//conexao com o banco
		$id_devocional = $_SESSION['id_devocional'];


		$titulo_dev = $_POST["titulo_dev"];
		$resumo_dev = $_POST["resumo_dev"];
		$texto_dev = $_POST["texto_dev"];
		$autor_dev = $_POST["autor_dev"];
		// $usuario_logado_dev = $_POST["usuario_logado_dev"];
		// $foto_dev = $_FILES["foto_dev"]['name'];

			// Data e hora
			date_default_timezone_set( 'America/Sao_Paulo' );
			$data = date('d-m-Y--H-i-s');


			$sql_dev = "SELECT * FROM devocional";
			$result_dev = $conexao->query($sql_dev);

			if(isset($titulo_dev)){
			$sql = "UPDATE devocional SET	titulo_dev='$titulo_dev',	resumo_dev='$resumo_dev',	texto_dev='$texto_dev',	autor_dev='$autor_dev' WHERE id_devocional='$id_devocional'";
			$salvar = mysqli_query($conexao, $sql);

			if($result_dev->num_rows > 0){
					echo "<script>alert('Devocional atualizado com sucesso!.'); window.location.href='administrativo.php?link=6';</script>";
				}else {
					echo "<script>alert('Erro ao atualizar dados.'); window.location.href='administrativo.php?link=6';</script>";
				}
		}



?>
