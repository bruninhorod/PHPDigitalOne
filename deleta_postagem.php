<?php

include 'db.php';

$id_postagem = $_GET['id_postagem'];

$query = "DELETE FROM POSTAGENS WHERE ID_POSTAGEM = $id_postagem";

mysqli_query($conexao, $query);

header('location:index.php?pagina=postagens');