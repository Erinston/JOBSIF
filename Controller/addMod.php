<?php 
session_start();
require_once('conexao.php');

$pontos= intval($_POST['pontos']);
$nome= $_POST['nome'];
$usuario=$_POST['usuario'];
$modalidade=intval($_POST['modalidade']);

$sql3 ="INSERT INTO `times` (`PONTOS`, `NOME`, `MOD_ID`, `USU_ID`) VALUES (:pontos,:nome,:modalidade,:usuario)";
$query2 =$conn->prepare($sql3);
$query2->bindParam(':pontos',$pontos);
$query2->bindParam(':nome',$nome);
$query2->bindParam(':modalidade',$modalidade);
$query2->bindParam(':usuario',$usuario);
$query2->execute();
//Redirecionando para o arquivo index.php
header('location:../View/entrou.php');


 ?>
