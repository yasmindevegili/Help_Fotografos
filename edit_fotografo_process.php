<?php
if (!isset($_SESSION)) {//Verificar se a sessão não já está aberta.
    session_start();
  }
require_once('config.php');

?>

<?php
$id = $_SESSION['id'];

try {
$query = "SELECT 'nome_usuario', 'nome_completo', 'email' FROM usuario WHERE id = '$id' UNION ALL SELECT 'bio', 'cidade', 'estado', 'tel', 'foto_perfil' FROM perfil_fotografo WHERE usuario_id='$id'";
$stmt = $connection->prepare( $query );

$stmt->bindValue(1, $id);

$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_ASSOC);

$nome_usuario = $row["nome_usuario"];
$nome_completo = $row["nome_completo"];
$email = $row["email"];
$bio = $row["bio"];
$cidade = $row["cidade"];
$estado = $row["estado"];
$tel = $row["tel"];
$foto_perfil = $row["foto_perfil"];
}

catch(PDOException $exception){
die('ERROR: ' . $exception->getMessage());
}
?>
<?php
if($_POST){
try{
$query = "UPDATE usuario INNER JOIN perfil_fotografo ON id = '$id' and usuario_id = '$id' SET nome_usuario=:nome_usuario, nome_completo=:nome_completo, email=:email, bio=:bio, cidade=:cidade, estado=:estado, tel=:tel ";
$stmt = $connection->prepare($query);
$nome_usuario = htmlspecialchars(strip_tags($_POST['nome_usuario']));
$nome_completo = htmlspecialchars(strip_tags($_POST['nome_completo']));
$email = htmlspecialchars(strip_tags($_POST['email']));
$bio = htmlspecialchars(strip_tags($_POST['bio']));
$cidade = htmlspecialchars(strip_tags($_POST['cidade']));
$estado = htmlspecialchars(strip_tags($_POST['estado']));
$tel = htmlspecialchars(strip_tags($_POST['tel']));

$stmt->bindParam(':nome_usuario', $nome_usuario);
$stmt->bindParam(':nome_completo', $nome_completo);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':bio', $bio);
$stmt->bindParam(':cidade', $cidade);
$stmt->bindParam(':estado', $estado);
$stmt->bindParam(':tel', $tel);

if($stmt->execute()){
$_SESSION['nome_usuario'] = $nome_usuario;
$_SESSION['nome_completo'] = $nome_completo;
$_SESSION['email'] = $email;
$_SESSION['bio'] = $bio;
$_SESSION['cidade'] = $cidade;
$_SESSION['estado'] = $estado;
$_SESSION['tel'] = $tel;

echo "<div class='alert alert-success'>Registro Atualizado.</div>";

}else{
echo "<div class='alert alert-danger'>Não foi possível atualizar o
registro. Tente novamente.</div>";
}
}
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