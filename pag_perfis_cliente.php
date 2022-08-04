<!DOCTYPE html>
<?php
  if (!isset($_SESSION)) {//Verificar se a sessão não já está aberta.
    session_start();
  }
  require_once('config.php');
?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<title>Help! Fotógrafos</title>
<meta charset="UTF-8">

  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Hind+Guntur&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Caveat&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Alata&display=swap" rel="stylesheet">

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" rel="stylesheet" >

  <link href="https://www.w3schools.com/w3css/4/w3.css" rel="stylesheet">

  <link href="pag_inicial.css" rel="stylesheet" type="text/css">
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1">

<style>

a{
    font-family: 'Alata', sans-serif;
}
  p{
    font-size:16px;
  }
  h2{
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
    font-family: 'Alata', sans-serif;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight:400;
    margin-bottom: 30px;
    font-family: 'Alata', sans-serif;
  }
  .logopagperfis{
    margin-top: -15px;
  } 
  .aumclique{
    font-size:20px;
    font-family: 'Alata', sans-serif;
  }

  form.example input[type=text] {
  padding: 7px;
  font-size: 17px;
  border: 5px solid black;
  border-radius: 25px;
  width: 80%;
  background: white;
  }

form.example button {
  width: 8%;
  padding: 7px;
  background: red;
  color: white;
  font-size: 17px;
  border: 5px solid black;
  border-radius: 25px;
  }

form.example button:hover {
  width: 8%;
  padding: 7px;
  background: red;
  color: white;
  font-size: 17px;
  border: 4px solid black;
  border-radius: 25px;
  }

.navbar-right{
  margin-top: -48px;
}
.navbar {
    font-size: 12px !important;
    font-family: Montserrat, sans-serif;
  }
  .w3-card-4{
    position: relative;
    left: 15%;
    width: 750px;
  }
  .img1{
    height:100%;
    width:100%;
    position: relative;
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
      <li><a href="#"> <img class="logopagperfis" src="logo/help_logo.png " height="50" width="120" > </a> </li>
      </ul>

      <form class="example" action="/action_page.php" style="margin:auto; text-align: center; max-width:600px">
        <input type="text" placeholder="   Pesquisar Fotógrafo" name="search2">
        <button type="submit"><i class="fa fa-search"></i></button>
      </form>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" style="text-transform: uppercase;"><?php print $_SESSION['nome_usuario'] ?></a></li>
        <li><a href="logout.php">SAIR</a></li>
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
    <!--<img src= style="width:40%;" class="w3-round"><br><br>-->
  <br>
  <br>
    <h4><b><?php print $_SESSION['nome_usuario'] ?></b></h4>
  </div>
  <div class="w3-bar-block">
    <a href="#curtidas" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w"><i class="fa fa-th-large fa-fw w3-margin-right"></i>DESCOBRIR</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>CURTIDAS</a>
    <a href="editar_cliente.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>EDITAR</a> 
  </div>

</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1000px">
<br>
<br>
<br>
<!-- Header -->
<header class="w3-container w3-center w3-padding-32"> 
  <h1><b>O FOTÓGRAFO IDEAL</b></h1>
  <p class="aumclique" >A um clique de <span class="w3-tag">distância</span></p>
</header>

<!-- Grid -->
<div class="w3-row">

<!-- Blog entries -->
<div class="w3-col l8 s12">

  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white">
    <img class="img1" src="imagens/cat.jpg" alt="Nature">
    <div class="w3-container">
      <h3><b> Gato Malhado </b></h3>
      <h5><b>Walter Firmo<span class="w3-opacity"> São Paulo-SC</span></b></h5>
    </div>
    <div class="w3-container">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
      <div class="w3-row">
        <div class="w3-col m8 s12">
          <!-- link do perfil de fotógrafos aleatórios -->
          <p><a href="#" button class="w3-button w3-padding-large w3-white w3-border"><b>VER PERFIL &raquo;</b></button></a></p>
        </div>
        <div class="w3-col m4 w3-hide-small">
          <!-- contagem de curtidas da postagem-->
          <p><span class="w3-padding-large w3-right"><b>Curtidas &nbsp;</b> <span class="w3-tag">130</span></span></p>
        </div>
      </div>
    </div>
  </div>
  <hr>

  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white">
  <img src="imagens/flor.jpg" alt="Norway" style="width:100%">
    <div class="w3-container">
      <h3><b>Praia das flores roxas</b></h3>
      <h5><b>Elisa Dumont <span class="w3-opacity">Fortaleza - CE</span></b></h5>
    </div>
    <div class="w3-container">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in.</p>
      <div class="w3-row">
        <div class="w3-col m8 s12">
          <!-- link do perfil de fotógrafos aleatórios -->
          <p><a href="#" button class="w3-button w3-padding-large w3-white w3-border"><b>VER PERFIL &raquo;</b></button></a></p>
        </div>
        <div class="w3-col m4 w3-hide-small">
          <!-- contagem de curtidas da postagem-->
          <p><span class="w3-padding-large w3-right"><b>Curtidas &nbsp;</b> <span class="w3-tag">82</span></span></p>
        </div>
      </div>
    </div>
  </div>
<!-- END BLOG ENTRIES -->
</div>

<!-- END GRID -->
</div><br>

<!-- END w3-content -->
</div>

</body>
</html>