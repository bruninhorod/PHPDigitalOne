<?php

include 'db.php';

$id_postagem = $_POST['id_postagem'];
$title = $_POST['title'];
$description = $_POST['description'];
$img_url= $_POST['img_url'];

$query = "UPDATE POSTAGENS SET title='$title', description = '$description', img_url = '$img_url' WHERE id_postagem = $id_postagem ";


mysqli_query($conexao, $query);

header('location:index.php?pagina=postagens');