<?php	include 'conexao.inc.php';  ?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Freebie: 4 Bootstrap Gallery Templates</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="css/gallery-grid.css">


</head>
<body>

	<h3 class="page-description text-center">Galeria de Imagens</h3>
     <div class="container gallery-container">
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


               		<div class="col-sm-6 col-md-4">
						<a class="lightbox" href="<?php echo $img; ?> "><img src="<?php echo $img; ?> " alt="<?php echo $nome_escolhido; ?>" title="<?php echo $nome_escolhido; ?>"></a>
					</div>
					<?php	}	?>
      			</div>
    		</div>
		</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
</body>
</html>