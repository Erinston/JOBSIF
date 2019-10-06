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


	</style>

<center>
	
<h1>Seja bem vindo</h1>
</center>
		
<br><br>
<ul class="collapsible">
<ul class="collapsible">
	<h5 style="background: black ;color: white;">ESCOLHA JOGO</h5>
</ul>
	<div>
		<div>
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


					
					
	

<!-- 		<label>Modalidade</label><br><br>
<form action="../Controller/modalidade.php" method="post">
  <input type="checkbox" name="individual" value="Individual"> Fultebol<br>
  <input type="checkbox" name="dupla" value="dupla"> Volei<br>
  <input type="checkbox" name="grupo" value="grupo">LOL<br><br>
  <input type="submit" value="Submit">
</form>
 -->
<ul class="collapsible">

		<a href="tabela.php"> Cadastrados</a>
</ul>
		<br><br>
	<button style="background: black">
		<a href="../Controller/logout.php">sair</a>
	</button>
</body>
</html>