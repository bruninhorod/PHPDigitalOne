<?php
#database ---------------------
include 'db.php';
#header -----------------------
include 'header.php';

@$pagina = $_GET['pagina'];

if($pagina == 'postagens'){
	include 'Views/Postagens.php';
}
elseif($pagina == 'about'){
	include 'Views/about.php';
}

elseif($pagina == 'create'){
	include 'Views/create.php';
}
else{
	
	include 'Views/home.php';
}

# footer -------------------
include 'footer.php';