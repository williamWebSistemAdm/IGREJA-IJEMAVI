<div  class="titulo_dev" >
	<h3 class="text-center col-md-12">Devocional</h3>
</div>
	<div class="container container-dev-index">

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
        <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3   ">
          <div id="devocional" class="card shadow-sm devocional">
			<div class="card-text text-center" id="img_dev">
				<a href="devocional_view.php?id_devocional=<?php echo $id_dev; ?>" > <img  src="<?php echo $img; ?> " alt="<?php echo $titulo; ?>" title="<?php echo $titulo; ?>"></a>
			</div>
            <div class="btn-group text-right">
              <a href="devocional_view.php?id_devocional=<?php echo $id_dev; ?>" > <button type="button" class="btn btn-sm btn-outline-secondary">Mais</button></a>
            </div>
            <div class="card-body">
              <p id="titulo_dev" class="card-text text-center"> <?php  echo  $titulo . "<br>" ; ?></p>
              <p id="resumo_dev" class="card-text"> <?php  echo  $resumo; ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <small id="data_dev"  class="card-text"><em> <?php  echo  $data; ?></em></small>
              </div>
            </div>
          </div>
        </div>
<?php	}}	?>


      </div>
    </div>