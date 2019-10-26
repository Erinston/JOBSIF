<?php 
//Nome das varíaveis
$id = $_GET['id'];
//Adicionando no arquivo CSV
$file = file('../Csv/dadosInd.csv');
unset($file[$id]);

$implode = implode('', $file);
file_put_contents('../Csv/dadosInd.csv', $file);
header('location:../View/CadModali.php');

//Redirecionando para o arquivo index.php

 ?>