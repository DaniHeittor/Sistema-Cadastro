<?php
session_start();
include_once("conexao.php");

$nome=filter_input(INPUT_POST, 'nome',FILTER_SANITIZE_STRING);
$email=filter_input(INPUT_POST, 'email',FILTER_SANITIZE_STRING);
$telefone=filter_input(INPUT_POST, 'telefone',FILTER_SANITIZE_NUMBER_INT);
$categoria = filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_STRING);

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";
//echo "Telefone: $telefone <br>";
//echo "Categiria: $categoria<br>";

$resultado =" INSERT INTO funcionario (nome, email, telefone, depto) VALUES ('$nome', '$email', '$telefone','$categoria')";
$dados= mysqli_query($conn,$resultado);


if (mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style= 'color:green;'>Funcionario cadastrado com sucesso</p>";
	header("Location:cadFunc.php");

}else{
	$_SESSION['msg'] = "<p style= 'color:red;'>Funcionario nao foi cadastrado com sucesso</p>";
	header("Location:cadFunc.php");

}