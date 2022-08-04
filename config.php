<?php
    //Database connection details to mySQL
    
	$host = 'localhost'; 
	$user = 'root'; 
	$passw = ''; 
	$dbname = 'help_fotografos';
    try {
        $connection = new PDO("mysql:host={$host};dbname={$dbname};", $user, $passw);
    } catch (PDOException $error) {
        echo "Conexão Falhou! " . $error -> getMessage();
    }
?>