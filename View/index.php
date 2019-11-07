<?php  
//verif se existe usuario logado 
session_start();
if (isset($_SESSION['id'])&& isset($_SESSION['nome'])) {
	
} 
include'header.php'; 
?>
	
	
  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2">Escolha Modalidade</h1>
        <div class="row center">
          <h5 class="header col s12 light">JOGOS</h5>
        </div>
        <div class="row center">
          <a href="entrou.php" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">entre</a>
        </div>
        <br><br>

      </div>
    </div>
     <div class="parallax"><img style="filter:  grayscale(50%);" src="../esporte.jpg" alt="Unsplashed background img 1"></div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">Rapidez</h5>

            <p class="light">Presamos pela rapidiz 
           que o usuario possa  usar as nossos site para saber sua colocação, o proximo adversário e etc...</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">group</i></h2>
            <h5 class="center">Experiência do Usuário Focada</h5>

            <p class="light">Nosso projeto tem como objetivo facilitar a escrição como também a organização dos Jogos internos IFPE mas conhecidos como JOBS tanto para o usuário quanto para o administrador.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">configurações</h5>

            <p class="light">  Esse site tem em suas configurações inscrição,calendario,tabelas de jogos etc... </p>
          </div>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="../esporte.jpg" alt=" img 2"></div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>JOBS</h4>
          <p class="left-align light">Os JOBS são os jogos internos do IFPE do campus igarassu que tem diversas modalidades podendo ser individuais, em dupla e grupo. Jogado por alunos, docentes, ex-alunos e  ;</p>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="../esporte.jpg" alt="img 3"></div>
  </div>

  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      feito pela <a class="brown-text text-lighten-3" href="#!">Equipe 4</a>
      </div>
    </div>
  </footer>



  </body>
</html>
