<!DOCTYPE html>
<?php
  if (!isset($_SESSION)) {//Verificar se a sessão não já está aberta.
    session_start();
  }

  require_once('config.php');
?>
<html>
<title>Perfil</title>
<meta charset="UTF-8">
<link rel="icon" type="imagem/png" href="camera_preta.png" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="pag_inicial.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
<link href="pag_inicial.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
body{
	margin-top: 50px;
}
.navbar {
    margin-bottom: 0;
    background-color: black;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
    height: 50px;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: black !important;
    background-color: #fff !important;
    height: 50px;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
  }
  .logoperfil{
    margin-top: -15px;
} 
</style>
<body class="w3-light-grey" id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">


<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <href="#myPage"><class="logo">
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-left">
      <li><a href="pag_inicial.html"> <img class="logoperfil" src="logo/help_logo.png " height="50" width="120" > </a> </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="pag_perfis_fotografo.php">VOLTAR</a></li>
        <li><a href="update_fotografo.php">EDITAR</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src=<?php print $_SESSION['foto_perfil'] ?> style="width:45%;" class="w3-round"><br><br>
    <h4><b><?php print $_SESSION['nome_usuario'] ?></b></h4>
  </div>
  <div class="w3-bar-block">
    <a href="#portfolio" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>GALERIA</a> 
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>SOBRE</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>CONTATO</a>
  </div>
  <div class="w3-panel w3-large">
    <i class="fa fa-facebook-official w3-hover-opacity" href="<?php print $_SESSION['facebook'] ?>" ></i>
    <i class="fa fa-instagram w3-hover-opacity" href="<?php print $_SESSION['instagram'] ?>" ></i>
    <i class="fa fa-linkedin w3-hover-opacity" href="<?php print $_SESSION['linkedin'] ?>" ></i>
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header id="portfolio">
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    <h1><b>Minha galeria</b></h1>
    <div class="w3-section w3-bottombar w3-padding-16">
      
    </div>
    </div>
  </header>
  
  <!-- First Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src=<?php print $_SESSION['fotos'] ?> style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b></b></p>
        <p></p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src=<?php print $_SESSION['fotos'] ?> style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b></b></p>
        <p></p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src=<?php print $_SESSION['fotos'] ?> style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b></b></p>
        <p></p>
      </div>
    </div>
  </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src=<?php print $_SESSION['fotos'] ?> style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b></b></p>
        <p></p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src=<?php print $_SESSION['fotos'] ?> style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b></b></p>
        <p></p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src=<?php print $_SESSION['fotos'] ?> style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b></b></p>
        <p></p>
      </div>
    </div>
  </div>

  <!-- Pagination -->
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a href="#" class="w3-bar-item w3-button w3-hover-black">&laquo;</a>
      <a href="#" class="w3-bar-item w3-black w3-button">1</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">&raquo;</a>
    </div>
  </div>

  <!-- Images of Me -->
  <div class="w3-row-padding w3-padding-16" id="about">
    <div class="w3-col m6">
      <img src=<?php print $_SESSION['fotos_perfil'] ?> alt="Me" style="width:70%">
    </div>
    <div class="w3-col m6">
      <img src=<?php print $_SESSION['fotos_perfil'] ?> alt="Me" style="width:70%">
    </div>
  </div>

  <div class="w3-container w3-padding-large" style="margin-bottom:32px">
    <h4><b>Sobre mim</b></h4>
    <p><?php print $_SESSION['bio'] ?></p>
    <hr>
    
    <!--
    <h4>Habilidades técnicas</h4>
    <p>Fotografia</p>
    <div class="w3-grey">
      <div class="w3-container w3-dark-grey w3-padding w3-center" style="width:95%">95%</div>
    </div>
    <p>Web Design</p>
    <div class="w3-grey">
      <div class="w3-container w3-dark-grey w3-padding w3-center" style="width:85%">85%</div>
    </div>
    <p>Photoshop</p>
    <div class="w3-grey">
      <div class="w3-container w3-dark-grey w3-padding w3-center" style="width:80%">80%</div>
    </div>
    <p>
    </p>
    <hr>
    -->
  
  <!-- Contact Section -->
  <div class="w3-container w3-padding-large w3-grey">
    <h4 id="contact"><b>Contate-me</b></h4>
    <div class="w3-row-padding w3-center w3-padding-24" style="margin:0 -16px">
      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-envelope w3-xxlarge w3-text-light-grey"></i></p>
        <p><?php print $_SESSION['estado'] ?></p>
      </div>
      <div class="w3-third w3-teal">
        <p><i class="fa fa-map-marker w3-xxlarge w3-text-light-grey"></i></p>
        <p><?php print $_SESSION['cidade'] ?></p>
      </div>
      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-phone w3-xxlarge w3-text-light-grey"></i></p>
        <p><?php print $_SESSION['tel'] ?></p>
      </div>
    </div>
    <hr class="w3-opacity">
    <form action="/action_page.php" target="_blank">
      <div class="w3-section">
        <label>Nome</label>
        <input class="w3-input w3-border" type="text" name="Name" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="Email" required>
      </div>
      <div class="w3-section">
        <label>Mensagem</label>
        <input class="w3-input w3-border" type="text" name="Message" required>
      </div>
      <button type="submit" class="w3-button w3-black w3-margin-bottom"><i class="fa fa-paper-plane w3-margin-right"></i>Enviar Mensagem</button>
    </form>
  </div>

  <!-- Footer -->
  <footer class="w3-container w3-padding-32 w3-dark-grey">
  <div class="w3-row-padding">
    <div class="w3-third">

<!-- End page content -->
</div>

<script>
// Script to open and close sidebars
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>