
<?php  
//verif se existe usuario logado 
session_start();
if (isset($_SESSION['id'])&& isset($_SESSION['nome'])) {
	header("location:../View/entrou.php");
}


include'header.php'; 
?>

<br><br>
	<div class="container row" >
		<div class="container row" >
			<div class="container row" >
	<ul class="collapsible ">
			<div class="container row" >
			<br>
					<h1 style="color:#4db6ac; font-size: 30px; border: 3px solid white; text-align: center; background:white; ">Login</h1><br>
				<form action="../Controller/auth.php" method="post">
					<label>USUARIO:</label>
					<input type="text" name="usuario" required>
					<label>SENHA:</label>
					<input type="password" name="senha" required>
					<input type="submit" value="entrar">
				</form>
				<br><br>
			</div>
		</ul>
		</div>
	</div>
	</div>

	



</body>
</html>