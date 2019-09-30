<?php  
//verif se existe usuario logado 
session_start();
if (isset($_SESSION['id'])&& isset($_SESSION['nome'])) {
	header("location:../View/entrou.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>	</title>
</head>
	<link rel="stylesheet" type="text/css" href="../Style/cadastro.css">
	<button>
		
	<a href="index.php">Pagina inicial</a>
	</button>
<body>
	<h1>Cadastro</h1>

	</form>
	<form action="../Controller/adicionar.php" method="post">
	
		<label>NOME:</label>
		<input type="text" name="nome" placeholder="EX:João"><br><br>
		<label>CPF:</label>
		<input type="number" name="cpf" placeholder="Ex:1059865-75"><br><br>
		<label>MATRICULA:</label>
		<input type="text" name="matricula" placeholder="Ex:20191brasil0805"><br><br>
		<label>TELEFONE:</label>
		<input type="phone" name="telefone" placeholder="ex:98888-8888"><br><br>
		<label>USUARIO:</label>
		<input type="text" name="usuario" placeholder="EX:docente/aluno/sevirdor"><br><br> 
		<label>SENHA:</label>
		<input type="password" name="pw" placeholder="*******"><br><br>		
		<input type="submit" value="Enviar">

		
	</form><br><br>

	

			

</ul>
</body>
</html>