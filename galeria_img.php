<div class="container"><hr>
<h3 id="galeria" class="page-description text-center">Galeria de Imagens</h3>
 <div  id="tamanho"  class="container gallery-container text-center">
    <div class="tz-gallery">
        <div class="row">
<?php

	$sql_gal = "SELECT * FROM galeria";
	$result_gal = $conexao->query($sql_gal);
	while($row = $result_gal->fetch_assoc())
	{
		$id_foto = $row['id_galeria'];
		$img = "img/img_galeria/"."foto".$id_foto.".jpg";

	    $nome_original = $row['nome_img_gal'];
	    $nome_escolhido = $row['nome_escolhido'];
	    $postador_img = $row['postador_img'];
		$data_post_img = 	$row['data_post_img'];
	
?>
       		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
				<a class="lightbox" href="<?php echo $img; ?> "><img src="<?php echo $img; ?> " alt="<?php echo $nome_escolhido; ?>" title="<?php echo $nome_escolhido; ?>"></a>
			</div>
		<?php	}	?>
		</div>
	</div>
</div>
</div>
