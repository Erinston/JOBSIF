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
<div class="container">
	<div class="container row">
		<div class="container row">
			<form action="../Controller/adicionar.php" method="post">
				<legend>Cadastro</legend>
				<label>NOME:</label>
				<input type="text" name="nome" placeholder="EX:João">
				<label>CPF:</label>
				<input type="number" name="cpf" placeholder="Ex:1059865-75" required>
				<label>MATRICULA:</label>
				<input type="text" name="matricula" placeholder="Ex:20191brasil0805">
				<label>TELEFONE:</label>
				<input type="number" name="telefone" placeholder="ex:98888-8888">
				<label>USUARIO:</label>
				<input type="text" name="usuario" placeholder="EX:docente/aluno/sevirdor">
				<label>SENHA:</label>
				<input type="password" name="pw" placeholder="*******" required>
				<input type="submit" value="Enviar">
			</form>

		</div>
	</div>
</div>
		
</body>
</html>
