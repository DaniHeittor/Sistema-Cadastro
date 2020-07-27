<?php 

include_once("conexao.php");

//$consulta = " SELECT * FROM  funcionario where depto ='Associados'";

$consulta = " SELECT funcionario.id,funcionario.nome,funcionario.email,funcionario.telefone,funcionario.depto FROM  funcionario CROSS JOIN departamento ON funcionario.depto = departamento.categoria where funcionario.depto ='Associados'";
$con = mysqli_query($conn, $consulta);


?>
<html>
<head>
	<meta charset="utf-8">
	<title>Listar Funcionario</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<h1>Lista de Associações</h1>
	<br>
	<table border="1">
		<tr>
			<td>id</td>
			<td>nome</td>
			<td>email</td>
			<td>telefone</td>
			<td>depto</td>
		</tr>
			<?php while ($dado = $con -> fetch_array()){ ?>
		<tr>
			<td><?php echo $dado['id'] ;?></td>
			<td><?php echo $dado['nome'] ;?></td>
			<td><?php echo $dado['email'];?></td>
			<td><?php echo $dado['telefone']; ?></td>
			<td><?php echo $dado['depto'];?></td>
		</tr>
		<?php } ?>
	</table> 

	</body>
</html>