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




					<?php

						$result_foto = "SELECT * FROM galeria ORDER BY id_galeria ASC";
						$resultado_foto = mysqli_query($conexao, $result_foto);
						while($row_foto = mysqli_fetch_assoc($resultado_foto)){
						 $imagem = $row_foto['nome_img_gal']."<br>";
						 echo $imagem;
						 // echo $row_foto['nome_escolhido'];
						}
					?>

						<img  type="image" src="img/img_galeria/<?php $row_foto['nome_img_gal']; ?>" alt="<?php echo $row_foto['nome_img_gal']; ?>">

						<script src="js/jquery-3.3.1.slim.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.banner.js"></script>
    </body>
</html>
