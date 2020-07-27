<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$data = filter_input(INPUT_POST, 'data', FILTER_SANITIZE_STRING);
$equipa = filter_input(INPUT_POST, 'equipa', FILTER_SANITIZE_STRING);
$sexo = filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_STRING);

//echo "Nome: $nome <br>";
//echo "Data: $data <br>";
//echo "Equipa: $equipa <br>";
//echo "Sexo: $sexo <br>";

$result_jogador="INSERT INTO jogadores (nomejog,dtnasc,equipa,sexo) VALUES ('$nome','$data','$equipa','$sexo')";
$resultado_jodador=mysqli_query($conn, $result_jogador);


if (mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style= 'color:green;'>Jodador cadastrado com sucesso</p>";
	header("Location:cadJog.php");

}else{
	$_SESSION['msg'] = "<p style= 'color:red;'>Jodador nao foi cadastrado com sucesso</p>";
	header("Location:cadJog.php");

}





