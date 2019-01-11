
	<div class="text-center"><h3>Adiconar Banner</h3></div>
  <form method="POST" action="proc_upload_banner.php" enctype="multipart/form-data">

    <div class="row">
      <div class="col-md-4">
        <label>Escolha a data do evento:</label>
        <input class="form-control" type="date" name="data_evento" required>
      </div>
      <div class="col-md-8">
        <label for="exampleFormControlFile1">Escreva o nome do banner:</label>
        <input type="text" placeholder="Ex: Festa dos Jovens" name="nome_escolhido" class="form-control" id="exampleFormControlFile1" required>
      </div>
    </div><br>
    <div class="row">
      <div class="col-md-6">
        <label for="exampleFormControlFile1">Arquivo:</label>
        <input type="file"  name="arquivo" class="form-control" id="exampleFormControlFile1" required>
      </div>
    </div>
		  <input class="btn btn-primary" type="submit" value="Adicionar">
	</form>
