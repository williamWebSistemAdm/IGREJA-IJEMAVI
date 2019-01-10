<?php

		// Iniciando Sessão
		session_start();
		include 'includes/conexao.inc.php';//conexao com o banco
		// Data e hora
		date_default_timezone_set( 'America/Sao_Paulo' );
		$data = date('d-m-Y--H-i-s');


		$cep_end_igj = $_POST['cep_end_igj'];
		$estado_end_igj = $_POST['estado_end_igj'];
		$cidade_end_igj = $_POST['cidade_end_igj'];
		$bairro_end_igj = $_POST['bairro_end_igj'];
		$rua_end_igj = $_POST['rua_end_igj'];
		$numero_end_igj = $_POST['numero_end_igj'];
		$complemento_end_igj = $_POST['complemento_end_igj'];



		$sql_end_igj = "SELECT * FROM endereco_igreja";
		$result_end_igj = $conexao->query($sql_end_igj );

			if(isset($bairro_end_igj)){
			$sql = "UPDATE endereco_igreja SET	cep_end_igj='$cep_end_igj',	estado_end_igj='$estado_end_igj',
			cidade_end_igj='$cidade_end_igj',	bairro_end_igj='$bairro_end_igj',	rua_end_igj='$rua_end_igj',
			numero_end_igj='$numero_end_igj',	complemento_end_igj='$complemento_end_igj'";
			$salvar = mysqli_query($conexao, $sql);

			if($result_end_igj->num_rows > 0){
					echo "<script>alert('Localização atualizada com suceso!.'); window.location.href='administrativo.php?link=16';</script>";
				}else {
					echo "<script>alert('Erro ao atualizar dados.'); window.location.href='administrativo.php?link=16';</script>";
				}
		}



?>
