<?php	include 'conexao.inc.php';  ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="IJEMAVI - Igreja de Jesus Manacial de Águas Vivas, ijemavi">
		<meta name="keywords" content="Igreja, Jesus, Manancial, Águas, Vivas, Pastor, Família, Adoradores, IJEMAVI, ijemavi">
		<meta name="author" content="José Ribeiro">
		<meta http-equiv="refresh" content="300">
		<title>IJEMAVI- Dias de culto</title>
      
      			<link href="css/bootstrap.min.css" rel="stylesheet">
			<link href="css/bootstrap.css" rel="stylesheet"><!-- não Retirar esta linha aqui do bootstrap.css -->
      <link rel="stylesheet" href="style.css" >
			<link rel="shortcut icon" type="image/png" href="img/logo_favicon.ico">
  </head>
  <body>
		<div class="bg_diaculto">

				<!-- Menu -->
				<?php	include 'menu_index.inc.php'; ?>
     

<?php					include 'conexao.inc.php';//Conexão com Banco

						  $sql_dia_dom  = "SELECT * FROM dia_culto  WHERE id_dia_culto=1 LIMIT 1";  $result_dia_dom  = $conexao->query($sql_dia_dom );
						  while($row = $result_dia_dom->fetch_assoc())
						  {  $id_dom= $row['id_dia_culto'];  $local_dom = $row['local_culto']; $tema_dom = $row['nome_culto'];   $hora_dom = $row['hora_culto'];  }

						  $sql_dia_seg  = "SELECT * FROM dia_culto  WHERE id_dia_culto=2 LIMIT 1";  $result_dia_seg = $conexao->query($sql_dia_seg );
						  while($row = $result_dia_seg->fetch_assoc())
						  {  $id_seg = $row['id_dia_culto'];  $local_seg = $row['local_culto'];   $tema_seg = $row['nome_culto'];   $hora_seg = $row['hora_culto'];  }

						  $sql_dia_ter  = "SELECT * FROM dia_culto  WHERE id_dia_culto=3 LIMIT 1";  $result_dia_ter  = $conexao->query($sql_dia_ter );
						  while($row = $result_dia_ter->fetch_assoc())
						  {  $id_ter = $row['id_dia_culto'];  $local_ter = $row['local_culto'];   $tema_ter = $row['nome_culto'];   $hora_ter = $row['hora_culto'];  }

						  $sql_dia_qua  = "SELECT * FROM dia_culto  WHERE id_dia_culto=4 LIMIT 1";  $result_dia_qua  = $conexao->query($sql_dia_qua );
						  while($row = $result_dia_qua->fetch_assoc())
						  {  $id_qua = $row['id_dia_culto'];  $local_qua = $row['local_culto'];   $tema_qua = $row['nome_culto'];   $hora_qua = $row['hora_culto'];  }

						  $sql_dia_qui  = "SELECT * FROM dia_culto  WHERE id_dia_culto=5 LIMIT 1";  $result_dia_qui  = $conexao->query($sql_dia_qui );
						  while($row = $result_dia_qui->fetch_assoc())
						  {  $id_qui = $row['id_dia_culto'];  $local_qui = $row['local_culto'];   $tema_qui = $row['nome_culto'];   $hora_qui = $row['hora_culto'];  }

						  $sql_dia_sex  = "SELECT * FROM dia_culto  WHERE id_dia_culto=6 LIMIT 1";  $result_dia_sex  = $conexao->query($sql_dia_sex );
						  while($row = $result_dia_sex->fetch_assoc())
						  {  $id_sex = $row['id_dia_culto'];  $local_sex = $row['local_culto'];   $tema_sex = $row['nome_culto'];   $hora_sex = $row['hora_culto'];  }

						  $sql_dia_sab  = "SELECT * FROM dia_culto  WHERE id_dia_culto=7 LIMIT 1";  $result_dia_sab  = $conexao->query($sql_dia_sab );
						  while($row = $result_dia_sab->fetch_assoc())
						  {  $id_sab = $row['id_dia_culto'];  $local_sab = $row['local_culto'];   $tema_sab = $row['nome_culto'];   $hora_sab = $row['hora_culto'];  }
?>
		
  <div class="container"> 
	<div class="text-center" >
	  <h3 class="bg-info">Nossos Cultos</h3>
	</div>
	<table class="table table-hover table-striped table-dark">
	  <thead>
	    <tr>
	      <th id="dia_culto" scope="col">#</th>
	      <th id="dia_culto" scope="col">Local</th>
	      <th id="dia_culto" scope="col">Tema do culto</th>
	      <th id="dia_culto" scope="col">Hora</th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	    
	      <th id="dia_culto" scope="row"> Domingo </th>
	      <td> <?php echo $local_dom ; ?></td>
	      <td> <?php echo $tema_dom ; ?></td>
	      <td> <?php echo $hora_dom; ?></td>
	    </tr>
	    <tr>
	      <th id="dia_culto" scope="row">Segunda</th>
	      <td> <?php echo $local_seg ; ?></td>
	      <td><?php echo $tema_seg ; ?></td>
	      <td><?php echo $hora_seg; ?></td>
	    </tr>
	    <tr>
	      <th id="dia_culto" scope="row">Terça</th>
	      <td><?php echo $local_ter ; ?></td>
	      <td><?php echo $tema_ter ; ?></td>
	      <td><?php echo $hora_ter; ?></td>
	    </tr>
	    <tr>
	      <th id="dia_culto" scope="row">Quarta</th>
	      <td><?php echo $local_qua ; ?></td>
	      <td><?php echo $tema_qua ; ?></td>
	      <td><?php echo $hora_qua; ?></td>
	    </tr>
	    <tr>
	      <th id="dia_culto" scope="row">Quinta</th>
	      <td><?php echo $local_qui ; ?></td>
	      <td><?php echo $tema_qui ; ?></td>
	      <td><?php echo $hora_qui ; ?></td>
	    </tr>
	    <tr>
	      <th id="dia_culto" scope="row">Sexta</th>
	      <td><?php echo $local_sex ; ?></td>
	      <td><?php echo $tema_sex ; ?></td>
	      <td><?php echo $hora_sex ; ?></td>
	    </tr>
	    <tr>
	      <th id="dia_culto" scope="row">Sabado</th>
	      <td><?php echo $local_sab ; ?></td>
	      <td><?php echo $tema_sab ; ?></td>
	      <td><?php echo $hora_sab  ; ?></td>
	    </tr>
	  </tbody>
	</table>
	</div> 

<!--
   <div class="diaculto"> 
		<strong>Domingo</strong> <br>
		Local: <?php echo $local_dom ; ?><br>
		Tema do culto: <?php echo $tema_dom ; ?><br>
		Hora: <?php echo $hora_dom; ?><br><br>
		
		<strong>Segunda</strong><br>
		Local: <?php echo $local_seg ; ?><br>
		Tema do culto: <?php echo $tema_seg ; ?><br>
		Hora: <?php echo $hora_seg; ?><br><br>
		
		<strong>Terça</strong><br>
		Local: <?php echo $local_ter ; ?><br>
		Tema do culto: <?php echo $tema_ter ; ?><br>
		Hora: <?php echo $hora_ter; ?><br><br>
		
		<strong>Quarta</strong><br>
		Local: <?php echo $local_qua ; ?><br>
		Tema do culto: <?php echo $tema_qua ; ?><br>
		Hora: <?php echo $hora_qua; ?><br><br>
		
		<strong>Quinta</strong><br>
		Local: <?php echo $local_qui ; ?><br>
		Tema do culto: <?php echo $tema_qui ; ?><br>
		Hora: <?php echo $hora_qui ; ?><br><br>
		
		<strong>Sexta</strong><br>
		Local: <?php echo $local_sex ; ?><br>
		Tema do culto: <?php echo $tema_sex ; ?><br>
		Hora: <?php echo $hora_sex ; ?><br><br>
		
		<strong>Sabado</strong><br>
		Local: <?php echo $local_sab ; ?><br>
		Tema do culto: <?php echo $tema_sab ; ?><br>
		Hora: <?php echo $hora_sab ; ?><br>
		
	</div>
-->

         <footer>
          <?php	include 'footer.inc.php'; ?>
         </footer>
         </div>
		<script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/bootstrap.banner.js"></script>
	  <script src="js/popper.min.js" ></script> 	<!-- talvez nao precisa desta biblioteca -->
		<script>	$('[data-toggle="tooltip"]').tooltip();	</script> <!-- Tooltip  -->
  </body>
</html>
