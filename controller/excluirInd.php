<?php 
//Nome das varíaveis
$id = $_GET['id'];
//Adicionando no arquivo CSV
$file = file('../csv/dadosInd.csv');
unset($file[$id]);

$implode = implode('', $file);
file_put_contents('../csv/dadosInd.csv', $file);
header('location:../view/CadModali.php');

//Redirecionando para o arquivo index.php

 ?>