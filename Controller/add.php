//Nome das varíaveis
<?
require ("conexao.php");
$MATRICULA= $_POST["matricula"];
$NOME= $_POST["nome"];
$TIMES_ID = $_POST["TIMES_ID"];

$sql2 = "INSERT INTO PARTICIPANTES(MATRICULA,NOME,TIMES_ID) VALUES(:matricula,:nome,:TIMES_ID)";
$query2 =$ctonn->prepare($sql2);
$query2->bindValue(":matricula",$MATRICULA);
$query2->bindValue(":nome",$NOME);
$query2->bindValue(":TIMES_ID",$TIMES_ID);




$query2->execute();


header('location:../View/login.php');

  ?>


			</div>
		</ul>
		</div>
	</div>
	</div>
