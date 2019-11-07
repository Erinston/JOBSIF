<?php 
//usuario das varíaveis
$c = 0;
$usuario= $_POST['usuario'];
$senha= $_POST['senha'];


require_once('../Controller/conexao.php');
$sql = 'SELECT * from usuarios where usuario=? and senha=?';
$queryOne=$conn->prepare($sql);
$queryOne->bindParam(1,$usuario);
$queryOne->bindParam(2,$senha);
$queryOne->execute();

$stmt = $queryOne->fetchAll();

if($queryOne->rowCount() >= 1 ):
	session_start();
	$_SESSION['usuario'] = $usuario;
	$_SESSION['id'] = $stmt[0]['MATRICULA'];
	header('location:../View/index.php');
else: ?>
	
<?php 
endif;
?>







<!-- 





$file = file('../Csv/usuario.csv'); 
foreach ($file as $coluna => $key):
	$explode = explode(";/;", $file[$coluna]);
	if ($usuario == $explode[5] && $pw == $explode[6]):
		$v =$explode;
		$c++;
	endif;
endforeach;
		
if ($c > 0) {
	session_start();
	$_SESSION['id'] = $v[0];
	$_SESSION['usuario'] = $v[1];
header("location:../View/entrou.php");

}else{
header("location:../View/login.php");

}

 ?>
 starta a sessao
 if  isset()

	
//Redirecionando para o arquivo index.php -->
