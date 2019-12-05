<?php
session_start();
//verif se existe usuario logado 
if (!isset($_SESSION['id'])&& !isset($_SESSION['nome'])) {
	header("location:../View/index.php");

}
include 'header.php'; 

 ?>
<br><br>
<div class="container ">
	<div class="container ">
	
			
			<center>
				<h1>Usuarios Cadastrados</h1>
			</center>
			<table style=" border: 5px solid black;">
					<tr>
					<th>Nome</th>
					<th>matricula</th>
					<th>Telefone</th>
					<th>usuario</th>
					<th>Excuir</th>
				  	</tr>
			<?php
require_once('../Controller/conexao.php'); 


$sql2= "SELECT * FROM usuarios";
$queryOne = $conn ->prepare($sql2);
$queryOne -> execute();
$usuarios = $queryOne-> fetchALL();




	
	foreach ($usuarios as $usuario):
		if ($usuario[1] == $usuario[1]):
?>
	<tr>
		<td>
			<?=$usuario['NOME'];?>
		</td><td>
			<?=$usuario['MATRICULA'];?>
		</td><td>
			<?=$usuario['TELEFONE'];?>
		</td><td>
			<?=$usuario['USUARIO'];?>
		</td>
	<td>
            <a href="../Controller/excluir.php?id=<?=$usuario[0];?>">X</a>
    </td>
	<?php 
			endif;
		endforeach;
	?>
	</tr>
</table>


</ul>
</body>
</html>
