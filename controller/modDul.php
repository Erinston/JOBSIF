<?php 
//Nome das varíaveis
$id = 1;
$matricula= $_POST['matricula'];
$modalidade= $_POST['modalidade'];

$file = file('dadosDul.csv');
foreach ($file as $coluna => $key):
	$explode = explode(";/;", $file[$coluna]);
		break;
	$id++;
endforeach;

//Adicionando no arquivo CSV
$fopen = fopen('../csv/dadosDul.csv','a');
fwrite($fopen,
	 $id.';/;'.$matricula.';/;'.$modalidade."\n");
fclose($fopen);
	
//Redirecionando para o arquivo index.php
header("location: ../view/entrou.php");

 ?>
