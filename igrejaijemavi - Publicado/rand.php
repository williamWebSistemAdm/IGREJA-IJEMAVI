<?php
	include 'conexao.inc.php';

	$pegar_id__carrouses = "SELECT max(id) FROM carrouses";
	$result_carrouses =  mysqli_query($conexao, $pegar_id__carrouses);

	 while($row = mysqli_fetch_row($result_carrouses))
	 {
		 $id	= $row[0];
	 }

		$rand = (string) rand(1, $id);

		$image_rand = "img_rand/imagem (".$rand.").jpg";

 ?>

 <!DOCTYPE html>
 <html lang="pt-br">
     <head>
 			<meta charset="utf-8">
 			<meta http-equiv="X-UA-Compatible" content="IE=edge">
 			<meta name="viewport" content="width=device-width, initial-scale=1">
 			<title>rand</title>
 				<link rel="shortcut icon" type="image/png" href="img/logo_favicon.ico">
     </head>
     <body class="bg_index">

 <img src="<?php echo $image_rand ; ?>" alt="<?php echo $image_rand ; ?>">

</body>

</html>
