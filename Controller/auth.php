<?php 
//Nome das varíaveis
$c = 0;
$nome= $_POST['usuario'];
$pw= $_POST['pw'];

$file = file('../Csv/usuario.csv'); 
foreach ($file as $coluna => $key):
	$explode = explode(";/;", $file[$coluna]);
	if ($nome == $explode[5] && $pw == $explode[6]):
		$v =$explode;
		$c++;
	endif;
endforeach;
		
if ($c > 0) {
	session_start();
	$_SESSION['id'] = $v[0];
	$_SESSION['nome'] = $v[1];
header("location:../View/entrou.php");

}else{
header("location:../View/login.php");

}
 ?>
 starta a sessao
 if  isset()

	
//Redirecionando para o arquivo index.php
