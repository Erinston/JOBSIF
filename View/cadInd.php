<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<style type="text/css">
				body{

			background-image: url("../esporte.jpg");
			background-repeat: no-repeat;
			text-align:center;
			margin-bottom: 10%;
		}
		h1{font-size: 20px;
			margin-bottom: 10%;
		}
	form{
		background: white;
		margin-bottom: 10%;
		margin-right:40%;
		margin-left: 40%;

	}
	label{
		font-size: 20px;
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
<body>
	
<form action="../Controller/modInd.php" method="post">
	<label>modalidade</label><br>
  <input type="checkbox" name="modalidade" value="Dama"> Dama<br>
  <input type="checkbox" name="modalidade" value="Ping pong"> Ping pong<br>
  <input type="checkbox" name="modalidade" value="Fifa">Fifa<br><br>
  <input type="submit" value="Submit">
</form>
<button>
	<a href="entrou.php"> voltar</a>
</button>

</body>
</html>