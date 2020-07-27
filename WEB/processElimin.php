<?php 
session_start();

include_once("conexao.php");
$id= filter_input(INPUT_GET, 'id',FILTER_SANITIZE_NUMBER_INT);

$result_usuario = " DELETE FROM funcionario WHERE id='$id' ";

$con = mysqli_query($conn, $result_usuario);
if (mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style= 'color:green;'>Funcionario Apagdo com sucesso</p>";
	header("Location:elimFunc.php");

}else{
	$_SESSION['msg'] = "<p style= 'color:red;'>Funcionario nao foi Apagado com sucesso</p>";
	header("Location:elimFunc.php");
}
