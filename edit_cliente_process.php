<?php
session_start();
require_once('config.php');

?>

<?php
$id = $_SESSION['id'];


try {
$query = "SELECT 'nome_usuario', 'nome_completo', 'email' FROM usuario WHERE id = '$id' ";
$stmt = $connection->prepare( $query );

$stmt->bindValue(1, $id);

$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_ASSOC);

$nome_usuario = $row["nome_usuario"];
$nome_completo = $row["nome_completo"];
$email = $row["email"];
}

catch(PDOException $exception){
die('ERROR: ' . $exception->getMessage());
}
?>
<?php
if($_POST){
try{
$query = "UPDATE usuario SET nome_usuario=:nome_usuario, nome_completo=:nome_completo, email=:email WHERE id='$id'";
$stmt = $connection->prepare($query);
$nome_usuario = htmlspecialchars(strip_tags($_POST['nome_usuario']));
$nome_completo = htmlspecialchars(strip_tags($_POST['nome_completo']));
$email = htmlspecialchars(strip_tags($_POST['email']));

$stmt->bindParam(':nome_usuario', $nome_usuario);
$stmt->bindParam(':nome_completo', $nome_completo);
$stmt->bindParam(':email', $email);

if($stmt->execute()){
$_SESSION['nome_usuario'] = $nome_usuario;
$_SESSION['nome_completo'] = $nome_completo;
$_SESSION['email'] = $email;

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