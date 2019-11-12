
<?php  
session_start();
//verif se existe usuario logado 
if (!isset($_SESSION['id'])&& !isset($_SESSION['nome'])) {
  header("location:../View/index.php");

}
include'header.php'; 

?>

<style>

* {box-sizing: border-box}

}

 

.skills {

  text-align: right;

  padding-top: 10px;

  padding-bottom: 10px;

  color: white;

}

 

.html {width: 90%; background-color: #4CAF50;}

.css {width: 10%; background-color: #2196F3;}

.js {width: 65%; background-color: #f44336;}

.php {width: 100%; background-color: #808080;}

</style>

</head>

  
<div class="container">
<div class="container">
<div class="w3-container">
 
 

<br><h1>Aproveitamento das Equipes</h1></br>

 

<p>Equipe 1</p>

<div class="container">

  <div class="skills html">90%</div>

</div>

 

<p>Equipe 2</p>

<div class="container">

  <div class="skills css">10%</div>

</div>

 

<p>Equipe 3</p>

<div class="container">

  <div class="skills js">65%</div>

</div>

 

<p>Equipe 4</p>

<div class="container">

  <div class="skills php">100%</div>

</div>

</div>
</div>
</div>
 <br> 
 <br> 


</body>

</html>

