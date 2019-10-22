<?php 
define(SERVER, 'localhost');
define(BANCO, 'cadastro');
define(SENHA, '');
define(USER, 'root');

try {
	
$conn = new pdo('mysql:host=' . SERVER . 'dbname=' .BANCO, USER, SENHA);
$conn = new pdo('mysql:host=' . SERVER . 'dbname=' .BANCO, USER, SENHA);
} catch (PDOException $e) {
	 echo "Erro gerado" . $e ->getMessage();
}
?>