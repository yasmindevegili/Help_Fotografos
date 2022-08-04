<?php
session_start();
require_once('config.php');
$nomeUsuario = $_SESSION['nome_usuario'];
$cod_tipo = $_SESSION['cod_tipo'];
$sql = "SELECT id from usuario WHERE nome_usuario='$nomeUsuario'";
$stmt = $connection -> prepare($sql);
$stmt -> bindValue(':nome_usuario', $nomeUsuario);
$stmt -> execute();
$result = $stmt -> fetch(PDO::FETCH_ASSOC);
$id = $result['id'];

if ($stmt -> execute()) {
    $_SESSION['id'] = $id;

    if ($cod_tipo=="2"){
        header('Location: cadastroFotografo.html');
            } elseif ($cod_tipo=="3"){
        header('Location: pag_perfis_cliente.php');
            } else{
                header("#");
            }
            print $id;
        } else{
            print 'Erro';
        }
?>