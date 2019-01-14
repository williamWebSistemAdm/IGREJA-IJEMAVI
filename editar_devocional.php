<?php
$id_dev = $_GET['id_devocional'];
$_SESSION['id_devocional'] = $_GET['id_devocional'];

$sql_dev = "SELECT * FROM devocional WHERE id_devocional='$id_dev' limit 1";
$result_dev = $conexao->query($sql_dev);
while($row = mysqli_fetch_assoc($result_dev))
{
	$id_dev = $row['id_devocional'];
	$titulo_dev = $row['titulo_dev'];
	$resumo_dev = $row['resumo_dev'];
	$texto_dev = $row['texto_dev'];
	$autor_dev = $row['autor_dev'];
	$data_dev = $row['data_dev'];
	$foto_dev = $row['foto_dev'];
}

 ?>



	<div class="text-center"><h3>Editar Devocional</h3></div>
		<div class="text-right"><a href="administrativo.php?link=6" ><button type="button" class="btn btn-sm btn-info"> Listar </button></a></div>

		<div id="formulario" >
  		<form action="proc_editar_devoc.php" method="post" enctype="multipart/form-data">

  			<label >Título</label>
  			<input class="form-control" type="text" id="fname" value="<?php echo $titulo_dev; ?>" name="titulo_dev" required>

  			<label for="subject">Resumo</label>
  			<textarea class="form-control" maxlength="300" id="subject" name="resumo_dev" placeholder="300 caracteres" style="height:100px" required><?php echo $resumo_dev; ?></textarea>

  			<label >Texto</label>
  			<textarea class="form-control" id="subject" name="texto_dev" style="height:200px" required><?php echo $texto_dev; ?></textarea>

        <?php include 'includes/select_obreiros.inc.php';//Selecionando Obreiro?>

        <!-- Autor escolhido pelo usuario -->
        <label >Autor</label><br>
        <input class="form-control" type="text" id="fname" name="autor_dev" placeholder="Caso seja de outrem" required value="<?php echo $autor_dev; ?>">
        <!-- <?php
				// echo "$tipocargo_obr -"." $nome_obr"; ?> -->
        <!-- Autor Usuário logado que vai para o banco -->
  			<!-- <input type="hidden" name="usuario_logado_dev" value="<?php echo "$tipocargo_obr -"." $nome_obr"; ?>" > -->

        <!-- <br> <label >Imagem:</label>
        <input type="file"  name="foto_dev" class="form-control" > -->

  			<br> <input class="btn btn-success" type="submit" name="submit" value="Atualizar">
  		</form>
