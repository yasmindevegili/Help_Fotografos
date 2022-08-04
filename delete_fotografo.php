<?php
include 'config.php';
session_start();

try {
$id = $_SESSION['id'];
$query = "DELETE FROM usuario WHERE id = '$id'";
$stmt = $connection->prepare($query);
$stmt->bindParam(1, $id);
$sql = "DELETE FROM perfil_fotografo WHERE usuario_id = '$id'";
$data = $connection->prepare($sql);
$data->bindParam(1,$id);
if($stmt->execute() & $data->execute()){
header('Location: pag_inicial.html?acao=deleted');
}else{
die('Não foi possível excluir o registro.');
}
}

catch(PDOException $exception){
die('ERROR: ' . $exception->getMessage());
}
?>


