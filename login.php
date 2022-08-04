<!DOCTYPE html>
<html>
<head>
    <title>Help! Fotógrafos</title>
    <meta charset="utf-8">

    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Hind+Guntur&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Caveat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alata&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link href="pag_inicial.css" rel="stylesheet" type="text/css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<style>

body {
   margin:0;
   padding: 0;
   background: url(imagens/help5.png) no-repeat 100% 100%;
   background-size: 1250px ;
   height: 550px ;
   background-position: top;
   font-family: Montserrat, sans-serif;
}
h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 28px;
    font-family: 'Alata', sans-serif;
 }
.loginbox {
    width: 350px;
    height: 400px;
    background-color: white;
    color: black;
    top: 55%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 30px 30px;
    border-radius: 5%;
}
 .loginbox p{
    margin: 0;
    padding: 0;
    font-weight: bold;
    font-size: 17px;
 }

 .loginbox input{
    width: 100%;
    margin-bottom: 20px;
 }

 .loginbox input[type="text"], input[type="password"] {
    border: none;
    border-bottom: 1px solid black;
    background: transparent;
    outline: none;
    height: 35px;
    color: black;
    font-size: 15px;
 }

 .loginbox input[type="submit"]
 {
    border: none;
    outline: none;
    height: 40px;
    background: #da0000;
    color: black;
    font-size: 18px;
    border-radius: 20px;
 }

 .loginbox input[type="submit"]:hover{
    cursor: pointer;
    background: #ba0000;
    color: black;
 }
 .loginbox a{
    text-decoration: none;
    font-size: 12px;
    line-height: 10px;
    color: black;
 }

 .loginbox a:hover{
    color: #363636;
    font-size: 12.2px;
 }
   .collapse{
    box-sizing: border-box;
    width: 90%;
  }
  .logologin{
    margin-top: -15px;
} 
</style>
<body>

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
        <li><a href="pag_inicial.html"> <img class="logologin" src="logo/help_logo.png" height="50" width="120"> </a> </li>
      </ul>
    </div>
  </div>
</nav>

<div class="loginbox">
    	<h1>ENTRE NA SUA CONTA</h1>

    	<form action="login_process.php" method="post">
    		<p>Nome de Usuário</p>
    		<input type="text" name="nome_usuario" placeholder="Digite seu nome de usuário" required="">
    		<p>Senha</p>
    		<input type="password" name="senha" placeholder="Digite sua senha" required="">

    		<b><input type="submit" name="submit" value="Login"></b>
    		<a href="#">Perdeu sua senha?</a><br>
    		<a href="cadastro.php">Não tem uma conta?</a>
</div>

</body>
</html>


    
    
