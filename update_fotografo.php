<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Help! Fotógrafos</title>
<meta charset="UTF-8">
<link rel="icon" type="imagem/png" href="logos/camera_preta.png" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
<link href="pag_inicial.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<link href="cadastroFotografo.css" rel="stylesheet" type="text/css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>
<style>
  .collapse{
        box-sizing: border-box;
        width: 90%;
      }
  .loginbox{
      height: 160%;
      margin-top: 30%;
      width: 50%;
      font-size: 90%;
    }
  body{
      background: url(imagens/natureza.jpg) no-repeat 80% 30%;
    }
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
  }
  .drop_menu{ 
    width:8px;
    margin-top: 17.5px;
    font-size:11px;
    font-family: 'Alata', sans-serif;
}
	.item{
		max-width: 100%;
		width: 2000px;
		height: 700px;
  }
  .paragrafo{
    left: 16%;
    top:43%;
    position: absolute;
    color: black;
    font-size: 220%;
    text-align: center;
    font-family: 'Caveat', cursive;

  }
  .b{
    font-family: 'Bebas Neue' sans-serif;
  }
  .collapse{
    box-sizing: border-box;
    width: 90%;
  }
  .entrar{
    left: 46%;
  }
  .logo{
    margin-top: 6%;
  }
  .w3-bar-block .w3-bar-item {
    width: 100%;
    display: block;
    padding: 8px 16px;
    text-align: left;
    border: none;
    white-space: normal;
    float: none;
    outline: 0;
}
.w3-btn, .w3-button {
    border: none;
    display: inline-block;
    padding: 8px 16px;
    vertical-align: middle;
    overflow: hidden;
    text-decoration: none;
    color: inherit;
    background-color: inherit;
    text-align: center;
    cursor: pointer;
    white-space: normal;
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
        <li><a href="#"><img src="logos/camera_vermelha.png" width="30"></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="perfil_fotografo.php">VOLTAR</a></li>
        <li><a href="logout.php">ATUALIZAR PERFIL</a></li>
      </ul>
    </div>
  </div>
</nav>
<br>
<br>
<br>
<br>
<!-- PHP read record by ID will be here -->
<?php
// get passed parameter value, in this case, the record ID
// isset() is a PHP function used to verify if a value is there or not
$cod_usuario = isset($_GET['cod_usuario']) ? $_GET['cod_usuario'] : die('ERROR: Record ID not found.');
//include database connection
include 'config.php';
// read current record's data
try {
// prepare select query
$query = "SELECT 'nome_usuario', 'nome_completo', 'tel', 'cidade', 'email', 'senha', 'bio', 'foto_perfil', 'facebook', 'instagram', 'linkedin', 'cod_usuario' FROM cadastro WHERE cod_usuario = ? LIMIT
0,1";
$stmt = $connection->prepare( $query );
// this is the first question mark
$stmt->bindValue(1, $cod_usuario);
// execute our query
$stmt->execute();
// store retrieved row to a variable
$row = $stmt->fetch(PDO::FETCH_ASSOC);
// values to fill up our form
$nome_usuario = $row["nome_usuario"];
$nomeCompleto = $row["nome_completo"];
$telefone = $row["tel"];
$cidade = $row["cidade"];
$email = $row["email"];
$senha = $row["senha"];
$biografia = $row["bio"];
$fotosPerfil = $row["foto_perfil"];
$face = $row["facebook"];
$insta = $row["instagram"];
$linkedin = $row["linkedin"];
}
// show error
catch(PDOException $exception){
die('ERROR: ' . $exception->getMessage());
}
?>
<!-- PHP post to update record will be here -->
<?php
// check if form was submitted
if($_POST){
try{
// write update query
// in this case, it seemed like we have so many fields to pass and
// it is better to label them and not use question marks
$query = "UPDATE usuario and perfil_fotografo SET nome_usuario=:nickname, nome_completo=:nome_completo, tel=:tel, cidade=:cidade, 
email=:email, senha=:senha, bio=:bio, foto_perfil=:foto_perfil, facebook=:facebook, 
instagram=:instagram, linkedin=:linkedin WHERE cod_usuario=:cod_usuario";
// prepare query for execution
$stmt = $connection->prepare($query);
// posted values
$nomeUsuario = htmlspecialchars(strip_tags($_POST['nome_usuario']));
$nomeCompleto = htmlspecialchars(strip_tags($_POST['nome_completo']));
$telefone = htmlspecialchars(strip_tags($_POST['tel']));
$cidade = htmlspecialchars(strip_tags($_POST['cidade']));
$email = htmlspecialchars(strip_tags($_POST['email']));
$senha = htmlspecialchars(strip_tags($_POST['senha']));
$biografia = htmlspecialchars(strip_tags($_POST['bio']));
$fotosPerfil = htmlspecialchars(strip_tags($_POST['foto_perfil']));
$face = htmlspecialchars(strip_tags($_POST['facebook']));
$insta = htmlspecialchars(strip_tags($_POST['instagram']));
$linkedin = htmlspecialchars(strip_tags($_POST['linkedin']));

// bind the parameters
$stmt->bindParam(':nickname', $nomeUsuario);
$stmt->bindParam(':nome_completo', $nomeCompleto);
$stmt->bindParam(':tel', $telefone);
$stmt->bindParam(':cidade', $cidade);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':senha', $senha);
$stmt->bindParam(':bio', $biografia);
$stmt->bindParam(':foto_perfil', $fotosPerfil);
$stmt->bindParam(':facebook', $face);
$stmt->bindParam(':instagram', $insta);
$stmt->bindParam(':linkedin', $linkedin);
$stmt->bindParam(':cod_usuario', $cod_usuario);
// Execute the query
if($stmt->execute()){
echo "<div class='alert alert-success'>Registro Atualizado.</div>";
}else{
echo "<div class='alert alert-danger'>Não foi possível atualizar o
registro. Tente novamente.</div>";
}
}
// show errors
catch(PDOException $exception){
die('ERROR: ' . $exception->getMessage());
}
}
?>
    <div class="loginbox">
    <h1>Cadastro do Fotógrafo</h1>
<!-- HTML form to update record will be here -->
<!--we have our html form here where new record information can be updated-->
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] ."?cod_usuario=$cod_usuario");?>" method="post">
  <p>Nome de Usuário</p>
  <input type="text" name="nome_usuario" placeholder="Digite seu nome de usuário" required="" value="<?php print $_SESSION['nome_usuario'] ?>">
  <p>Nome Completo</p>
  <input type="text" name="nome_completo" placeholder="Digite seu nome completo" required="" value="<?php print $_SESSION['nome_completo'] ?>">
  <p>Telefone para contato</p>
  <input type="tel" name="telefone" placeholder="Formato: (xx) xxxxx-xxxx" required="" value="<?php print $_SESSION['tel'] ?>">
  <p>Cidade</p>
  <input type="text" name="cidade" placeholder="Digite sua cidade" required="" value="<?php print $_SESSION['cidade'] ?>">
  <p>E-mail</p>
  <input type="email" name="email" placeholder="@gmail.com" required="" value="<?php print $_SESSION['email'] ?>">
  <p>Biografia</p>
  <input type="textarea" name="biografia" placeholder="Digite uma breve biografia" required="" value="<?php print $_SESSION['bio'] ?>">
  <p>Selecione fotos de perfil</p>
  <input type="file" name="fotos_perfil" required="" value="<?php print $_SESSION['foto_perfil'] ?>">
  <p>Cole o URL do seu Facebook</p>
  <input type="text" name="face" required="" value="<?php print $_SESSION['facebook'] ?>">
  <p>Cole o URL do seu Instagram</p>
  <input type="text" name="insta" required="" value="<?php print $_SESSION['instagram'] ?>">
  <p>Cole o URL do seu Linkedin</p>
  <input type="text" name="linkedin" required="" value="<?php print $_SESSION['linkedin'] ?>">
  <p>Senha</p>
  <input type="password" name="senha" placeholder="Digite sua senha" required="">

<input type='submit' value='Salvar Alterações' class='btn btn-primary' />
<a href='delete.php?cod_usuario=<?php print $_SESSION['cod_usuario']?>' class='btn btn-danger'>Apagar perfil</a>
</p>

</table>
</form>
</div> <!-- end .container -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<!-- Latest compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>