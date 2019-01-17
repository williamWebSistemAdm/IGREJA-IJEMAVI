<?php
//Conexão com Banco
	include 'conexao.inc.php';

	$id = filter_input(INPUT_GET, 'id_galeria');
	if(!empty($id)){


		$sql_gal = "SELECT * FROM galeria";
		$result_gal = $conexao->query($sql_gal);

		$result_gal = "DELETE FROM galeria WHERE id_galeria='$id'";
		$resultado_gal = mysqli_query($conexao, $result_gal);

		if(mysqli_affected_rows($conexao) != 0){
			echo "<script>alert('Foto apagada com sucesso!.'); window.location.href='administrativo.php?link=13';</script>";
		}else {
			echo "<script>alert('Erro ao apagar foto.'); window.location.href='administrativo.php?link=13';</script>";
		}
		$conexao->close();
		}

?>
