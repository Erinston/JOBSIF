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
			<label>
				<h6>Selecione uma função:*</h6>
			</label>
		      <label>
		        <input class="with-gap" name="box" type="radio" id="aluno" />
		        <span>Aluno</span>
		      </label>
		      <label>
		        <input class="with-gap" name="box" type="radio" id="professor" />
		        <span>Professor</span>
		      </label>
		      <label>
		        <input class="with-gap" name="box" type="radio" id="egresso"  />
		        <span>Egresso</span>
		      </label><br>

				<div id="divMatricula">
					<label id="labelMatricula">MATRICULA:</label>
					<input type="text" name="matricula" required>
				</div>

				<label>USUARIO:*</label>
				<input type="text" name="usuario" required>
				<label>SENHA:*</label>
				<input type="password" name="senha" placeholder="*******" required>
				<br>
				<br>
				<input type="hidden" id="tipoUser" name="tipoUser">
				<input type="submit" value="Enviar">
			</form>
					</div>
				</div>
			</div>
		</ul>
	</div>
</div>
</div>
<script>
	$(document).ready(function(){
		$('#divMatricula').hide();
		$("input[name=box]").change(function(){
			if($(this).attr('id') == 'aluno'){
				$('#labelMatricula').html('MATRICULA DO ALUNO:*');
				$('#tipoUser').val(2);
				$('#divMatricula').show();
			}else if($(this).attr('id') == 'professor'){
				$('#labelMatricula').html('SIAPE:*');
				$('#tipoUser').val(3);
				$('#divMatricula').show();
			}else{
				$('#labelMatricula').html('CPF:*');
				$('#tipoUser').val(4);
				$('#divMatricula').show();
			}
		});
	});
</script>		
</body>
</html>
