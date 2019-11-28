<?php  
//verif se existe usuario logado 

session_start();
//verif se existe usuario logado 
if (!isset($_SESSION['id'])&& !isset($_SESSION['nome'])) {
  header("location:../View/index.php");

}

include'header.php'; 

?>
<br><br>

<center>
	<h1>Modalidades Cadastradas</h1>	
</center>
<br><br>
<div class="container ">
	<div class="container ">
	
			
			
				<table style=" border: 5px solid black;">
				
					<tr>
					<th>TIMES</th>
					<th>MODALIDADES</th>
					<th>USUARIO</th>
					<th>Excuir</th>
				  	</tr>
				<ul>
					<?php 
						require_once('../Controller/conexao.php'); 

						$sql0= "SELECT * FROM `times`";
						$queryOne = $conn ->prepare($sql0);
						$queryOne -> execute();
						$times = $queryOne-> fetchALL();
						foreach ($times as $time):
						if ($time[1] == $time[1]):

						?>
						<tr>
							<td><?=$time['NOME'];?></td>
							<td><?=$time['MOD_ID'];?></td>
							<td><?=$time['USU_ID'];?></td>
							<td>
						            <a href="../Controller/excluir.php?id=<?=$time[0];?>">X</a>
    						</td>
						</tr>						
	  					<?php endif?>
						<?php endforeach;?>
				</table>


			</ul>
		</div>
	</div>

<br>
<br>
<br>

</ul>
</body>
</html>
