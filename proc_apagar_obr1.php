<?php
//Conexão com Banco
	include 'includes/conexao.inc.php';

			//   NÃAAAAAAOOOOO  FFFUUUUNNNNCCIIIIOOOONNOOOOUU

  $id_obr = $_GET['id_obreiros'] ;

	$sql = "DELETE FROM obreiros WHERE id_obreiros = '$id_obr'";
	$result =  $conexao->query($sql);

		$linha= mysqli_affected_rows($conexao);
		if ($linha == 1 ) {
			echo "<script>alert('Usuário apagado com suceso!.'); window.location.href='administrativo.php?link=1';</script>";
		}else {
			echo "<script>alert('Erro ao apagado Usuário.'); window.location.href='administrativo.php?link=1';</script>";
		}

	// $linha = mysqli_fetch_row($salvar);
	// if($result->num_rows > 0){
  // if($linha == 1){
      // echo "<script>alert('Usuário apagado com suceso!.'); window.location.href='administrativo.php?link=1';</script>";
    // }else {
      // echo "<script>alert('Erro ao apagado Usuário.'); window.location.href='administrativo.php?link=1';</script>";
    // }

?>
