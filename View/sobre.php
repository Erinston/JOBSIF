<?php  

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
<br><br><br>
	 <div class="row" style="margin-left: 500px">
    <div class="col s12 m3">
      <div class="card">
        <div class="card-image">
          <img src="../josivaldo.jpg">
        </div>
        <div class="card-content">
          <p>Erinston Ferreira da Silva Nascimento.</p>
        </div>
        <div class="card-action">
          <li>
            <a href="#">Git:Josivaldonatal</a>
           </li>
           <li>
            <a href="#">email:erinstong@gmail.com</a>
           </li>
           <li>
           <a href="#">telefone:85572470</a>
           </li>
        </div>
      </div>
    </div>

    <div class="col s12 m3">
      <div class="card">
        <div class="card-image">
          <img src="../jackson.jpg">      
        </div>
        <div class="card-content">
          <p>Jackson da Silva.</p>
        </div>
        <div class="card-action">
          <li>
            <a href="#">Git:Jackson29</a>
           </li>
           <li>
            <a href="#">email:erinstong@gmail.com</a>
           </li>
           <li>
           <a href="#">telefone:85572470</a>
           </li>
        </div>
      </div>
    </div> 
    <div class="col s12 m3">
      <div class="card">
        <div class="card-image">
          <img src="../erinston.jpg">
          
        </div>
        <div class="card-content">
          <p>Erinston Ferreira da Silva Nascimento.</p>
        </div>
        <div class="card-action">
            <li>
            <a >Git:Erinston</a>
           </li>
           <li>
            <a >email:erinstong@gmail.com</a>
           </li>
           <li>
           <a >telefone:85572470</a>
           </li>
        </div>
      </div>
    </div>
  </div>

	<?php
	$linhas =[ 
      
      ["Josivaldo Natal", "32", "josivaldonatal@gmail.com", "Josivaldonatal","992631606"], 
      ["Jackson da Silva", "31", "jacksonssantos882@gmail.com", "Jackson29", "988190653"],
      ["Erinston Ferreira", "20", "erinstong@gmail.com", "Erinston", "985572470"],
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