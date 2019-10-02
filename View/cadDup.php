<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
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
</head>
<body>
	
<form action="../Controller/modDul.php" method="post">
	<label >Modalidade</label><br>
	<input type="checkbox" name="modalidade"value="FutVolei">FutVolei<br>
	<input type="checkbox" name="modalidade" value="Domino">Domino<br>
	<input type="checkbox" name="modalidade" value="Frescobol">Frescobol<br>
	<input type="checkbox" name="modalidade" value="JustDance">JustDance<br><br>
	<legend></legend>
		<label>Matricula</label>
	<input type="text" name="matricula" placeholder="ex:aa8582aas" required><br>
	<br><br><input type="submit" value="Submit">
</form>
<br>
<button>
	<a href="entrou.php">voltar</a>
</button>
</body>
</html>