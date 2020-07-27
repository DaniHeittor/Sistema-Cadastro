<?php 

include_once("conexao.php");

$consulta = " SELECT * FROM  funcionario ";


$con = mysqli_query($conn, $consulta);


?>
<html>
<head>
	<meta charset="utf-8">
	<title>Listar Funcionario</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<h1>Lista de Funcionarios</h1>
	<br>
	<br>
	<table border="1">
		<tr>
			<td>id</td>
			<td>nome</td>
			<td>email</td>
			<td>telefone</td>
			<td>depto</td>
			<td>Apagar</td>
		</tr>
			<?php while ($dado = $con -> fetch_array()){ ?>
		<tr>
			<td><?php echo $dado['id'] ;?></td>
			<td><?php echo $dado['nome'] ;?></td>
			<td><?php echo $dado['email'];?></td>
			<td><?php echo $dado['telefone']; ?></td>
			<td><?php echo $dado['depto'];?></td>
			<td><?php echo "<a href ='processElimin.php?id=".$dado['id']."'>Apagar</a>";?></td>
		</tr>
		<?php } ?>
	</table> 

	</body>
</html>