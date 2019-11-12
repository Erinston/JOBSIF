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
				
				
<div class="container">
		<div class="container">
			<ul class="collapsible">
					<h5 style="color: #4db6ac ; font-size: 35px">ESCOLHA JOGO</h5>
				<div>
					<button style=" background:#4db6ac; margin-left: 30%; margin-right: 30% ; border: 1px solid black;width: 30%;" > 
						<li>
						<a href="cadInd.php"  style="color: white;width: 00%;">Individual</a>	
							
						</li>
					</button>

					<button style=" background:#4db6ac; margin-left: 30%; margin-right: 30% ; border: 1px solid black; width: 30%;">
						<a href="cadDup.php"style="color: white; margin-left: 30%; margin-right: 30% ;">Dupla</a>
					</button>

					<button style=" background:#4db6ac; margin-left: 0%; margin-right: 0% ; border: 1px solid black; width: 30%;" >
						<li>
							<a href="cadGrp.php" style="color: white;">Grupo</a>	
						</li>
					</button>
				</div>
			<br>
			</ul>
			<br><br>

			<ul class="collapsible">


					<a href="tabela.php" style="color: black;">Usuarios Cadastrados</a>

			</ul><ul class="collapsible">


					<a href="ranking.php" style="color: black;">Ranking</a>

			</ul>
			

			<ul class="collapsible">

				<a href="CadModali.php" style="color: black;">Modalidades Cadastradas</a><br>

			</ul>
					<br>
	</div>
 
</div>
</body>
</html>