<?php
	
	include 'conexao.inc.php';//conexao com o banco
?>
	<br><div class="container">
	  <div id="footer" class="row">
		<div class="col-12">
			<?php
			 //mensagem de Boas Vindas
			    if ($_SESSION['tipocargo_obr'] == 1){
			        echo "USUÁRIO: Administrador Padrão!" ;
			    }elseif($_SESSION['tipocargo_obr'] == 2){
			        echo "USUÁRIO: Pastor Presidente!";
			    }else {
			      echo "USUÁRIO: ". $nome_obr ." ". $sobrenome_obr;
			    }
			?>
		  </div>
		</div>
	</div> <br>