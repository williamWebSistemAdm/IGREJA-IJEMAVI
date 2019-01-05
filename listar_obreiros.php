<?php
  // Iniciando Sessao
  session_start();
  //Conecxao com Banco
  include 'includes/conexao.inc.php';//conexao com o banco
  // include '../includes/seguranca.inc.php';//seguranca

  // include 'msg_boas_vindas.inc.php';//mensagem de boas vindas
 ?>
<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="IJEMAVI - Igreja de Jesus Manacial de Águas Vivas, ijemavi">
		<meta name="keywords" content="Igreja, Jesus, Manancial, Águas, Vivas, Pastor, Família, Adoradores, IJEMAVI, ijemavi">
		<meta name="author" content="Igreja IJEMAVI">
		<meta http-equiv="refresh" content="300">
		<title>Listar Obreiros</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<link rel="stylesheet" href="css/style.css" >
		<link rel="stylesheet" href="style.css" >
    <link rel="shortcut icon" type="image/png" href="img/logo_favicon.ico">
	</head>

	<body>

    <div class="container-fluid">
			<!-- Menu -->
			<?php	include 'includes/header_adm.inc.php'; ?>

		<div class="container">

			<h2>Lista de Usuarios</h2>
			<div class="table-responsive">
			<table class="table table-striped table-sm table-dark table-hover">
				<tr class="bg-primary">
					<th>Nome</th>
					<th>Sobrenome</th>
					<th>CPF</th>
					<th>Telefone</th>
					<th>Sexo</th>
					<th>E-mail</th>
					<th>Endereço</th>
					<th>Data nascimento</th>
					<th>Perfil/Cargo</th>
				</tr>
				<?php
				// trazendo sessão
					$nome_obr_sessao = $_SESSION['nome_obr'];

				 $sql_obr = "SELECT * FROM obreiros";
				 $result_obr = $conexao->query($sql_obr);

				 if($result_obr->num_rows > 0){
					while($row = $result_obr->fetch_assoc())
					{
						echo "<tr>";

						// echo "<td>" . $row['foto_obreiro'] . "</td>";
						echo "<td>" . $row['nome_obr'] . "</td>";
						echo "<td>" . $row['sobrenome_obr'] . "</td>";
						echo "<td>" . $row['cpf_obr'] . "</td>";
						echo "<td>" . $row['telefone_obr'] . "</td>";
						echo "<td>" . $row['sexo_obr'] . "</td>";
						echo "<td>" . $row['email_obr'] . "</td>";
						echo "<td>" . $row['endereco'] . "</td>";
						echo "<td>" . $row['nascimento_obr'] . "</td>";
						echo "<td>" . $row['tipocargo_obr'] . "</td>";
						echo "<td>" . $row['foto_obreiro'] . "</td>";

						 echo "</tr>";
					 }
				 }
				 else{
					 echo "<tr>";

					 // echo "<td>" . $row['foto_obreiro'] . "</td>";
					 echo "<td>" . "Sem Dados" . "</td>";
					 echo "<td>" . "Sem Dados" . "</td>";
					 echo "<td>" . "Sem Dados" . "</td>";
					 echo "<td>" . "Sem Dados" . "</td>";
					 echo "<td>" . "Sem Dados" . "</td>";
					 echo "<td>" . "Sem Dados" . "</td>";
					 echo "<td>" . "Sem Dados" . "</td>";
					 echo "<td>" . "Sem Dados" . "</td>";
					 echo "<td>" . "Sem Dados" . "</td>";
					 echo "<td>" . "Sem Dados" . "</td>";

						echo "</tr>";

				 }

			 ?>
			</table>

      </div>
      </div>

			<div>
				<?php include 'includes/footer.inc.php'; ?>
			</div>
		</div>

    <script src="js/jquery-3.3.1.slim.min.js" ></script>
    <script src="js/bootstrap.min.js" ></script>
	</body>

</html>
