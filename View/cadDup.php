<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		body{
			text-align:center;
		}

	</style>
</head>
<body>
	
<form action="../Controller/modalidade.php" method="post">
	<label>Modalidade</label><br>
	<input type="checkbox" name="individual" value="Individual">FuteVolei<br>
	<input type="checkbox" name="dupla" value="dupla">Domino<br>
	<input type="checkbox" name="dupla" value="dupla">Frescobol<br>
	<input type="checkbox" name="grupo" value="grupo">JustDance<br><br>
		<legend>Matricula</legend>
	<input type="text" name="Nome" placeholder="ex:aa8582aas">
	<br><br><input type="submit" value="Submit">
<br><a href="entrou.php">voltar</a>
</form>
</body>
</html>