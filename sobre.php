
session_start();
//verif se existe usuario logado 

include'header.php'; 

?>

<style>

table{
      display: block;
      text-align:center;
     font-size: 20px; 
     margin: center;
 
}

  tr:nth-child(odd){
    background:#4db6ac;
  }
tr{
    color: black;
}
td,th{
    border: 5px solid black;
}

  </style>

	
	<?php
	$linhas =[ 
      
            ["Josivaldo Natal", "32", "josivaldonatal@gmail.com", "Josivaldo Natal","992631606"], 
      ["Jackson da Silva", "31", "jacksonssantos882@gmail.com", "Jackson29", "988190653"],
      ["Erinston Ferreira", "20", "erinstong@gmail.com", "Erinston", "985572470"]     
	]	 
	 ?>
  
  <br>
    
  <div class="container row">
  <div class="container row">
    
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
 
   
     <br><br>
    </div>
  </div>   
</body>
</html>
