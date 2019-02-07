<?php include 'seguranca.inc.php';//seguranca  ?>

<br>
      <div class="text-center"><h3>Postagem Devocional</h3></div>
      <div class="text-right">
				<a href="administrativo.php?link=6" ><button type="button" class="btn btn-sm btn-primary"> Listar </button></a>
      </div>

		<div id="formulario" >
  		<form action="proc_postar_devoc.php" method="post" enctype="multipart/form-data">

  			<label >Título</label>
  			<input class="form-control" type="text" id="fname" name="titulo_dev" required autofocus>

  			<label for="subject">Resumo</label>
  			<textarea class="form-control" maxlength="300" id="subject" name="resumo_dev" placeholder="300 caracteres" style="height:100px" required></textarea>

  			<label >Texto</label>
  			<textarea class="form-control" id="subject" name="texto_dev" style="height:200px" required></textarea>

        <?php include 'select_obreiros.inc.php';//Selecionando Obreiro?>

        <!-- Autor escolhido pelo usuario -->
        <label >Autor</label><br>
        <input class="form-control" type="text" id="fname" name="autor_dev" placeholder="Caso seja de outrem"required>
        <!-- <?php echo "$tipocargo_obr -"." $nome_obr"; ?> -->
        <!-- Autor Usuário logado que vai para o banco -->
  			<input type="hidden" name="usuario_logado_dev" value="<?php echo "$tipocargo_obr -"." $nome_obr"; ?>" >

  			<!-- <label>Imagem</label><br /><br />
  			<input type="file" name="foto_dev"><br /> -->
        <?php //include 'img_padrao_dev.php';?>

        <br> <label >Imagem:</label>
        <input type="file"  name="foto_dev" class="form-control"><br>

  			<input class="btn btn-primary" type="submit" name="submit" value="Postar"><br>
  		</form>
      <div class="container text-center text-warning modelobanner">
        <h4>Tamanho padrao da imagem:</h4><br>
        <img src="img/600x250.jpg" alt="tamanho da imagem">
      </div>
  </div><br>





