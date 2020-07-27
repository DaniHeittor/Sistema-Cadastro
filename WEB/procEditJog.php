<?php
session_start();
include_once("conexao.php");

$id = filter_input(INPUT_POST, 'id' , FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$data = filter_input(INPUT_POST, 'data', FILTER_SANITIZE_STRING);
$equipa = filter_input(INPUT_POST, 'equipa', FILTER_SANITIZE_STRING);
$sexo = filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_STRING);

//echo "Nome: $nome <br>";
//echo "Data: $data <br>";
//echo "Equipa: $equipa <br>";
//echo "Sexo: $sexo <br>";

$result_usuario = "UPDATE jogadores SET nomejog ='$nome', dtnasc='$data', equipa='$equipa', sexo ='$sexo' WHERE id = '$id'";

$resultado_usuario = mysqli_query($conn, $result_usuario);


if ($resultado_usuario){
	$_SESSION['msg'] = "<p style= 'color:green;'>Pagamento cadastrado com sucesso</p>";
	header("Location:editJog.php");

}else{
	$_SESSION['msg'] = "<p style= 'color:red;'>Pagamento nao foi cadastrado com sucesso</p>";
	header("Location:editJog.php?id=$id");

}

