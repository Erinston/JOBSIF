<?php 
//Nome das varíaveis
$id = 1;
$nome= $_POST['nome'];
$cpf= $_POST['cpf'];
$matricula= $_POST['matricula'];
$telefone= $_POST['telefone'];
$usuario= $_POST['usuario'];
$pw= $_POST['pw'];
$funcao= 'usuario';

$file = file('usuario.csv');
foreach ($file as $coluna => $key):
	$explode = explode(";/;", $file[$coluna]);
	if ($cpf == $explode[2]):
		header("location: ../View/cadastro.php");
		break;
	endif;
	$id++;
endforeach;

//Adicionando no arquivo CSV
$fopen = fopen('../Csv/usuario.csv','a');
fwrite($fopen,
	 $id.';/;'
	.$nome.';/;'
	.$cpf.';/;'
	.$matricula.';/;'
	.$telefone.';/;'
	.$usuario.';/;'
	.$pw.';/;'
	.$funcao."\n");
fclose($fopen);
	
//Redirecionando para o arquivo index.php
header("location: ../View/cadastro.php");

 ?>
