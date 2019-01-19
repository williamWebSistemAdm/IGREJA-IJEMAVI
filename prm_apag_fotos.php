<?php
$id_foto = $_GET['id_galeria'];

echo "<script>
		var resposta = confirm('Tem certeza que deseja APAGAR a Foto?');
		if(resposta)
		{
			location.href='proc_apagar_foto_gal.php?id_galeria="?><?php echo $id_foto; ?><?php"';
		} else {
			location.href='administrativo.php?link=13';
		}
	</script>";

	 ?>
