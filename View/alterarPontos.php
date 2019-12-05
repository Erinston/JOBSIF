<?php  
require_once('../Controller/conexao.php');
session_start();
//verif se existe usuario logado 
if (!isset($_SESSION['id'])&& !isset($_SESSION['usuario'])) {
	header("location:../View/index.php");
}
$_SESSION['mod'] = 0;

include'header.php'; 
?>
<!-- Selecionar todas as modalidades -->
<?php $sql1 = 'SELECT * from modalidades'; ?>
<?php $queryOne = $conn->prepare($sql1); ?>
<?php $queryOne->execute(); ?>
<?php $modalidades = $queryOne->fetchAll(); ?>

<!-- Selecionar todos os times do usuário -->
<?php $sql3 = 'SELECT * from `times` where MOD_ID = :usuario'; ?>
<?php $queryThree = $conn->prepare($sql3); ?>
<?php $queryThree->bindValue(':usuario', 1 ); ?>
<?php $queryThree->execute(); ?>
<?php $times = $queryThree->fetchAll(); ?>

<h4>Escolha a sua modalidade</h4>
 <div class="input-field col s12">
	<select for="modalidade" name="modalidade" id="mod" class="browser-default">
		<option value="" disabled selected>----</option>
		<?php foreach ($modalidades as $modalidade): ?>
			<option value="<?=$modalidade[0];?>"><?=$modalidade[1];?></option>
		<?php endforeach ?>
	</select>
</div>
<?php if ($_SESSION['mod'] == 1): ?>
	<h2>Quem é o gostosão daqui?</h2>
<?php endif ?>	
<div class="listTimesMod">
	<?php if (count($times) > 0): ?>
		<ul class="collapsible">
			<h5 style="color: #4db6ac ; font-size: 35px">Times</h5>
			<table>
				<thead>

					<tr>
						<th>Nome</th>
						<th>Pontos</th>
						<th>Ações</th>
					</tr>
				</thead>
				<tbody>
			<?php foreach ($times as $time): ?>
					<tr>
						<th><?=$time[2];?></th>
						<th><?=$time[1];?></th>
						<th>
							<a href="../Controller/adcPontosTimes.php?time=<?=$time[0]?>">+</a>
							<a href="../Controller/dimPontosTimes.php">-</a>
						</th>
					</tr>
			<?php endforeach ?>
				</tbody>
			</table>
		</ul>
	<?php endif ?>
</div>

<?php echo $_SESSION['mod']; ?>
<script>
	$('#mod').change(function(e) {
		e.preventDefault();
	    if ($(this).val() === '1') {
  		<?php $_SESSION['mod'] = 1;?> 			
  			console.log("LOL - 1");
		}else if($(this).val() === '2'){
			console.log("FIFA - 2");
		}else if($(this).val() === '3'){
			console.log("CS - 3");
		}else if($(this).val() === '4'){
			console.log("DOMINO - 4");
		}else if($(this).val() === '5'){
			console.log("XADREZ - 5");
		}else if($(this).val() === '6'){
			console.log("VOLEI - 6");
		}else if($(this).val() === '7'){
			console.log("FUTSAL - 7");
		}
	});
</script>