<?php
	include 'conexao.inc.php' ;
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>testebanner</title>
        <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
		<link href="css/bootstrap.css" rel="stylesheet"><!-- não Retirar esta linha aqui do bootstrap.css -->
        <!-- <link href="css/personalizado.css" rel="stylesheet"> -->
    </head>
    <body>




        <h1>Galeria de Imagens</h1>

        <div class="container gallery-container">
      <?php

      $sql_img = "SELECT * FROM galeria";
           $result_img = $conexao->query($sql_img);

           if($result_img->num_rows > 0){
            while($row = $result_img->fetch_assoc())
            {
              $id_img = $row['id_galeria'];
              $img = "img/img_galeria/"."foto".$id_img.".jpg";

              $id_img = $row['id_galeria'] ;
              $nome_img = $row['nome_img_gal'] ;
              $nome_escolhido = $row['nome_escolhido'] ;
              $autor = $row['postador_img'] ;
              $data = $row['data_post_img'] ;
        ?>

     <img  type="image" src="img/img_galeria/<?php  $img; ?>" alt="<?php echo  $nome_img; ?>">
            <?php }}?>

						
<div class="row">
  <div class="col-xs-6 col-md-3">
    <a href="#" class="thumbnail">
      <img src="..." alt="...">
    </a>
  </div>
  ...
</div>
						<script src="js/jquery-3.3.1.slim.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.banner.js"></script>
    </body>
</html>
