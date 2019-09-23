<?php  
session_start();
//verif se existe usuario logado 
if (!isset($_SESSION['id'])&& !isset($_SESSION['nome'])) {
	header("location:../View/index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<style type="text/css">
		body{

			background-image:"../nature.jpg";
			text-align:center;
		}


	</style>
	<title>Document</title>
</head>
<body>
	<h1>Seja bem vindo</h1>
	<form action="">
		<label>Modalidade:</label>
		<input type="text" name="Modalidade" placeholder="ex:futebol">
		<br><br>
		<label>Modalidade:</label>
		<input type="text" name="" placeholder="">


	</form>
		<a href="tabela.php"> Cadastrados</a>
		<br><br>
	<button>
		<a href="../Controller/logout.php">sair</a>
	</button>
</body>
</html>