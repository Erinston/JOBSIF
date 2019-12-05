<?php
session_start();
//Nome das varíaveis
require_once('conexao.php');

$idTime = intval($_GET['time']);
$timeId = $idTime;

// Selecionar todos os times do usuário -->
$sql1 = 'SELECT * from `times` where id = :id'; 
$queryOne = $conn->prepare($sql1); 
$queryOne->bindParam(':id', $timeId); 
$time = $queryOne->fetchAll(); 
var_dump($time);
// $pontos = $time[0];
// $pontos = $time[1]+1;

// $sql2 = "UPDATE `times` SET pontos= :pontos where id = :id";
// $queryThree->execute(); $queryThree = $conn->prepare($sql2); 
// $queryThree->bindValue(':pontos', $pontos ); 
// $queryThree->bindValue(':id', $id); 
// $queryThree->execute(); 



