<?php 

include_once("conexao.php");

$consulta = " SELECT * FROM  jogadores" ;

$con = mysqli_query($conn, $consulta);


?>
<html>
<head>
	<meta charset="utf-8">
	<title>Listar Funcionario</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<h1>Lista Jogadores </h1>
	<br>
	<table border="1">
		<tr>
			<td>id</td>
			<td>nome jogador</td>
			<td>data nascimento</td>
			<td>equipa</td>
			<td>sexo</td>
		</tr>
			<?php while ($dado = $con -> fetch_array()){ ?>
		<tr>
			<td><?php echo $dado['id'] ;?></td>
			<td><?php echo $dado['nomejog'] ;?></td>
			<td><?php echo $dado['dtnasc'];?></td>
			<td><?php echo $dado['equipa']; ?></td>
			<td><?php echo $dado['sexo'];?></td>
		</tr>
		<?php } ?>
	</table> 

	</body>
</html>