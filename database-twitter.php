<?php

try {
    $database_twitter = new PDO (
        "mysql:host=localhost;dbname=twitter", //trouver la base de données et changer juste le portailrestart
        "root", //identifiant laragon
        "" //mdp
    );
} catch(PDOException $error){
    die(); //tuer le site
}

?>