<?php  
//verif se existe usuario logado 

session_start();
//verif se existe usuario logado 
if (!isset($_SESSION['id'])&& !isset($_SESSION['nome'])) {
  header("location:../view/index.php");

}

include'header.php'; 

?>

<div class="container row">
		<div class="container row">
				<center>
			<div class="container row">
				<div class="container row">
					<div class="collapsible">
						<form action="../controller/modInd.php" method="post">
							<h5 style="color: #4db6ac ; font-size: 35px">Modalidade</h5><br>
						  <input type="checkbox" name="modalidade" value="Dama">Dama<br>
						  <input type="checkbox" name="modalidade" value="Xadres">Xadres<br>
						  <input type="checkbox" name="modalidade" value="Street Fighter">Street Fighter<br>
						  <input type="checkbox" name="modalidade" value="Fifa">Fifa<br><br>
						  <input type="submit" value="Submit">
						</form>
						<br>
					</div>
				</center>
				</div>	
			</div>	
		</div>




				<button>
					<a href="entrou.php"> voltar</a>
				</button>
	</div>


</body>
</html>