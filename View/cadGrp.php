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
	h1{
		font-size: 20px;
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
	
<form action="../Controller/modGrup.php" method="post">
	<label>Modalidade</label><br>
	<input type="checkbox" name="modalidade" value="Futebol">Futebol de areia<br>
	<input type="checkbox" name="modalidade" value="LoL">LoL<br>
	<input type="checkbox" name="modalidade" value="Cs">Cs<br>
	<input type="checkbox" name="modalidade" value="JustDance">JustDance<br>	
		<legend>Matriculas</legend><br>
		<label>Matricula</label>
	<input type="text" name="matricula1" placeholder="ex:aa8582aas"><br>
		<label>Matricula</label>
	<input type="text" name="matricula2" placeholder="ex:aa8582aas"><br>
		<label>Matricula</label>
	<input type="text" name="matricula3" placeholder="ex:aa8582aas"><br>
		<label>Matricula</label>
	<input type="text" name="matricula4" placeholder="ex:aa8582aas"><br>

	<br><input type="submit" value="Submit">
</form>
<br>
<button>
	<a href="entrou.php">voltar</a>
</button>

</body>
</html>


