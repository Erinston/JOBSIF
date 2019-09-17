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
	<title>Document</title>
	<a href="CADASTRO.php"> Cadastro</a>
	<a href="login.php">Login</a>
	<a href="sobre.php">Sobre</a>
	<a href="tabela.php">Cadastrados</a>
<body>
</head>
<link rel="stylesheet" type="text/css" href="../Style/index.css">

	<h1><strong>Jogos internos IFPE</strong></h1>

	<h2>Nosso projeto tem como objetivo facilitar a organização dos Jogos internos IFPE, tanto para o usuário quanto para o administrador.</h2>
	
	<h2>Os usuários que obterem acesso ao nosso site, com a ajuda de um calendário esportivo, teram informações sobre o dia, a data e o local do jogo que deseja jogar. É possível que o usuário se cadastre para competir na modalidade de sua escolha.</h2>

	<h2>O administrador possuira controle sobre todas as operações feitas no site e podera altera todas as movimentações que forem feita .</h2>


</body>
</html>