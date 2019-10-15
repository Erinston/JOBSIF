<?php
include'header.php'; 

 ?>
<br><br>
<div class="container ">
	<div class="container ">
	
			
			
				<table>
					<legend>Usuarios Cadastrados</legend>
					<tr>
					<th>Nome</th>
					<th>CPF</th>
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
						<td><?= $explode[2]; ?></td>
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
