<?php 

include_once("conexao.php");

$consulta = " SELECT * FROM  funcionario ";

//$consula = 'select f.id, f.nome, f.email, f.telefone d.nome from funcionario f, departamento p where f.depto = d.id;'
//$con = $mysqli -> query($consulta);
$con = mysqli_query($conn, $consulta);


?>
<html>
<head>
	<meta charset="utf-8">
	<title>Listar Funcionario</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<table>
		<table border="1">
		<tr>
			<td>nome</td>
			<td>email</td>
			<td>telefone</td>
			<td>depto</td>
		</tr>
			<?php while ($dado = $con -> fetch_array()){ ?>
		<tr>
			<td><?php echo $dado['nome'] ;?></td>
			<td><?php echo $dado['email'];?></td>
			<td><?php echo $dado['telefone']; ?></td>
			<td><?php echo $dado['depto'];?></td>
		</tr>
		<?php } ?>
	</table> 

	</body>
</html>