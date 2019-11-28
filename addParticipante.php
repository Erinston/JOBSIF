<br><br>
	<div class="container row" >
		<div class="container row" >
			<div class="container row" >
	<ul class="collapsible ">
			<div class="container row" >
			<br>
					<h1 style="color:#4db6ac; font-size: 30px; border: 3px solid white; text-align: center; background:white; "> Participante</h1><br>
				<form action="../Controller/auth.php" method="post">
					<label>MATRICULA:</label>
					<input type="text" name="usuario" required>
					<label>NOME:</label>
					<input type="text" name="text" required>
					<input type="submit" value="entrar">
				</form>
				<br><br>
				<?php 
//Nome das varíaveis
require ("conexao.php");
$MATRICULA= $_POST["matricula"];
$NOME= $_POST["nome"];


$sql2 = "INSERT INTO usuarios(MATRICULA,NOME,TIPOS_USER) VALUES(:matricula,:nome,:telefone)";
$query2 =$conn->prepare($sql2);
$query2->bindValue(":matricula",$MATRICULA);
$query2->bindValue(":nome",$NOME);


$query2->execute();


header('location:../View/login.php');

  ?>


			</div>
		</ul>
		</div>
	</div>
	</div>
