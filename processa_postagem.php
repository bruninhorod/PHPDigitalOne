<?php

include 'db.php';
$title = $_POST['title'];
$description = $_POST['description'];
$img_url = $_POST['img_url'];

$query = "INSERT INTO POSTAGENS(title, description, img_url) VALUES('$title', '$description', '$img_url')";

mysqli_query($conexao, $query);
