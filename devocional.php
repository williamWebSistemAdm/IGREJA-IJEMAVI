
		<div class="container">
			<h3 class="text-center col-md-12 table-active">Devocional</h3>

	      <div class="row">
					<?php

					 $sql_dev = "SELECT * FROM devocional";
					 $result_dev = $conexao->query($sql_dev);

					 if($result_dev->num_rows > 0){
						while($row = $result_dev->fetch_assoc())
						{
							$id_dev = $row['id_devocional'];
							// $img = "img/img_banner/"."banner".$id_dev.".jpg";
							$img = "img/img_devocional/"."Devocional".$id_dev.".jpg";

							// echo  $row['id_devocional'] ;
							$titulo = $row['titulo_dev'] ;
							$resumo = $row['resumo_dev'] ;
							$texto = $row['texto_dev'] ;
							$autor = $row['autor_dev'] ;
							$data = $row['data_dev'] ;
							$foto = $row['foto_dev'] ;


						?>
	        <div class="col-md-4">
	          <div class="card mb-4 shadow-sm">
							<div class="card-text text-center" id="img_dev">
								<a href="#">	<img  src="<?php echo $img; ?> " alt="<?php echo $titulo; ?>" title="<?php echo $titulo; ?>"></a>
							</div><hr>
	            <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect fill="#55595c" width="100%" height="100%"/><text fill="#eceeef" dy=".3em" x="50%" y="50%">Thumbnail</text></svg> -->
	            <div class="card-body">
	              <p id="titulo_dev" class="card-text text-center"> <?php  echo  $titulo . "<br>" ; ?></p>
	              <p id="resumo_dev" class="card-text"> <?php  echo  $resumo; ?></p>
	              <div class="d-flex justify-content-between align-items-center">
	                <div class="btn-group">
	                  <a href="#"> <button type="button" class="btn btn-sm btn-outline-secondary">Mais</button></a>
	                </div>
	                <small id="data_dev"  class="card-text"><em> <?php  echo  $data; ?></em></small>
	              </div>
	            </div>
	          </div>
	        </div>
	<?php	}}	?>


	      </div>
	    </div>
