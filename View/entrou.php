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
	<title>Document</title>
</head>
<body>
	<h1> Seja bem vindo</h1>
	<button>
		<a href="../Controller/logout.php">sair</a>
	</button>
</body>
</html>