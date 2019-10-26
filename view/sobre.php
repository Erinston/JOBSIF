<?php  
//verif se existe usuario logado 

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
      ["Cândida Araújo", "17", "candida110214@gmail.com", "Candida-1102","983689481"],
      ["João Matheus", "19", "joao.matheus0101@gmail.com","Matheus1111999","984876838"],
      ["Josivaldo Natal", "32", "josivaldonatal@gmail.com", "Josivaldonatal","992631606"], 
      ["Jackson da Silva", "31", "jacksonssantos882@gmail.com", "Jackson29", "988190653"],
      ["Erinston Ferreira", "20", "erinstong@gmail.com", "Erinston", "985572470"],
      ["Ginaldo Ribero", "28", "sammykawaii@gmail.com", "Ninmery", "998303366"]	
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