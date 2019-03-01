<?php
	// Iniciando Sessão
	session_start();
	include 'conexao.inc.php';//conexao com o banco

  	$id = $_POST['id_img_prfl'];

	// Tazendo nome usuário sessao
	$postador_img = $_SESSION['nome_obr'];

	// nome original do arquivo
	$nome_img_gal	= $_FILES['nome_img_prfl']['name'];
	// $postador_img	=	'eu';

	//Tamanho máximo do arquivo em Bytes
	$_UP['tamanho'] = 1024*1024*100; //5mb

	//Array com a extensões permitidas
	$_UP['extensoes'] = array('png', 'jpg', 'jpeg', 'gif', 'bmp');


	//Array com os tipos de erros de upload do PHP
	$_UP['erros'][0] = 'Não houve erro';
	$_UP['erros'][1] = 'O arquivo no upload é maior que o limite do PHP';
	$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especificado no HTML';
	$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
	$_UP['erros'][4] = 'Não foi feito o upload do arquivo';

	//Verifica se houve algum erro com o upload. Sem sim, exibe a mensagem do erro
	if($_FILES['nome_img_prfl']['error'] != 0){
		die("Não foi possivel fazer o upload, erro: <br />". $_UP['erros'][$_FILES['nome_img_prfl']['error']]);
		exit; //Para a execução do script
	}

	//Faz a verificação da extensao do arquivo
	$extensao					= explode('.', $nome_img_gal);
	$extensao					= end($extensao);
	if(array_search($extensao, $_UP['extensoes'])=== false){
		echo "<script>alert('A extensão .".$extensao." NÃO é permitida! Extensões permitidas .jpg, .jpeg e .png '); window.location.href='administrativo.php?link=13';</script>";
	}

	//Faz a verificação do tamanho do arquivo
	else if ($_UP['tamanho'] < $_FILES['nome_img_prfl']['size']){
		echo "<script>alert('Arquivo muito grande.'); window.location.href='administrativo.php?link=13';</script>";
	}

	//O arquivo passou em todas as verificações, hora de tentar move-lo para a pasta foto
	else{

	// Pegar o maior id do galeria
	$pegar_id_img_prfl = "SELECT * FROM img_perfil_obr";
	$pegar_id_img_perfil =  mysqli_query($conexao, $pegar_id_img_prfl);
	 while($row = mysqli_fetch_row($pegar_id_img_perfil))
	 {
		 // $id_img_prfl	= $row['id_img'];
	 }
	// Cria um novo nome para o arquivo
	$novo_nome = 'foto' . $id . '.jpg' ;


	// Cria um novo nome para o arquivo
	$sql_img_prfl = "SELECT * FROM img_perfil_obr";
	$result_img_prfl = $conexao->query($sql_img_prfl);

	//Verificar se é possivel mover o arquivo para a pasta escolhida
	if(move_uploaded_file($_FILES['nome_img_prfl']['tmp_name'], 'img/img_perfil_obr/'. $novo_nome)){
		// Upload efetuado com sucesso, exibe a mensagem
		$query_img_prfl = mysqli_query($conexao, "UPDATE img_perfil_obr SET nome_img='$novo_nome', id_img_fk='$id' WHERE id_img='$id'");
		if($result_img_prfl->num_rows > 0){
			echo "<script>alert('Imagem Alterada com sucesso!.'); window.location.href='administrativo.php?link=1';
			</script>";
				exit;
				}else {
				echo "<script>alert('Salvou a imagem, mas nao Alterou no banco de dados. Algum erro de SQL.'); window.location.href='administrativo.php?link=1';</script>";
				};

	}else{
		// Upload não efetuado com sucesso, exibe a mensagem
		echo "<script>alert('Imagem NÃO foi Alterada com suceso!.'); window.location.href='administrativo.php?link=1';</script>";
	}
};

?>


