
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
<a href="index.php">Pagina inicial</a>
<body>
	<h1>Login</h1>
	<form action="../Controller/auth.php" method="post">
		<label>Usuario</label>
		<input type="text" name="usuario"><br><br>
		<label>Senha:</label>
		<input type="password" name="pw"><br>
		<input type="submit" value="entrar">
	</form>
	<button><a href="cadastro.php"> Cadastre-se</a></button>

</body>
</html>