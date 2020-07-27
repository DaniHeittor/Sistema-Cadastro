<?php 
session_start();
?>
<!DOCTYPE html>
<html lang = "pt-br">
	<head>
		<meta charset = "utf-8">
		<title> Register Pagamento</title>

	</head>
	<body>
		<h1>Cadastar Jogador</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method ="POST" action = "processa2.php">

			<label> Nome Jogador: </label>
			<input type="text" name ="nome" placeholder = "Digite o nome e aplido"> <br><br>

			<label> Data Nascimento: </label>
			<input type= "date" name ="data" placeholder = "Digite a Data de nascimento "> <br><br>

			<label>Equipa: </label>
			<input type="te" name ="equipa" placeholder = "Digite o nome da Equipa"> <br><br>
			
			<label>Sexo: </label>
			<input type="sexo" name ="sexo" placeholder = "Digite o sexo(M/F)"> <br><br>



			<input type = "submit" value="Cadastar">
		</form>
	<body>
</html>