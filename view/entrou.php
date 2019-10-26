<?php  
session_start();
//verif se existe usuario logado 
if (!isset($_SESSION['id'])&& !isset($_SESSION['nome'])) {
	header("location:../view/index.php");

}
include'header.php'; 

?>
<style type="text/css">

	
		a{
		color: black;	
		}
		div{
			color: black;
			margin-bottom: 5px;
		}
		ul{
			text-align: center;
			font-size: 29px;	
		}
		h5{
			color: white;
		}



	</style>

<center>
	
<h1>Seja bem vindo</h1>
</center>
		
<br><br>
				
				
<div class="container row">
		<div class="container row">
			<ul class="collapsible">
					<h5 style="color: #4db6ac ; font-size: 35px">ESCOLHA JOGO</h5>
				<div>
					<div style=" background:#4db6ac; margin-left: 30%; margin-right: 30% ; border: 1px solid black;" > 
						<a href="cadInd.php"  style="color: white;">Individual</a>	
					</div>

					<div style=" background:#4db6ac; margin-left: 30%; margin-right: 30% ; border: 1px solid black;" >
						<a href="cadDup.php"style="color: white;" >Dupla</a>	
					</div>

					<div style=" background:#4db6ac; margin-left: 30%; margin-right: 30% ; border: 1px solid black;" >
						<a href="cadGrp.php" style="color: white;">Grupo</a>	
					</div>
				</div>
			<br>
			</ul>
			<br><br>

			<ul class="collapsible">


					<a href="tabela.php" style="color: black;">Usuarios Cadastrados</a>

			</ul>
			

			<ul class="collapsible">

				<a href="CadModali.php" style="color: black;">Modalidades Cadastradas</a><br>

			</ul>
					<br>
	</div>
	<button style="background:white;">
		<a href="../Controller/logout.php">sair</a>
	</button>
 
</div>
</body>
</html>