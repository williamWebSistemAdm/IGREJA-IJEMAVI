<?php
//Conexão com Banco
	include 'includes/conexao.inc.php';

	$id = filter_input(INPUT_GET, 'id_devocional');
	if(!empty($id)){


		$sql_dev = "SELECT * FROM devocional";
		$result_dev = $conexao->query($sql_dev);

		$result_dev = "DELETE FROM devocional WHERE id_devocional='$id'";
		$resultado_dev = mysqli_query($conexao, $result_dev);

		if(mysqli_affected_rows($conexao) != 0){
			echo "<script>alert('Devocional apagado com suceso!.'); window.location.href='administrativo.php?link=6';</script>";
		}else {
			echo "<script>alert('Erro ao apagar Devocional.'); window.location.href='administrativo.php?link=6';</script>";
		}
		$conexao->close();
		}

?>
