<?php

$servidor = "localhost";
$usuario = "root";
$senha = "str123";
$db = "postsystem";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

$query = "SELECT * FROM POSTAGENS";
$consulta = mysqli_query($conexao, $query);