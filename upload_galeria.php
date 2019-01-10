
			<div class="container">
		  <h1>Adiconar imagem</h1><br>
        <form method="POST" action="proc_upload_galeria.php" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-4">
                <label for="exampleFormControlFile1">Nome da imagem:</label>
                <input type="text" placeholder="Ex: Culto de ensino" name="nome_img_galeria" class="form-control" id="exampleFormControlFile1" required>
              </div>
              <div class="col-md-4">
                <label for="exampleFormControlFile1">Arquivo:</label>
                <input type="file"  name="img_galeria" class="form-control" id="exampleFormControlFile1" required>
              </div>
            </div> <!-- row -->
            <br>
    				<input class="btn btn-primary" type="submit" value="Adicionar">
  			</form>
		  </div> <!--  container -->
