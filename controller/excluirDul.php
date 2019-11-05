<?php 
//Nome das varíaveis
$id = $_GET['id'];
//Adicionando no arquivo CSV
$file = file('../csv/dadosDul.csv');
unset($file[$id]);

$implode = implode('', $file);
file_put_contents('../csv/dadosDul.csv', $file);
header('location:../view/CadModali.php');

//Redirecionando para o arquivo index.php

 ?>