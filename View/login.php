
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
					<h1 style="color:white; font-size: 30px; border: 3px solid #4db6ac; text-align: center; background:#4db6ac; ">Login</h1>
				<form action="../Controller/auth.php" method="post">
					<label>USUARIO:</label>
					<input type="text" name="usuario" required>
					<label>SENHA:</label>
					<input type="password" name="pw" required>
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