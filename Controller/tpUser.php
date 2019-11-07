<?php 
require('conexao.php');
$u = "professor";
$sql = "INSERT INTO tipos_user(NOME) VALUES(:u)";
$query =$conn->prepare($sql);
$query->bindParam(":u",$u);
$query->execute(); 

 ?>