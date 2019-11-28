<?php 
//usuario das varíaveis
$c = 0;
$usuario= $_POST['usuario'];
$senha= $_POST['senha'];

  if(isset($_POST['senha'])){
  $valor = "202cb962ac59075b964b07152d234b70";
  $senha = md5($_POST['senha']);
  if($valor == $senha)
    echo "Sim são os mesmos valores.";
  else
    echo "Não são os mesmos valores.";
}
require_once('../Controller/conexao.php');
$sql = 'SELECT * from USUARIOS where usuario=? and senha=?';
$queryOne=$conn->prepare($sql);
$queryOne->bindParam(1,$usuario);
$queryOne->bindParam(2,$senha);
$queryOne->execute();

$stmt = $queryOne->fetchAll();

if($queryOne->rowCount() >= 1 ):
	session_start();
	$_SESSION['usuario'] = $usuario;
	$_SESSION['id'] = $stmt[0]['MATRICULA'];
  $_SESSION['tipoUser'] = $stmt[0]['TIPOS_USER'];
	header('location:../View/index.php');

else: ?>
<?php 
	header('location:../View/login.php');
endif;
?>