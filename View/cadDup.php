<?php  
//verif se existe usuario logado 

session_start();
//verif se existe usuario logado 
if (!isset($_SESSION['id'])&& !isset($_SESSION['nome'])) {
  header("location:../View/index.php");

}

include'header.php'; 

?>
<div class="container row">
	<div class="container row">
		<div class="container row">
			<ul class="collapsible">
			<form action="../Controller/modDul.php" method="post">
 <center>
				<h5 style="color: #4db6ac ; font-size: 35px">Modalidade</h5>
				<input type="checkbox" name="modalidade"value="FutVolei">FutVolei<br>
				<input type="checkbox" name="modalidade" value="Domino">Domino<br>
				<input type="checkbox" name="modalidade" value="Frescobol">Frescobol<br>
					
</center>
			<ul class="container">
			<ul class="container">
				<h5 style="color: #4db6ac ; font-size: 20px">Matricula</h5>
				
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