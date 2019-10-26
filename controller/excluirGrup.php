<?php 
//Nome das varíaveis
$id = $_GET['id'];
//Adicionando no arquivo CSV
$file = file('../Csv/dadosGrup.csv');
unset($file[$id]);

$implode = implode('', $file);
file_put_contents('../Csv/dadosGrup.csv', $file);
header('location:../View/CadModali.php');

//Redirecionando para o arquivo index.php

 ?>