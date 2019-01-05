<?php

// INSERIR oinclude 'permissoes.php'; DENTRO DA AREA DE USUÁRIO COMUM

// CRIAR TABELA PERMISSOES NO BANCO COM CAMPO PERMITIDO COM ID PRÉ-DEFEINIDO (ID 1=CADASTRAR_USUARIO, ID 2=DESATIVAR_USUARIO, ID 3=EDITAR_USUARIO, ID 4=ADICIONAR_BANNER,, ID 2=DESATIVAR_BANNER, ID 3=EDITAR_BANNER, ID 4=ADICIONAR_DEVOCIONAL, ID 2=DESATIVAR_DEVOCIONAL, ID 3=EDITAR_DEVOCIONAL, ID 4=ADICIONAR_FOTO_GAL, ID 2=DESATIVAR_FOTO_GAL, ID 3=EDITAR_FOTO_GAL, ID 4=ADICIONAR_DIACULTO, ID 2=APAGAR_DIACULTO, ID 3=EDITAR_DIACULTO, ID 4=ADICIONAR_ENDEREÇO, ID 3=EDITAR_ENDERECO  )
// cria o codigo para fazer a seleçao da tabela PERMISSOES
if ($_SESSION['permitido'] == 'cadastrar_usuario') {
	$_SESSION['cadastrar_usuario'] = include 'cadastrar_usuario.php';
}
elseif ($_SESSION['permitido'] == 'editar_usuario') {
	$_SESSION['editar_usuario'] = include 'editar_usuario.php';
}
elseif ($_SESSION['permitido'] == 'desativar_usuario') {
	$_SESSION['desativar_usuario'] = include 'desativar_usuario.php';
}
elseif ($_SESSION['permitido'] == 'desativar_usuario') {
	$_SESSION['desativar_usuario'] = include 'desativar_usuario.php';
}
elseif ($_SESSION['permitido'] == 'desativar_usuario') {
	$_SESSION['desativar_usuario'] = include 'desativar_usuario.php';
}
elseif ($_SESSION['permitido'] == 'desativar_usuario') {
	$_SESSION['desativar_usuario'] = include 'desativar_usuario.php';
}
endif;
// etc, etc...


?>
