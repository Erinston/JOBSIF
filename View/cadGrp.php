<?php include'header.php'; 
 ?>

<br>
<div class="container">
	<div class="container row">
		<div class="container row">
			<ul class="collapsible">
			<form action="../Controller/modGrup.php" method="post">
				<center>
					
				<label>Modalidade</label><br>
				<input type="checkbox" name="modalidade" value="Futebol">Futebol de areia<br>
				<input type="checkbox" name="modalidade" value="LoL">LoL<br>
				<input type="checkbox" name="modalidade" value="Cs">Cs<br>
				<input type="checkbox" name="modalidade" value="JustDance">JustDance<br><br>	
				<ul class="collapsible container row">
					<legend>Matriculas</legend>
				</ul><br>
				</center>
				<ul class="container row"> 
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


