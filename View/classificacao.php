<?php
	session_start();
	//verif se existe usuario logado 
	if (!isset($_SESSION['id'])&& !isset($_SESSION['nome'])) {
			header("location:../View/index.php");
	}
	include 'header.php'; 

 require_once('../Controller/conexao.php'); 
 ?>
 <div class="container ">
	<div class="container ">
			<center>
				<h1>CLASSIFICAÇÃO</h1>
			</center>
			<table style=" border: 5px solid black;">
					<tr>
					<th>PONTOS</th>
					<th>NOME</th>
					<th>eliminar</th>
					</tr>
<?php 


$sql2= "SELECT * FROM `TIMES` " ;
$queryOne = $conn ->prepare($sql2);
$queryOne -> execute();
$TIMES = $queryOne-> fetchALL();

foreach ($TIMES as $TIME):
		if ($TIME[1] == $TIME[1]):

?>
<tr>
		<td>
			<?=$TIME['PONTOS'];?>
		</td>
		<td>
			<?=$TIME['NOME'];?>
		</td>
		<?php if ($_SESSION['tipoUser'] == 1): ?>
		<td>
            <a href="../Controller/excluir.php?id=<?=$TIMES[0];?>">X</a>
    	</td>
			<?php endif;?>
	
	</div>

	</div>

	<?php 
			endif;
		endforeach;
	?>
	</tr>
</table>