<?php 
//Nome das varíaveis
$id = $_GET['id'];
//Adicionando no arquivo CSV
$file = file('../Csv/usuario.csv');
unset($file[$id]);

$implode = implode('', $file);
file_put_contents('../Csv/usuario.csv', $file);
header('location:../View/tabela.php');

//Redirecionando para o arquivo index.php

 ?>