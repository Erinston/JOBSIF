<?php  
//verif se existe usuario logado 

session_start();
//verif se existe usuario logado 
if (!isset($_SESSION['id'])&& !isset($_SESSION['nome'])) {
  header("location:../view/index.php");

}

include'header.php'; 

?>

<br>
<div class="container">
	<div class="container row">
		<div class="container row">
			<ul class="collapsible">
			<form action="../controller/modGrup.php" method="post">
				<center>
					
					<h5 style="color: #4db6ac ; font-size: 35px">Modalidade</h5>
				<br>
				<input type="checkbox" name="modalidade" value="Futebol">Futebol<br>
				<input type="checkbox" name="modalidade" value="LoL">LoL<br>
				<input type="checkbox" name="modalidade" value="Cs">Cs<br>	
				
				<br>
				</center>
				<ul class="container row"> 
						<label>Nome da equipe</label>
					<input type="text" name="NomeEquipe" placeholder="ex:Machado 98"><br>
						<h5 style="color: #4db6ac ; font-size: 35px; text-align: center;">Matriculas</h5>
						<label>Matricula</label>
					<input type="text" name="matricula1" placeholder="ex:aa8582aas"><br>
						<label>Matricula</label>
					<input type="text" name="matricula2" placeholder="ex:aa8582aas"><br>
						<label>Matricula</label>
					<input type="text" name="matricula3" placeholder="ex:aa8582aas"><br>
						<label>Matricula</label>
					<input type="text" name="matricula4" placeholder="ex:aa8582aas"><br>
				</ul>
				
				<br><center>
					
				<input type="submit" value="Submit"><br><br>
				</center>
			</form>
			</ul>
		</div>	
	</div>	
<button>
	<a href="entrou.php">voltar</a>
</button>
</div>	


<br>

</body>
</html>


