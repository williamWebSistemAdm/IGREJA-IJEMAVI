
<?php

	include 'conexao.inc.php';//conexao com o banco
	include 'seguranca.inc.php';//seguranca

	$id_dev = $_GET['id_devocional'];

	$sql_dev = "SELECT * FROM devocional";
	$result_dev = $conexao->query($sql_dev);

	if($result_dev->num_rows > 0){
	 while($row = $result_dev->fetch_assoc())
	 {
		 $row['id_devocional'];
		 $titulo_dev = $row['titulo_dev'];
		 $resumo_dev = $row['resumo_dev'];
		 $texto_dev = $row['texto_dev'];
		 $autor_dev = $row['autor_dev'];
		 $data_dev = $row['data_dev'];
		 $foto_dev = $row['foto_dev'];
		 $postador = $row['usuario_logado_dev'];
		}
		}
?>

	<div class="text-center "><h3>Devocional</h3></div><br>
	<div class="text-right">
		<a href="administrativo.php?link=6"><button type="button" class="btn btn-sm btn-info">Listar</button></a>
		<?php if (($id_dev !=1) and ($id_dev !=2)): ?>
		<a href="prm_apag_devocional.php?id_devocional=<?php echo $id_dev; ?>" ><button type="button" class="btn btn-sm btn-danger">Apagar</button></a>
	<?php endif; ?>
	</div>
	<table class="table table-hover table-striped col-12">
	  <tbody>
			<tr><th scope="row" class="text-center table-dark">Dados do devocional</th><td class="table-dark"></td></tr>
	    <tr><th scope="row">Id:</th><td><?php echo $id_dev ; ?></td></tr>
	    <tr><th scope="row">Foto:</th><td><?php echo $foto_dev ; ?></td></tr>
	    <tr><th scope="row">Título:</th><td><?php echo $titulo_dev ; ?></td></tr>
			<tr><th scope="row">Resumo:</th><td><?php echo $resumo_dev ; ?></td></tr>
	    <tr><th scope="row">Texto:</th><td><?php echo $texto_dev; ?></td></tr>
	    <tr><th scope="row">Autor do devocional:</th><td><?php echo $autor_dev ; ?></td></tr>
	    <tr><th scope="row">Data da postagem:</th><td><?php echo $data_dev; ?></td></tr>
	    <tr><th scope="row">Postador:</th><td><?php echo $postador; ?></td></tr>
	    <tr><th scope="row"></th><td></td></tr>
	  </tbody>
	</table>
