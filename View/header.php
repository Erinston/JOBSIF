

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Jobs</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  
  <script src="../js/materialize.js"></script>
  <script src="../js/init.js"></script>

</head>
<body>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="index.php" class="brand-logo">Jogos Internos IFPE</a>
      <ul class="right hide-on-med-and-down">
  <?php  if (!isset($_SESSION['id']) && !isset($_SESSION['usuario'])): ?>
        <li><a href="login.php">Login</a></li>
        <li><a href="cadastro.php">Cadastro</a></li>
  <?php endif;?>
	         <li><a href="regras.php">Regras</a></li> 
         <li><a href="sobre.php">Sobre</a></li>
          <li><a href="../calendarioatualizado/index.php">Calendario</a></li>

    <?php if (isset($_SESSION['id']) && isset($_SESSION['usuario'])): ?>
        <li>
          <a href="entrou.php">Registra</a>
        </li><li>
          <a href="../Controller/logout.php">sair</a>
        </li>
  
    <?php endif;?>
            
      </ul> 

      <ul id="nav-mobile" class="sidenav">
        <li> <center><h5 style=" background: #4db6ac">J O B S </h2></center></li>
  <?php  if (!isset($_SESSION['id']) && !isset($_SESSION['usuario'])): ?>
        <li><a href="login.php">LOGIN</a></li> 
        <li><a href="cadastro.php">CADASTRO</a></li>  
  <?php endif;?>
        <li><a href="../calendarioatualizado/index.php">CALENDARIO</a></li>
        <li><a href="regras.php">REGRAS</a></li> 
        <li><a href="sobre.php">SOBRE</a></li> 
    <?php if (isset($_SESSION['id']) && isset($_SESSION['usuario'])): ?>
        <li><a href="../Controller/logout.php">sair</a></li>
    <?php endif;?>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>


     
      