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
					<th>Funçao</th>
					<th>Excuir</th>
				  	</tr>
				<ul>
					<?php 
						$file =file('../Csv/usuario.csv');
						 foreach ($file as $coluna => $key): 
						$explode = explode(";/;", $file[$coluna]); ?>
					<tr>
						<td><?=$explode[1]  ?></td>
						<td><?= $explode[3]; ?></td>
						<td><?= $explode[4]; ?></td>
						<td><?= $explode[5]; ?></td>
						<td><?= $explode[7]; ?></td>
					
						
						
						<td><a href="../Controller/excluir.php?id=<?=$coluna;?>">Excluir</a></td>
					</tr>
				<?php endforeach;?>
					


				</table>
		</div>
	</div>


</ul>
</body>
</html>
