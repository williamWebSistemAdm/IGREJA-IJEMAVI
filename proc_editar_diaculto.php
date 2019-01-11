<?php

		// Iniciando Sessão
		session_start();
		include 'includes/conexao.inc.php';//conexao com o banco
		// Data e hora
		date_default_timezone_set( 'America/Sao_Paulo' );
		$data = date('d-m-Y--H-i-s');

		// Domingo
		$dia_culto_dom = $_POST['dia_culto_dom'];
		$local_dom = $_POST['local_dom'];
		$tema_dom = $_POST['tema_dom'];
		$hora_dom = $_POST['hora_dom'];
		// Segunda
		// $dia_culto_seg = $_POST['dia_culto_seg'];
		// $local_seg = $_POST['local_seg'];
		// $tema_seg = $_POST['tema_seg'];
		// $hora_seg = $_POST['hora_seg'];
		// Terça
		// $dia_culto_ter = $_POST['dia_culto_ter'];
		// $local_ter = $_POST['local_ter'];
		// $tema_ter = $_POST['tema_ter'];
		// $hora_ter = $_POST['hora_ter'];
		// Quarta
		// $dia_culto_qua = $_POST['dia_culto_qua'];
		// $local_qua = $_POST['local_qua'];
		// $tema_qua = $_POST['tema_qua'];
		// $hora_qua = $_POST['hora_qua'];
		// Quinta
		// $dia_culto_qui = $_POST['dia_culto_qui'];
		// $local_qui = $_POST['local_qui'];
		// $tema_qui = $_POST['tema_qui'];
		// $hora_qui = $_POST['hora_qui'];
		// Sexta
		// $dia_culto_sex = $_POST['dia_culto_sex'];
		// $local_sex = $_POST['local_sex'];
		// $tema_sex = $_POST['tema_sex'];
		// $hora_sex = $_POST['hora_sex'];
		// Sabado
		// $dia_culto_sab = $_POST['dia_culto_sab'];
		// $local_sab = $_POST['local_sab'];
		// $tema_sab = $_POST['tema_sab'];
		// $hora_sab = $_POST['hora_sab'];




		$sql_dia_culto = "SELECT * FROM dia_culto";
		$result_dia_culto = $conexao->query($sql_dia_culto);

			if(isset($local_dom)){
			$sql_dom = "UPDATE dia_culto SET	dia_culto='$dia_culto_dom',	local_culto='$local_dom', tema_culto='$tema_dom',	hora_culto='$hora_dom' WHERE id_dia_culto=1";
			$salvar_dom = mysqli_query($conexao, $sql_dom);
			//
			// $sql_seg = "UPDATE dia_culto SET	dia_culto_seg='$dia_culto_seg',	local_seg='$local_seg', tema_seg='$tema_seg',	hora_seg='$hora_seg' WHERE id_dia_culto=2";
			// $salvar_seg = mysqli_query($conexao, $sql_seg);
			//
			// $sql_ter = "UPDATE dia_culto SET	dia_culto_ter='$dia_culto_ter',	local_ter='$local_ter', tema_ter='$tema_ter',	hora_ter='$hora_ter' WHERE id_dia_culto=3";
			// $salvar_ter = mysqli_query($conexao, $sql_ter);
			//
			// $sql_qua = "UPDATE dia_culto SET	dia_culto_qua='$dia_culto_qua',	local_qua='$local_qua', tema_qua='$tema_qua',	hora_qua='$hora_qua' WHERE id_dia_culto=4";
			// $salvar_qua= mysqli_query($conexao, $sql_qua);
			//
			// $sql_qui = "UPDATE dia_culto SET	dia_culto_qui='$dia_culto_qui',	local_qui='$local_qui', tema_qui='$tema_qui',	hora_qui='$hora_qui' WHERE id_dia_culto=5";
			// $salvar_qui = mysqli_query($conexao, $sql_qui);
			//
			// $sql_sex = "UPDATE dia_culto SET	dia_culto_sex='$dia_culto_sex',	local_sex='$local_sex', tema_sex='$tema_sex',	hora_sex='$hora_sex' WHERE id_dia_culto=6";
			// $salvar_sex = mysqli_query($conexao, $sql_sex);
			//
			// $sql_sab = "UPDATE dia_culto SET	dia_culto_sab='$dia_culto_sab',	local_sab='$local_sab', tema_sab='$tema_sab',	hora_sab='$hora_sab' WHERE id_dia_culto=7";
			// $salvar_sab = mysqli_query($conexao, $sql_sab);

			if($result_dia_culto->num_rows > 0){
					echo "<script>alert('Dia de culto atualizado com sucesso!.'); window.location.href='administrativo.php?link=18';</script>";
				}else {
					echo "<script>alert('Erro ao atualizar dados.'); window.location.href='administrativo.php?link=18';</script>";
				}
		}



?>
