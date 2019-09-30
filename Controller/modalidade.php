<?php 
//Nome das varíaveis
$id = 1;
$fultebol= $_POST['futebol'];
$cpf= $_POST['dupla'];
$modalidade= $_POST['matricula'];

$file = file('dados.csv');
foreach ($file as $coluna => $key):
	$explode = explode(";/;", $file[$coluna]);
		break;
	$id++;
endforeach;

//Adicionando no arquivo CSV
$fopen = fopen('../Csv/dados.csv','a');
fwrite($fopen,
	 $id.';/;'
	.$fultebol.';/;'
	.$cpf.';/;'
	."\n");
fclose($fopen);
	
//Redirecionando para o arquivo index.php
header("location: ../View/entrou.php");

 ?>
