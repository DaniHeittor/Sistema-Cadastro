<?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
$result_jogador = "SELECT * FROM jogadores WHERE id = '$id'";
$resultado_usuario = mysqli_query($conn, $result_jogador);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>

<!DOCTYPE html>
<html lang = "pt-br">
	<head>
		<meta charset = "utf-8">
		<title> CRUD - Cadastar</title>

	</head>
	<body>
		<h1>Altetar Jogador</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>


		<form action="editjog.php" method="GET">
			<label>Jogador:</label>
				<select name="id" id= "id">
					<option value ="">Escolha o jogador</options>
						<?php
							$resultado =" SELECT  id FROM jogadores";
							$num = mysqli_query($conn, $resultado);
							while($dados = $num -> fetch_array()) { ?>
								
								<option value=<?php echo $dados['id'];?>> 
									
									<?php echo $dados['id']; ?>
								
								</option>
							<?php } ?>
				</select>
				<input type="submit" name="Enviar">
		</form><br>


		


		<form method ="POST" action = "procEditJog.php">
			<input type ="hidden"name = "id" value="<?php echo $row_usuario['id']; ?>">

			<label> Nome Jogador: </label>
			<input type="text" name="nome" placeholder="Digite o nome completo" value="<?php echo $row_usuario['nomejog']; ?>"><br><br>

			<label> Data Nascimento: </label>
			<input type= "date" name ="data" placeholder = "Digite a Data de nascimento " value="<?php echo $row_usuario['dtnasc']; ?>"> <br><br>

			<label>Equipa: </label>
			<input type="texte" name ="equipa" placeholder = "Digite o nome da Equipa"value="<?php echo $row_usuario['equipa']; ?>"> <br><br>
			
			<label>Sexo: </label>
			<input type="texte" name ="sexo" placeholder = "Digite o sexo(M/F)"value="<?php echo $row_usuario['sexo']; ?>"> <br><br>



			<input type = "submit" value="Alterar">
		</form>
	<body>
</html>