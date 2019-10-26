<?php 
//Nome das varíaveis
$id = $_GET['id'];
//Adicionando no arquivo CSV
$file = file('../Csv/dadosDul.csv');
unset($file[$id]);

$implode = implode('', $file);
file_put_contents('../Csv/dadosDul.csv', $file);
header('location:../View/CadModali.php');

//Redirecionando para o arquivo index.php

 ?>