<?php  
//verif se existe usuario logado 
session_start();
if (isset($_SESSION['id'])&& isset($_SESSION['nome'])) {
  header("location:../View/entrou.php");
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
<style>
    body{  
      text-align:center;
      align-items: center;
    }
  table{
      
      border-collapse: collapse;
      display: flex;
      min-height: 80vh;
      text-align:center;
     font-size: 40px; 
     width:80%;
    justify-content: center;
}

  tr:nth-child(odd){
    background:green;
  }
tr{
   border: 10px solid black;
}
  </style>

	<h1>Desenvolvedores</h1>
	<?php
	$linhas =[ 
      ["Cândida Araújo", "17", "candida110214@gmail.com", "Candida-1102","983689481"],
      ["João Matheus", "19", "joao.matheus0101@gmail.com","Matheus1111999","984876838"],
      ["Josivaldo Natal", "32", "josivaldonatal@gmail.com", "Josivaldonatal","992631606"], 
      ["Jackson da Silva", "31", "jacksonssantos882@gmail.com", "Jackson29", "988190653"],
      ["Erinston Ferreira", "20", "erinstong@gmail.com", "Erinston", "985572470"],
      ["Ginaldo Ribero", "28", "sammykawaii@gmail.com", "Ninmery", "998303366"]	
	]	 
	 ?>
	<table>
        <tr>
            <th>Nome</th>
            <th>Idade</th>
            <th>Email</th>
            <th>GitHub</th>
            <th>Fone</th>
        </tr>
     
    <?php foreach ($linhas as $linha):?>
     <tr>   
    <?php  foreach($linha as $linhareal):?>
            <td><?=$linhareal?></td>
    <?php endforeach?>
    </tr>
    <?php endforeach ?>   
    </table>

      <button><a href="index.php">Pagina inicial</a></button>
</body>
</html>