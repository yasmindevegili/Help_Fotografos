<?php
if (!isset($_SESSION)) {//Verificar se a sessão não já está aberta.
    session_start();
  }
require_once('config.php');

?>

<?php
$id = $_SESSION['id'];

try {
$query = "SELECT 'foto_perfil' FROM perfil_fotografo WHERE usuario_id='$id'";
$stmt = $connection->prepare( $query );

$stmt->bindValue(1, $id);

$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_ASSOC);

$foto_perfil = $row["foto_perfil"];
}

catch(PDOException $exception){
die('ERROR: ' . $exception->getMessage());
}
?>
<?php
if($_POST){
try{
$query = "UPDATE perfil_fotografo SET foto_perfil=:foto_perfil WHERE usuario_id = '$id' ";
$stmt = $connection->prepare($query);

$foto_perfil = htmlspecialchars(strip_tags($_POST['foto_perfil']));

$stmt->bindParam(':foto_perfil', $foto_perfil);

if($stmt->execute()){
$_SESSION['foto_perfil'] = $foto_perfil;
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