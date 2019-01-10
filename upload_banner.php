
    <div class="container-fluid">

			<div class="container">

			  <h1>Adiconar Banner</h1><br>

            <!-- <h1> Carregar a foto</h1> -->
            <!-- <form method="POST" action="proc_upload.php" enctype="multipart/form-data">
            	Arquivo: <input  class="form-control-file" name="arquivo" type="file"><br><br>

            	<input  class="btn btn-primary" type="submit" value="Adicionar">
            </form> -->
            <form method="POST" action="proc_upload_banner.php" enctype="multipart/form-data">

              <div class="row">
                <div class="col-md-4">
                  <label>Escolha a data do evento:</label>
                  <input class="form-control" type="date" name="data_evento" required>
                </div>
                <div class="col-md-4">
                  <label for="exampleFormControlFile1">Escreva o nome do banner:</label>
                  <input type="text" placeholder="Ex: Festa dos Jovens" name="nome_escolhido" class="form-control" id="exampleFormControlFile1" required>
                </div>
                <div class="col-md-4">
                  <label for="exampleFormControlFile1">Arquivo:</label>
                  <input type="file"  name="arquivo" class="form-control" id="exampleFormControlFile1" required>
                </div>
              </div><br>
      				  <input class="btn btn-primary" type="submit" value="Adicionar">
      			</form>
          </div> <!-- row -->
			  </div>
		  </div> <!--  container -->
		</div>
