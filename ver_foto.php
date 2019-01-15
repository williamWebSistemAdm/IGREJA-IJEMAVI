
<?php

	include 'includes/conexao.inc.php';//conexao com o banco
	include 'includes/seguranca.inc.php';//seguranca

	$id = $_GET['id_galeria'];

	$sql_gal = "SELECT * FROM galeria WHERE id_galeria = '$id'";
	$result_gal = $conexao->query($sql_gal);
		while($row = $result_gal->fetch_assoc())
		{
			$id_foto = $row['id_galeria'];
			echo "<tr>";

	    $nome_original = $row['nome_img_gal'];
	    $nome_escolhido = $row['nome_escolhido'];
	    $postador_img = $row['postador_img'];
			$data_post_img = 	$row['data_post_img'];
		}
?>

	<div class="text-center "><h3>Informações de imagem</h3></div><br>
	<div class="text-right">
		<a href="administrativo.php?link=13"><button type="button" class="btn btn-sm btn-info">Listar</button></a>
		<?php if (($id !=1) and ($id !=2)): ?>
		<a href="permissao_apagar\prm_apag_fotos.php?id_galeria=<?php echo $id_foto; ?>" ><button type="button" class="btn btn-sm btn-danger">Apagar</button></a>
	<?php endif; ?>
	</div>
	<table class="table table-hover table-striped col-12">
	  <tbody>
			<tr><th scope="row" class="text-center table-dark">Dados da imagem</th><td class="table-dark"></td></tr>
	    <tr><th scope="row">Id:</th><td><?php echo $id ; ?></td></tr>
	    <tr><th scope="row">Nome original:</th><td><?php echo $nome_original ; ?></td></tr>
			<tr><th scope="row">Nome escolhido pelo usuário:</th><td><?php echo $nome_escolhido; ?></td></tr>
	    <tr><th scope="row">Postador:</th><td><?php echo $postador_img; ?></td></tr>
	    <tr><th scope="row">Data da postagem:</th><td><?php echo $data_post_img; ?></td></tr>
	    <tr><th scope="row"></th><td></td></tr>
	  </tbody>
	</table>
