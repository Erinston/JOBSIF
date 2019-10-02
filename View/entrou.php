<?php  
session_start();
//verif se existe usuario logado 
if (!isset($_SESSION['id'])&& !isset($_SESSION['nome'])) {
	header("location:../View/index.php");

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<style type="text/css">
		body{

			background-image: url("../esporte.jpg");
			background-repeat: no-repeat;
			text-align:center;
			margin-bottom: 10%;
		}
		h1{font-size: 70px;
			margin-bottom: 10%;
		}
	form{
		background: white;
		margin-bottom: 10%;
		margin-right:40%;
		margin-left: 40%;

	}
	label{
		font-size: 50px;
		}
		a{
			font-family: 20px;
			margin: 1%;
		}
		div{
			background:white;
			margin-right: 40%;
			margin-left: 40%;
			margin-bottom: 5px;
		}


	</style>
	<title>Document</title>
</head>
<body>
	<h1>Seja bem vindo</h1>
		
		<div>
		<a href="cadInd.php"> Cadastrados individuais</a>
		</div>
		<div>
		<a href="cadDup.php"> Cadastrados em dupla</a>
			
		</div>
		<div>
		<a href="cadGrp.php"> Cadastrados em grupo</a>	
		</div>

<!-- 		<label>Modalidade</label><br><br>
<form action="../Controller/modalidade.php" method="post">
  <input type="checkbox" name="individual" value="Individual"> Fultebol<br>
  <input type="checkbox" name="dupla" value="dupla"> Volei<br>
  <input type="checkbox" name="grupo" value="grupo">LOL<br><br>
  <input type="submit" value="Submit">
</form>
 -->

		<a href="tabela.php"> Cadastrados</a>

		<br><br>
	<button>
		<a href="../Controller/logout.php">sair</a>
	</button>
</body>
</html>