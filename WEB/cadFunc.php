<?php 
session_start();
include('conexao.php');
?>
<!DOCTYPE html>
<html lang = "pt-br">
	<head>
		<meta charset = "utf-8">
		<title> CRUD - Cadastar</title>

	</head>
	<body>
		<h1>Cadastar Funcionario </h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method ="POST" action = "processa.php">

			<label> Name: </label>
			<input type="text" name ="nome" placeholder = "Digite o nome e aplido"> <br><br>

			<label> E-mail: </label>
			<input type= "email" name ="email" placeholder = "Digite o seu e-mail"> <br><br>

			<label> Telefone: </label>
			<input type="tel" name ="telefone" placeholder = "Digite o seu numero"> <br><br>


			<label> Departamento:</label>
				<select name="categoria" id= "id">
					<option value ="">Escolha o Departamento</options>
						<?php
							$resultado =" SELECT  categoria FROM departamento ORDER BY categoria";
							$num = mysqli_query($conn, $resultado);
							while($dados = $num -> fetch_array()) { ?>
								
								<option value=<?php echo $dados['categoria'];?>> 
									
									<?php echo $dados['categoria']; ?>
								
								</option>
							<?php } ?>
				</select><br><br>
			<input type = "submit" value="Cadastrar">
		</form>
	<body>
</html>