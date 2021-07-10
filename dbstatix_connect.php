<?php 
$serverName = "localhost"; //nom du serveur
$userName = "root"; //nom de l'utilisateur (valeur par defaut = root[admin])
$password = ""; //mot de passe de la base de donnee
$databaseName = "statix_database"; //nom de la base de donnee

    // Creation d'une nouvelle instance de connexion a statix_database
    $statix_connexion = new mysqli($serverName, $userName, $password, $databaseName);
    // Verifier si la connexion a statix_database est echouE
    if ($statix_connexion->connect_error) {
        die("ERROR connexion ($databaseName): " . $statix_connexion->connect_error);
    } 
?>