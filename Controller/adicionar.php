<?php
session_start();
//Nome das varíaveis
require_once('conexao.php');

$MATRICULA= $_POST["matricula"];
$NOME= $_POST["nome"];
$TELEFONE= $_POST["telefone"];
$USUARIO= $_POST["usuario"];
$SENHA= $_POST["senha"];
$TIPOS_USER = $_POST["tipoUser"];

$sql2 = "INSERT INTO USUARIOS(MATRICULA,NOME,TELEFONE,USUARIO,SENHA,TIPOS_USER) VALUES(:matricula,:nome,:telefone,:usuario,:senha,:tipoUser)";
$query2 =$conn->prepare($sql2);
$query2->bindValue(":matricula",$MATRICULA);
$query2->bindValue(":nome",$NOME);
$query2->bindValue(":telefone",$TELEFONE);
$query2->bindValue(":usuario",$USUARIO);
$query2->bindValue(":senha",$SENHA);
$query2->bindValue(":tipoUser",$TIPOS_USER);
$query2->execute();


header('location:../View/login.php');

  ?>

