<?php  
//verif se existe usuario logado 

session_start();
//verif se existe usuario logado 
if (!isset($_SESSION['id'])&& !isset($_SESSION['nome'])) {
  header("location:../view/index.php");

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
					<h4>Usuarios Individual</h4>
					<tr>
					<th>Matricula</th>
					<th>Jogo</th>
					<th>Excuir</th>
				  	</tr>
				</table>
		</div>
	</div>
<div class="container ">
	<div class="container ">
	
			
			
				<table style=" border: 5px solid black;">
					<h4>Usuarios em Dupla</h4>
					<tr>
					<th>Matricula</th>
					<th>Matricula2</th>
					<th>Jogo</th>
					<th>Excuir</th>
					</tr>
		

				</table>
		</div>
	</div>
<div class="container ">
	<div class="container ">
	
			
			
				<table style=" border: 5px solid black;">
					<h4>Usuarios em grupo</h4>
					<tr>
			
					<th>Nome da equipe</th>
					<th>Matriculas1</th>
					<th>Matriculas2</th>
					<th>Matriculas3</th>
					<th>Matriculas4</th>
					<th>Jogo</th>
					<th>Excuir</th>
				
				  	</tr>
				
				</table>
		</div>
	</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</ul>
</body>
</html>
