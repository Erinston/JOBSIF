<?php  
session_start();
//verif se existe usuario logado 
if (!isset($_SESSION['id'])&& !isset($_SESSION['nome'])) {
	header("location:../View/index.php");

}
include'header.php'; 

?>
<style type="text/css">



		
	
	
		a{
		color: black;	
		}
		div{
			color: black;
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
				<h5 style="background: #4db6ac ;">ESCOLHA JOGO</h5>
				<div>
					<div > 
						<a href="cadInd.php">Individual</a>	
					</div>

					<div>
						<a href="cadDup.php">Dupla</a>	
					</div>

					<div>
						<a href="cadGrp.php">Grupo</a>	
					</div>
				</div>
			</ul>
			<br><br><br>	
			<ul class="collapsible">

					<a href="tabela.php"> Cadastrados de Usuarios</a>
			</ul>
					<br>
	</div>
	<button style="background:white;">
		<a href="../Controller/logout.php">sair</a>
	</button>
 
</div>
</body>
</html>