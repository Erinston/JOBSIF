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
				<h1 style="color:white; font-size: 30px; border: 3px solid #4db6ac; text-align: center; background:#4db6ac; ">Cadastro</h1>

			<form action="../Controller/adicionar.php" method="post">
				<div class="row">
					<div class="input-field col s7">
						<label>NOME:</label>
						<input type="text" name="nome" placeholder="EX:João">
					</div>
					<div class="input-field col s5">
				<label>TELEFONE:</label>
				<input type="number" name="telefone" placeholder="ex:98888-8888">
					</div>
						<label>CPF:*</label>
						<input type="number" name="cpf" placeholder="Ex:1059865-75" required>
				<label>MATRICULA:</label>
				<input type="text" name="matricula" placeholder="Ex:20191brasil0805">
				<label>USUARIO:*</label>
				<input type="text" name="usuario" placeholder="EX:docente/aluno/sevirdor" required>
				<label>SENHA:*</label>
				<input type="password" name="pw" placeholder="*******" required>
				<br>
				<br>
				<input type="submit" value="Enviar">
					</div>
				</div>
			</form>
			</div>
		</ul>
	</div>
</div>
</div>		
</body>
</html>
