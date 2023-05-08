<?php 

require "database-twitter.php";

//ETAPE 1 : preparation

$tweet = $database_twitter->prepare("SELECT * FROM tweet ORDER BY id DESC");

//ETAPE 2 : execution

$tweet->execute();

//ETAPE 3 : on l'utilise

$allTweets = $tweet->fetchALL(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>twitter</title>
</head>
<body>

        <form class="form" method="POST" action="insert_tweet.php">

            <input type="text" name="tweet" placeholder="Tweet un truc !" required> 
            <button type="submit">TWEET</button>

        </form>
        <form action="searchtweet.php" method="GET">
                <h2>Recherche :</h2><input type="text" name="search">
                <input type="submit" value = "cherche">
        </form>
        

    <main>
    <?php foreach($allTweets as $tweets) { ?>
            <h1><?= $tweets['tweet'] ?> </h1>             
            <form action="delete-tweet.php" method="POST">
                <input type="hidden" name="supp" value="<?= $tweets['id'] ?>">
                <button type="submit">Supp</button>
            </form>
            
    <?php } ?>
    </main>
             
            
    




    
</body>
</html>