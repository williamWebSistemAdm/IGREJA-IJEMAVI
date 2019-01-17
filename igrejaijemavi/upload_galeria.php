<br>
<div class="text-center"><h3>Adiconar imagem</h3></div><br>
  <form method="POST" action="proc_upload_galeria.php" enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-7">
          <label for="exampleFormControlFile1">Nome da imagem:</label>
          <input type="text" placeholder="Ex: Culto de ensino" name="nome_escolhido" class="form-control" id="exampleFormControlFile1" required>
        </div>
        <div class="col-md-5">
          <label for="exampleFormControlFile1">Arquivo:</label>
          <input type="file"  name="nome_img_gal" class="form-control" id="exampleFormControlFile1" required>
        </div>
      </div> <!-- row -->
      <br>
			<input class="btn btn-primary" type="submit" value="Adicionar">
	</form>
