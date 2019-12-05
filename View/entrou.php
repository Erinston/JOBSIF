<?php  
session_start();
//verif se existe usuario logado 
if (!isset($_SESSION['id'])&& !isset($_SESSION['usuario'])) {
	header("location:../View/index.php");
}
include'header.php'; 
require_once('../Controller/conexao.php');
?>
<!-- Selecionar todas as modalidades -->
<?php $sql1 = 'SELECT * from MODALIDADES'; ?>
<?php $queryOne = $conn->prepare($sql1); ?>
<?php $queryOne->execute(); ?>
<?php $modalidades = $queryOne->fetchAll(); ?>

<!-- Selecionar todos os times do usuário -->
<?php $sql3 = 'SELECT * from `TIMES` INNER JOIN MODALIDADES ON `TIMES`.`MOD_ID`=`MODALIDADES`.`id` where USU_ID = :usuario'; ?>
<?php $queryThree = $conn->prepare($sql3); ?>
<?php $queryThree->bindParam(':usuario', $_SESSION['id']); ?>
<?php $queryThree->execute(); ?>
<?php $times = $queryThree->fetchAll(); ?>

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
			<h5 style="color: #4db6ac ; font-size: 35px">Crie seu time</h5>
			<div>
				<div class="container row">
					<div class="container row">
						<center>
							<form action="../Controller/addMod.php" method="post">
								 <div class="input-field col s12">
							          <input placeholder="Nome do Time" id="nome" type="text" name="nome" class="validate">
										<label for="nome">Nome do time*</label>
							        </div>
								 <div class="input-field col s12">
									<select for="modalidade" name="modalidade" class="browser-default">
										<option value="" disabled selected>Escolha sua modalidade</option>
										<?php foreach ($modalidades as $modalidade): ?>
											<option value="<?=$modalidade[0];?>"><?=$modalidade[1];?></option>
										<?php endforeach ?>
									</select>
								</div>
								<div class="input-field col s12">
									<input type="hidden" name="pontos" value="0">
									<input type="hidden" name="usuario" value="<?=$_SESSION['id'];?>">
									<input type="submit" value="Cadastrar Time">
								</div>
							</form>
							<br>
						</center>
					</div>
				</div>
			</div>
		</ul>

	<?php if (count($times) > 0): ?>
		<ul class="collapsible">
			<h5 style="color: #4db6ac ; font-size: 35px">Seus Times</h5>
			<table>
				<thead>
					<tr>
						<th>Nome</th>
						<th>Pontos</th>
						<th>Modalidade</th>
					</tr>
				</thead>
				<tbody>
			<?php foreach ($times as $time): ?>
					<tr>
						<th><?=$time[2];?></th>
						<th><?=$time[1];?></th>
						<th><?=$time[6];?></th>
					</tr>
			<?php endforeach ?>
				</tbody>
			</table>
		</ul>
	<?php endif ?>

	<?php if ($_SESSION['tipoUser'] == 1): ?>
		<ul class="collapsible">
            <a href="alterarPontos.php" style="color: black;"> Alterar Pontos</a>
    </ul>
			

		<ul class="collapsible">
			<a href="tabela.php" style="color: black;">Usuarios Cadastrados</a>
		</ul>
		<ul class="collapsible">
			<a href="CadModali.php" style="color: black;">Modalidades Cadastradas</a><br>
		</ul>
	<?php endif ?>
		<br>
	</div>
</div>
</body>
</html>