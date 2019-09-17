
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
	<title>Login</title>
</head>
<a href="index.php">Pagina inicial</a>
<body>
	<h1>Login</h1>
	<form action="../Controller/auth.php" method="post">
		<label>Usuario</label>
		<input type="text" name="usuario">
		<label>Senha:</label>
		<input type="password" name="pw">
		<input type="submit" value="entrar">
	</form>
	<button><a href="cadastro.php"> Cadastre-se</a></button>

</body>
</html>