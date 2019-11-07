<?php  
//verif se existe usuario logado 
session_start();
if (isset($_SESSION['id'])&& isset($_SESSION['nome'])) {
	header("location:../View/entrou.php");
}
include'header.php'; 

?>
<style>
	input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
</style>
<br>
<div class="container row">	
<div class="container row">
	<div class="container row">
	<ul class="collapsible">
		<div class="container row">
				<div class="row">
				<h1  style="color:#4db6ac; font-size: 30px; border: 3px solid white; text-align: center; background:white;">Cadastro</h1><br>

			<form action="../Controller/adicionar.php" method="post">
				<label>NOME:</label>
				<input type="text" name="nome" placeholder="EX:João">
				<label>TELEFONE:</label>
				<input type="number" name="telefone" placeholder="ex:(81)90000-0000">
				
				<div>
					<input type="checkbox" id="aluno" name="matricula">
					<label>Aluno</label>
					<input type="checkbox" id="funcionario" name="matricula">
					<label>Funcionario</label>
					<input type="checkbox" id="egresso" name="matricula">
					<label>Egresso</label>
				</div>

				<label>MATRICULA:</label>
				<input type="text" name="matricula" required>
				<label>USUARIO:*</label>
				<input type="text" name="usuario" required>
				<label>SENHA:*</label>
				<input type="password" name="senha" placeholder="*******" required>
				<br>
				<br>
				<input type="submit" value="Enviar">
			</form>
					</div>
				</div>
			</div>
		</ul>
	</div>
</div>
</div>		
</body>
</html>
