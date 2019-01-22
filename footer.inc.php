<?php
	// Iniciando Sessão
	include 'conexao.inc.php';//conexao com o banco
	// include 'seguranca.inc.php';//seguranca

	$sql_end_igj = "SELECT * FROM endereco_igreja";
	$result_end_igj = $conexao->query($sql_end_igj );
	while($row = $result_end_igj->fetch_assoc())
	{
		$id_end_igj = $row['id_end_igj'];
		$cep_end_igj = $row['cep_end_igj'];
		$estado_end_igj = $row['estado_end_igj'];
		$cidade_end_igj = $row['cidade_end_igj'];
		$bairro_end_igj = 	$row['bairro_end_igj'];
		$rua_end_igj = 	$row['rua_end_igj'];
		$numero_end_igj = 	$row['numero_end_igj'];
		$complemento_end_igj = 	$row['complemento_end_igj'];
	}
	// Pegar email
$sql_consulta = "SELECT * FROM obreiros WHERE id_obreiros='$id' limit 1";
$result_consulta = $conexao->query($sql_consulta);
while($row = mysqli_fetch_assoc($result_consulta))
{
	$email_obr = $row['email_obr'];
}
	// Pegar telefone
$pegar_telefone = "SELECT * FROM telefones";
$result_telefone =  mysqli_query($conexao, $pegar_telefone);
while($rowt = mysqli_fetch_assoc($result_telefone))
	{
		$tel_cel = $rowt['tel_cel'];
	}

?>


<div class="row">
<div class="col-12">
      <div class="sobre">
       <div class="text-center "><h2>Endereço da igreja</h2></div>
            <label>CEP: <em><?php echo $cep_end_igj ; ?></em></label><br>
            <label>Estado: <em><?php echo $estado_end_igj; ?></em></label><br>
            <label>Cidade: <em><?php echo $cidade_end_igj; ?></em></label><br>
            <label>Av: <em><?php echo $rua_end_igj; ?></em></label><br>
            <label>Bairro: <em><?php echo $bairro_end_igj; ?></em></label><br>
            <label>Nº: <em><?php echo $numero_end_igj; ?></em></label><br>
            <!-- <label>Complemento: <em><?php echo $complemento_end_igj; ?></em></label><br> -->
      </div><hr>
    
      <div class="sobre">
        <div class="text-center "><h2>Contatos</h2></div>
        <label>Tel: <em><?php echo $tel_cel; ?></em></label><br>
        <label> Email: <em><?php echo $email_obr; ?></em></label><br>
        <label>Site: <a href="http://www.igrejaijemavi.com.br/index.php" target="_blank">http://www.igrejaijemavi.com.br/index.php </a></label><br>
      </div><hr>

    
      <div class="sobre redes_sociais">
        <div class="text-center "><h2>Redes Sociais</h2></div>
        <a href="https://www.facebook.com/IJEMAVI/" target="_blank"> <img src="img/facebook_3.png" alt="Logo facebook" title="facebook"> </a><label> Pág. Oficial: <a href="https://www.facebook.com/IJEMAVI/" target="_blank">https://www.facebook.com/IJEMAVI/</a> </label><br>
        <!-- <a href="https://www.instagram.com/" target="_blank"> <img src="img/instagram.png" alt="Logo Instagram" title="instagram"></a> -->
        <!-- <a href="https://twitter.com/?lang=pt" target="_blank"> <img src="img/twitter.png" alt="Logo Twitter" title="twitter"></a> -->
        <!-- <a href="https://www.youtube.com/" target="_blank"> <img src="img/youtube.png" alt="Logo Youtube" title="youtube"></a> -->
      	<hr>
      	<div class="text-right inicio">
      		<a href="#header"><button type="button" class="btn btn-sm btn-info">Início</button></a>
    	</div>
	  </div>
    </div>
  </div>



