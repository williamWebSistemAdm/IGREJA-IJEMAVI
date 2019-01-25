<?php
	
	include 'conexao.inc.php';//conexao com o banco
	
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
  $sql_consulta = "SELECT * FROM obreiros where id_obreiros=2";
  $result_consulta = $conexao->query($sql_consulta);
  while($row = mysqli_fetch_assoc($result_consulta))
  {
  	$email_obr = $row['email_obr'];
  }
  	// Pegar telefone
  $pegar_telefone = "SELECT * FROM telefones where id_telefones=2";
  $result_telefone =  mysqli_query($conexao, $pegar_telefone);
  while($rowt = mysqli_fetch_assoc($result_telefone))
  	{
  		$tel_cel = $rowt['tel_cel'];
  	}

?>


<div id="footer" class="row">
<div class="col-12">
  <div class="sobre">
   <div class="text-center "><h3>Endereço da igreja</h3></div>
        <label>CEP: <em><?php echo $cep_end_igj ; ?></em></label><br>
        <label>Estado: <em><?php echo $estado_end_igj; ?></em></label><br>
        <label>Cidade: <em><?php echo $cidade_end_igj; ?></em></label><br>
        <label>Av: <em><?php echo $rua_end_igj; ?></em></label><br>
        <label>Bairro: <em><?php echo $bairro_end_igj; ?></em></label><br>
        <label>Nº: <em><?php echo $numero_end_igj; ?></em></label><br>
        <!-- <label>Complemento: <em><?php echo $complemento_end_igj; ?></em></label><br> -->
  </div><hr>

  <div class="sobre">
    <div class="text-center "><h3>Contatos</h3></div>
    <label type="tel">Tel: <em><?php echo $tel_cel; ?></em></label><br>
    <label> Email: <em><?php echo $email_obr; ?></em></label><br>
    <label>Site: <a href="http://www.igrejaijemavi.com.br/index.php" target="_blank">http://www.igrejaijemavi.com.br/index.php </a></label><br>
  </div><hr>

    
  <div class="sobre redes_sociais">
    <div class="text-center "><h3>Redes Sociais</h3></div>
    <a href="https://www.facebook.com/IJEMAVI/" target="_blank"> <img src="img/facebook_3.png" alt="Logo facebook" title="facebook"> </a><label> Pág. Oficial: <a href="https://www.facebook.com/IJEMAVI/" target="_blank">https://www.facebook.com/IJEMAVI/</a> </label><br>

          <!-- Compartilhar nasredes Sociais -->
  <div class="text-left redes_sociais"><br>
  <div><h5>* Compartilhe este site com amigos</h5></div>
    <!-- Whatsapp -->
     <a href="http://api.whatsapp.com/send?text=Igreja%20IJEMAVI%20-%20Site:%20&u=http://igrejaijemavi.com.br"><img  src="img/whatsapp1.png" alt="Compartilhe este site no Whatsapp" title="Compartilhe este site no Whatsapp"></a>
    
    <!-- facebook -->
    <a href="https://www.facebook.com/sharer/sharer.php?text=Igreja%20IJEMAVI%20-%20Site:%20&u=http://igrejaijemavi.com.br" class="cShareLink cShareLink_facebook" target="_blank" data-role="shareLink" data-ipstooltip="" rel="noopener" _title="Compartilhe este site no Facebook">
      <img  src="img/facebook_3.png" alt="Compartilhe este site no facebook" title="Compartilhe este site no facebook">
    </a>
    <!-- twitter -->
    <a href="http://twitter.com/share?text=Igreja%20IJEMAVI%20-%20Site:%20&amp;url=http://igrejaijemavi.com.br" class="cShareLink cShareLink_twitter" target="_blank" data-role="shareLink" title="Compartilhar Devocional no Twitter" data-ipstooltip="" rel="noopener">
      <img  src="img/twitter.png" alt="Compartilhe este site no Twitter" title="Compartilhe este site no Twitter">
    </a>
    <!-- linkedin -->
    <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http://igrejaijemavi.com.br&amp;title=Igreja IJEMAVI" class="cShareLink cShareLink_linkedin" target="_blank" data-role="shareLink" title="Compartilhe este site no LinkedIn" data-ipstooltip="" rel="noopener">
      <img  src="img/linkedin.png" alt="Compartilhe este site no LinkedIn" title="Compartilhe este site no LinkedIn">
    </a>

    <!-- google + -->
    <a href="https://plus.google.com/share?url=http://igrejaijemavi.com.br" class="cShareLink cShareLink_google" target="_blank" data-role="shareLink" data-ipstooltip="" rel="noopener" _title="Compartilhe este site no Google+">
      <img  src="img/google+.png" alt="Compartilhe este site no Google+" title="Compartilhe este site no Google+">
    </a>
    <!-- pinterest -->
<!--     <a href="http://pinterest.com/pin/create/button/?url=http://igrejaijemavi.com.br&amp;media=http://igrejaijemavi.com.br" class="cShareLink cShareLink_pinterest" target="_blank" data-role="shareLink" data-ipstooltip="" rel="noopener" _title="Share on Pinterest">
      <img  src="img/pinterest.png" alt="Compartilhe este site no Pinterest" title="Compartilhe este site no Pinterest">
    </a> -->
  </div>

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



