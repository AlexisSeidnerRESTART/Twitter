<?php 

require "database-twitter.php";

//ETAPE 1 : preparation

$tweeto = $database_twitter->prepare("SELECT * FROM utilisateur");

//ETAPE 2 : execution

$tweeto->execute();

//ETAPE 3 : on l'utilise

$allTweetos = $tweeto->fetchALL(PDO::FETCH_ASSOC);


?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription twitter</title>
</head>
<body>

    <img class="logo" src="./images/frog-coeur-removebg-preview.png" alt="désolé ca charge pas">
    <form class="form" method="POST" action="insert_tweeto.php">

        <input type="text" name="nom" placeholder="nom" > 
        <input type="text" name="pseudo" placeholder="pseudo">
        <input type="text" name="mail" placeholder="mail">
        <input type="text" name="password" placeholder="password">
        <button type="submit">Inscription/Connection</button>
    <main>
        <?php foreach($allTweetos as $tweetos) { ?>
            <h1><?= $tweetos['nom'] ?> </h1> 
            <h1><?= $tweetos['pseudo'] ?> </h1> 
            <h1><?= $tweetos['mail'] ?> </h1> 
            <h1><?= $tweetos['password'] ?> </h1>             
            
    <?php } ?>
    </main>
</form>
</body>
</html>