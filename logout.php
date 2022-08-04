<?php
    $_SESSION['isLogged'] = false;

    //Apagando todos os dados da sessão:
    session_unset();
    //Destruindo a sessão:
    session_destroy();

    header('Location: pag_inicial.html');
?>