
	<header id="header">

		<nav class="navbar navbar-expand-lg  navbar-light  bg-primary" >
			<a class="logo" href="index.php"> <img src="img/logo.png" alt="IJEMAVI"></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="#"> <label class="link">Galeria Imagens </label></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#"><label class="link">Devocional</label></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#"><label class="link">Contato</label></a>
		      </li>
		      <!-- <li class="nav-item"> -->

		      <!-- </li> -->

					<li>
						<a href="doacoes.php" ><button type="button" class="btn btn-sm btn-light"> Doações </button></a>
					</li>

					<div>
						<?php

							include 'includes/conexao.inc.php';//Conexão com Banco

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

						<a href="#"
						data-toggle="tooltip"
						data-placement="bottom"
						data-html="true"
						title="
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
						"
						><button type="button" class="btn btn-sm btn-light"> Dias de culto </button></a>
					</div>


		    </ul>

				<div class="text-right">
					<a href="restrito.php" ><button type="button" class="btn btn-sm btn-dark"> Área Restrita </button></a>
				</div>

		  </div>
		</nav>

	</header >
