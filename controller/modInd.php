<?php 
//Nome das varíaveis
$id = 1;
$modalidade= $_POST['modalidade'];

$file = file('dadosInd.csv');
foreach ($file as $coluna => $key):
	$explode = explode(";/;", $file[$coluna]);
		break;
	$id++;
endforeach;

//Adicionando no arquivo CSV
$fopen = fopen('../Csv/dadosInd.csv','a');
fwrite($fopen,
	 $id.';/;'
	.$modalidade
	."\n");
fclose($fopen);
	
//Redirecionando para o arquivo index.php
header("location: ../View/entrou.php");

 ?>
