<?php
#database ---------------------
include 'db.php';
#header -----------------------
include 'header.php';

@$pagina = $_GET['pagina'];
switch ($pagina) {
	case 'postagens': include 'Views/Postagens.php'; break;
	case 'about': include 'Views/about.php'; break;
	case 'inserir_postagem': include 'Views/inserir_postagem.php'; break;
	case 'create': include 'Views/create.php'; break;
	case 'home': include 'Views/home.php'; break;
	case 'editar' : include 'Views/edita_aluno.php'; break;
	default : include 'Views/home.php'; break;	
}

/*
if($pagina == 'postagens'){
	include 'Views/Postagens.php';
}
elseif($pagina == 'about'){
	include 'Views/about.php';
}

elseif($pagina == 'inserir_postagem'){
	include 'Views/inserir_postagem.php';
}

elseif($pagina == 'create'){
	include 'Views/create.php';
}
else{
	
	include 'Views/home.php';
}
*/

# footer -------------------
include 'footer.php';