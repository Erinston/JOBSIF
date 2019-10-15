<?php
include'header.php'; 
 
 ?>
<div class="container row">
	<div class="container row">
		<div class="container row">
			<ul class="collapsible">
			<form action="../Controller/modDul.php" method="post">
 <center>
				<label >Modalidade</label><br>
				<input type="checkbox" name="modalidade"value="FutVolei">FutVolei<br>
				<input type="checkbox" name="modalidade" value="Domino">Domino<br>
				<input type="checkbox" name="modalidade" value="Frescobol">Frescobol<br>
				<input type="checkbox" name="modalidade" value="JustDance">JustDance<br><br>	
</center>
			<ul class="container">
			<ul class="container">
					<label>Matricula</label>
				<input type="text" name="matricula" placeholder="ex:aa8582aas" required><br>
				<br><br><input type="submit" value="Submit">
			</form>
			</ul>
			</ul>
		</ul>
	</div>
			<button>
				<a href="entrou.php">voltar</a>
			</button>
</div>
			<br>
</body>
</html>