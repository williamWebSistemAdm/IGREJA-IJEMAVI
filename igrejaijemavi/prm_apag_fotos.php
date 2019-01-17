<?php
$id_foto = $_GET['id_galeria'];


echo " 
<script>
		var resposta = confirm('Tem certeza que deseja APAGAR a Foto?');
		if(resposta)
		{
			  window.location.href='proc_apagar_foto_gal.php?id_galeria=".$id_foto."'; 
			
		} else {
			 window.location.href='administrativo.php?link=13'; 
			
		}
	</script>
";
?>