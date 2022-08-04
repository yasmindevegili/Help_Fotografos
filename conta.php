<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Help! Fotógrafos</title>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Alata&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/contastyle.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
    
    
    
    integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <link href="pag_inicial.css" rel="stylesheet" type="text/css">    

</head>
<style>

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

    <div class="container2">
        <div class="content first-content">
            <div class="first-column">
                <h2 class="title title-primary">Bem vindo de volta!</h2>
                
                <button id="signin" class="btn btn-primary">LOGIN</button>
            </div>    
            <div class="second-column">
                <h2 class="title title-second">CRIE UMA CONTA</h2>
                <div class="social-media">
                    <ul class="list-social-media">
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-facebook-f"></i>        
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-google-plus-g"></i>
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-linkedin-in"></i>
                            </li>
                        </a>
                    </ul>
                </div><!-- social media -->
                <p class="description description-second">ou use seu e-mail para cadastrar-se:</p>

                <!-- <?php $cod_tipo = is_integer($_POST['cod_tipo']) ?> -->
                <form class="form" action="cadastro_process.php" method="post" >
                    <label class="label-input" for="">
                        <i class="far fa-user icon-modify"></i>
                        <input type="text" name="nome_usuario" placeholder="Nome de Usuário">
                    </label>

                    <label class="label-input" for="">
                        <i class="far fa-user icon-modify"></i>
                        <input type="text" name="nome_completo" placeholder="Nome Completo">
                    </label>

                        <p class="clearfix">
                        <label class="label-input" for="cod_tipo" <?php echo ($cod_tipo == "Cliente" ? "checked" : null) ?> >
                            <i class="far fa-user icon-modify"></i>Cliente
                            <input type="radio" name="cod_tipo" value="3" id="cliente" placeholder="Cliente">
                        </label>
                        
                        <label class="label-input" for="cod_tipo" <?php echo ($cod_tipo == "Fotógrafo" ? "checked" : null) ?> >
                            <i class="far fa-user icon-modify"></i>Fotógrafo
                            <input type="radio" name="cod_tipo" value="2" id="fotografo" placeholder="Fotógrafo">
                        </label>
                        </p>

                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="email" name="email" placeholder="Email">
                    </label>
                    
                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" name="senha" placeholder="Senha">
                    </label>

                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" name="senha" placeholder="Confirmar Senha">
                    </label>
                    
                    
                    <button name="enviar" class="btn btn-second">ENVIAR</button>        
                </form>
            </div><!-- second column -->
        </div><!-- first content -->



        <div class="content second-content">
            <div class="first-column">
                <h2 class="title title-primary">Olá!</h2>
                <p class="description description-primary">Insira seus dados pessoais</p>
                <p class="description description-primary">e comece a jornada conosco</p>
                <button id="signup" class="btn btn-primary">CRIAR</button>
            </div>
            <div class="second-column">
                <h2 class="title title-second">Entre na sua conta</h2>
                <div class="social-media">
                    <ul class="list-social-media">
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-facebook-f"></i>
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-google-plus-g"></i>
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-linkedin-in"></i>
                            </li>
                        </a>
                    </ul>
                </div><!-- social media -->
                <p class="description description-second">ou use seu e-mail para entrar:</p>


                <form class="form" action="login_process.php" method="post">
                
                    <label class="label-input" for="">
                    <i class="far fa-user icon-modify"></i>
                        <input type="text" name="nome_usuario"  placeholder="Nome de Usuário">
                    </label>
                
                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" name="senha" placeholder="Senha">
                    </label>
                
                    <a class="password" href="#">Perdeu sua senha?</a>
                    <button name="submit" class="btn btn-second">ENTRAR</button>
                </form>
            </div><!-- second column -->
        </div><!-- second-content -->
    </div>
    <script src="js/app.js"></script>
</body>
</html>