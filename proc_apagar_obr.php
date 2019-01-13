<?php
//Conexão com Banco
	include 'includes/conexao.inc.php';

  // $id_obr = $_GET['id_obreiros'] ;


	  $sql_end = "SELECT * FROM enderecos";
	  $result_end = $conexao->query($sql_end);

	  $sql_tel = "SELECT * FROM telefones";
	  $result_tel = $conexao->query($sql_tel);

	  $sql_tipocargo_obr = "SELECT * FROM tipocargo_obr";
	  $result_tipocargo_obr = $conexao->query($sql_tipocargo_obr);

		$sql_obr = "SELECT * FROM obreiros";
		$result_obr = $conexao->query($sql_obr);


	$id = filter_input(INPUT_GET, 'id_obreiros');
	if(!empty($id)){

		$result_end = "DELETE FROM enderecos WHERE id_end='$id'";
		$resultado_end = mysqli_query($conexao, $result_end);

		$result_tel = "DELETE FROM telefones WHERE id_telefones='$id'";
		$resultado_tel = mysqli_query($conexao, $result_tel);

		$result_tipocargo = "DELETE FROM tipocargo_obr WHERE id_tipocargo='$id'";
		$resultado_tipocargo = mysqli_query($conexao, $result_tipocargo);

		$result_usuario = "DELETE FROM obreiros WHERE id_obreiros='$id'";
		$resultado_usuario = mysqli_query($conexao, $result_usuario);



	if(mysqli_affected_rows($conexao) != 0){
		echo "<script>alert('Usuário apagado com suceso!.'); window.location.href='administrativo.php?link=1';</script>";
	}else {
		echo "<script>alert('Erro ao apagar Usuário.'); window.location.href='administrativo.php?link=1';</script>";
	}
	$conexao->close();
	}

?>
