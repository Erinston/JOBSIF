<?php 
//Nome das varíaveis
$id = 1;
$nome= $_POST['nome'];
$cpf= $_POST['cpf'];
$matricula= $_POST['matricula'];
$telefone= $_POST['telefone'];
$usuario= $_POST['usuario'];
$pw= $_POST['pw'];
$funcao= 'usuario';
//Redirecionando para o arquivo index.php
header("location: ../View/login.php");

 ?>
