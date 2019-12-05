<?php 
//usuario das varíaveis
$c = 0;
$usuario= $_POST['usuario'];
$senha= $_POST['senha'];

  if(isset($_POST['senha'])){
}
require_once('conexao.php');
$sql = 'SELECT * from USUARIOS where usuario=? and senha=?';
$queryOne=$conn->prepare($sql);
$queryOne->bindParam(1,$usuario);
$queryOne->bindParam(2,$senha);
$queryOne->execute();
 /*session dentro (if) para verificar */
$stmt = $queryOne->fetchAll();

if($queryOne->rowCount() >= 1 ):
	session_start();
	$_SESSION['usuario'] = $usuario;
	$_SESSION['id'] = $stmt[0]['MATRICULA'];
  $_SESSION['tipoUser'] = $stmt[0]['TIPOS_USER'];
	header('location:../View/index.php');

else:
 ?>

<?php 
	header('location:../View/login.php');
endif;
?>