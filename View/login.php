
<?php  
//verif se existe usuario logado 
session_start();
if (isset($_SESSION['id'])&& isset($_SESSION['nome'])) {
	header("location:../View/entrou.php");
}
include'header.php'; 
?>
<style type="text/css">

</style>
	<div class="container " >
	<div class="container " >
		<div class="container ">
			<div class="container ">
				<form action="../Controller/auth.php" method="post">
					<!-- <legend>Login</legend> -->
					<label>USUARIO:</label>
					<input type="text" name="usuario" required>
					<label>SENHA:</label>
					<input type="password" name="pw" required>
					<input type="submit" value="entrar">
				</form>
			</div>
		</div>
	</div>
	</div>

</body>
</html>