<?php
//Conexão com Banco
	include 'includes/conexao.inc.php';

	$id = filter_input(INPUT_GET, 'id');
	if(!empty($id)){

		$sql_banner = "SELECT * FROM carrouses";
		$result_banner = $conexao->query($sql_banner);

		$result_banner = "DELETE FROM carrouses WHERE id='$id'";
		$resultado_banner = mysqli_query($conexao, $result_banner);

		if(mysqli_affected_rows($conexao) != 0){
			echo "<script>alert('Banner apagado com suceso!.'); window.location.href='administrativo.php?link=10';</script>";
		}else {
			echo "<script>alert('Erro ao apagar banner.'); window.location.href='administrativo.php?link=10';</script>";
		}
		$conexao->close();
		}

?>
