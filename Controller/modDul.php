<?php 
//Nome das varíaveis
$id = 1;
$matricula= $_POST['matricula'];
$cpf1= $_POST['cpf1'];
$cpf2= $_POST['cpf2'];
$modalidade= $_POST['modalidade'];

$file = file('dadosDul.csv');
foreach ($file as $coluna => $key):
	$explode = explode(";/;", $file[$coluna]);
		break;
	$id++;
endforeach;

//Adicionando no arquivo CSV
$fopen = fopen('../Csv/dadosDul.csv','a');
fwrite($fopen,
	 $id.';/;'.$matricula.';/;'.$modalidade."\n");
fclose($fopen);
	
//Redirecionando para o arquivo index.php
header("location: ../View/entrou.php");

 ?>
