<?php
session_start();
?>

<!DOCTYPE HTML>
<html>
<title>Help! Fotógrafos</title>
<meta charset="UTF-8">

<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Hind+Guntur&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Caveat&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Alata&display=swap" rel="stylesheet">

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" rel="stylesheet" >

<link href="https://www.w3schools.com/w3css/4/w3.css" rel="stylesheet" >

<link href="pag_inicial.css" rel="stylesheet" type="text/css">
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
  body {
   margin:0;
   padding: 0;
   background: url(imagens/natureza.jpg) no-repeat 80% 80%;
   background-size: 2000px;
   background-position: top;
   font-family: 'Alata', sans-serif;
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
  .logoperfil{
    margin-top: -15px;
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
      <li><a href="home.html"> <img class="logoperfil" src="logo/help_logo.png " height="50" width="120" > </a> </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="perfil_cliente.php">CANCELAR</a></li>
        <li><a href="perfil_cliente.php">SALVAR ALTERAÇÕES</a></li>
      </ul>
    </div>
  </div>
</nav>
<br>
<br>
<br>
<br>


    <div class="loginbox">
    <h1>Cadastro</h1>
<!-- HTML form to update record will be here -->
<!--we have our html form here where new record information can be updated-->
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] ."?cod_usuario=$cod_usuario");?>" method="post">
  <p>Nome de Usuário</p>
  <input type="text" name="nome_usuario" placeholder="Digite seu nome de usuário" required="" value="<?php print $_SESSION['nome_usuario'] ?>">
  <p>Nome Completo</p>
  <input type="text" name="nome_completo" placeholder="Digite seu nome completo" required="" value="<?php print $_SESSION['nome_completo'] ?>">
  <p>E-mail</p>
  <input type="email" name="email" placeholder="@gmail.com" required="" value="<?php print $_SESSION['email'] ?>">
  <p>Senha</p>
  <input type="password" name="senha" placeholder="Digite sua senha" required="" value="<?php print $_SESSION['senha'] ?>">

<input type='submit' value='Salvar Alterações' class='btn btn-primary' />

<a href='delete.php?cod_usuario=<?php print $_SESSION['cod_usuario']?>' class='btn btn-danger'>Apagar perfil</a>
</p>

</table>
</form>
</div> <!-- end .container -->

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
$query = "SELECT 'nome_usuario', 'nome_completo', 'email', 'senha', 'cod_usuario' FROM cadastro WHERE cod_usuario = ? ";
$stmt = $connection->prepare( $query );
// this is the first question mark
$stmt->bindValue(1, $cod_usuario);
// execute our query
$stmt->execute();
// store retrieved row to a variable
$row = $stmt->fetch(PDO::FETCH_ASSOC);
// values to fill up our form
$nome_usuario = $row["nome_usuario"];
$nome_completo = $row["nome_completo"];
$email = $row["email"];
$senha = $row["senha"];
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
$query = "UPDATE cadastro SET nome_usuario=:nome_usuario, nome_completo=:nome_completo, email=:email, senha=:senha,
WHERE cod_usuario=:cod_usuario";
// prepare query for execution
$stmt = $connection->prepare($query);
// posted values
$nome_usuario = htmlspecialchars(strip_tags($_POST['nome_usuario']));
$nome_completo = htmlspecialchars(strip_tags($_POST['nome_completo']));
$email = htmlspecialchars(strip_tags($_POST['email']));
$senha = htmlspecialchars(strip_tags($_POST['senha']));

// bind the parameters
$stmt->bindParam(':nome_usuario', $nome_usuario);
$stmt->bindParam(':nome_completo', $nome_completo);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':senha', $senha);
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



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<!-- Latest compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>