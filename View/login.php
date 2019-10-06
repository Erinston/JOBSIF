
<?php  
//verif se existe usuario logado 
session_start();
if (isset($_SESSION['id'])&& isset($_SESSION['nome'])) {
	header("location:../View/entrou.php");
}
include'header.php'; 
?>
	<div class="container row" >
		<div class="container">
			<div class="container">
				<form action="../Controller/auth.php" method="post">
					
					<label>Usuario</label>
					<input type="text" name="usuario" required>
					<label>Senha:</label>
					<input type="password" name="pw" required>
					<input type="submit" value="entrar">
				</form>
			</div>
		</div>
	</div>
	

</body>
</html>