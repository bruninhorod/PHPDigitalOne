<?php

include 'db.php';


$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM USERS WHERE email ='$email' and password = '$password'";

$consulta = mysqli_query($conexao, $query);

if(mysqli_num_rows($consulta) == 1){
	echo 'login feito com sucesso!';
}
else{
	echo 'Usuário, senha, ou email inválido';
}