<?php include 'seguranca.inc.php';//seguranca 

  $id = $_GET['id_obreiros'];

  echo $id;
?>
<br>
<div class="container">
  <div class="text-center"><h3>Alterar imagem de perfil</h3></div><br>
    <div class="text-right">
      <a href="administrativo.php?link=1" ><button type="button" class="btn btn-sm btn-primary">Voltar para lista</button></a>
    </div>
    <div><label>Imagem Atual: </label><br>
      <?php
      $img = "img/img_perfil_obr/"."foto".$id.".jpg";

      echo "<img class="."img_perfil_obr1"." src=".$img.">";
      ?>
    </div><br><br>
    <form method="POST" action="proc_img_perfil_obr.php" enctype="multipart/form-data">
        <div class="row">
    <!--  <div class="col-md-7">
            <label for="exampleFormControlFile1">Nome da imagem:</label>
            <input type="text" placeholder="Ex: Culto de ensino" name="nome_escolhido" class="form-control" id="exampleFormControlFile1" required>
          </div> -->
          <div class="col-md-5">
            <label for="exampleFormControlFile1">Mudar:</label>
            <input type="file"  name="nome_img_prfl" class="form-control" id="exampleFormControlFile1" required>
          </div>
        </div> <!-- row -->
        <br>
      <input type="hidden" name="id_img_prfl" value="<?php echo $id; ?>">
      <input class="btn btn-success" type="submit" value="Adicionar">
   </form><br><br><br><br><br><br><br>
  </div>
