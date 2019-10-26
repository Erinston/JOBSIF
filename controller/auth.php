<?php 
//Nome das varíaveis
$c = 0;
$nome= $_POST['usuario'];
$pw= $_POST['pw'];
		
if ($c > 0) {
	session_start();
	$_SESSION['id'] = $v[0];
	$_SESSION['nome'] = $v[1];
header("location:../view/entrou.php");

}else{
header("location:../view/login.php");

}
 ?>
 starta a sessao
 if  isset()

	
//Redirecionando para o arquivo index.php
