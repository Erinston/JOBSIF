
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
	<title>Login</title><link rel="stylesheet" type="text/css" href="../Style/cadastro.css">
</head>
<button>
	
<a href="index.php">Pagina inicial</a>
</button> 
<body>
	<h1>Login</h1>
	<form action="../Controller/auth.php" method="post">
		<label>Usuario</label>
		<input type="text" name="usuario"><br><br>
		<label>Senha:</label>
		<input type="password" name="pw"><br>
		<input type="submit" value="entrar">
	</form><br><br>

	<button><a href="cadastro.php"> Cadastre-se</a></button>



	<br><br><br><br><br><br><br>

</body>
</html>