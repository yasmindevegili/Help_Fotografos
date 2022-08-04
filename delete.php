<?php
include 'config.php';
if (!isset($_SESSION)) {//Verificar se a sessão não já está aberta.
    session_start();
  }

try {
$id = $_SESSION['id'];
$query = "UPDATE usuario SET ativo='0' WHERE id='$id'";
$stmt = $connection->prepare($query);
$stmt->bindParam(1, $id);
if($stmt->execute()){
header('Location: pag_inicial.html?acao=deleted');
}else{
die('Não foi possível excluir o registro.');
}
}

catch(PDOException $exception){
die('ERROR: ' . $exception->getMessage());
}
?>


