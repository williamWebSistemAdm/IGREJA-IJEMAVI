<?php
$id_banner = $_GET['id'];

	
echo " 
<script>
		var resposta = confirm('Tem certeza que deseja APAGAR o banner?');
		if(resposta)
		{
			  window.location.href='proc_apagar_banner.php?id=".$id_banner."'; 
			
		} else {
			 window.location.href='administrativo.php?link=10'; 
			
		}
	</script>
";
?>

	 