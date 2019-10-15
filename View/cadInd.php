<?php 
include'header.php';  ?>

<div class="container row">
		<div class="container row">
				<center>
			<div class="container row">
				<div class="container row">
					<div class="collapsible">
						<form action="../Controller/modInd.php" method="post">
							<label>modalidade</label><br>
						  <input type="checkbox" name="modalidade" value="Dama"> Dama<br>
						  <input type="checkbox" name="modalidade" value="Ping pong"> Ping pong<br>
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