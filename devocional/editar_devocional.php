<?php
	include 'conexao.inc.php';
	include 'verificausuario.inc.php';
	$idUsuario = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<title>Editar Devocional</title>
	</head>

	<body>
		
		<?php include 'header.inc.php';?>
        
    <div>
        <div>
		<div class="container">

        <h1>Editar Devocional</h1>
         <table>
        	<tr></tr>
        </table>
        
            <div>
            <label>T�tulo</label><input maxlength="60" type="text"></input><br>
            <label>Texto</label><input type="text"></input><br>
            <label>Imagem</label><input type="file"></input><br>
            <label>Video</label><input type="file"></input><br>
            </div>
			 

      </div>
			
			<div>
				<?php include 'footer.inc.php'; ?>
			</div>
      </div>

	</body>

</html>