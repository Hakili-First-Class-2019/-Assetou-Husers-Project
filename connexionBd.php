<?php

    session_start();

    $serveur = "localhost";
    $root = "root";
    $pass = "";

    try 
    {
        $connection = new PDO("mysql:host=$serveur;dbname=hakili", $root, $pass);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e)
    {
        echo 'Echec de la connexion: '.$e->getMessage();
    } 

    include_once 'userClass.php';
    $user = new User($connection);

?>