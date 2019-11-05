<?php 
//Nome das varíaveis
$id = $_GET['id'];
//Adicionando no arquivo CSV
$file = file('../csv/usuario.csv');
unset($file[$id]);

$implode = implode('', $file);
file_put_contents('../csv/usuario.csv', $file);
header('location:../view/tabela.php');

//Redirecionando para o arquivo index.php

 ?>