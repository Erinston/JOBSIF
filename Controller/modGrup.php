<?php 
//Nome das varíaveis
$id = 1;
$NomeEquipe= $_POST['NomeEquipe'];
$matricula1= $_POST['matricula1'];
$matricula2= $_POST['matricula2'];
$matricula3= $_POST['matricula3'];
$matricula4= $_POST['matricula4'];
$cpf= $_POST['dupla'];
$modalidade= $_POST['modalidade'];

$file = file('dadosGrup.csv');
foreach ($file as $coluna => $key):
	$explode = explode(";/;", $file[$coluna]);
		break;
	$id++;
endforeach;

//Adicionando no arquivo CSV
$fopen = fopen('../Csv/dadosGrup.csv','a');
fwrite($fopen,
	 $id.';/;'
	.$NomeEquipe.';/;'
	.$matricula1.';/;'
	.$matricula2.';/;'
	.$matricula3.';/;'
	.$matricula4.';/;'
	.$modalidade.';/;'
	."\n");
fclose($fopen);
	
//Redirecionando para o arquivo index.php
header("location: ../View/entrou.php");

 ?>
