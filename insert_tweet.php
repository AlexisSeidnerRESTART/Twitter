<h1>Formulaire</h1>

<ul>
    <li> <?= $_POST['tweet'] ?></li>
    
</ul>

<?php 

require "database-twitter.php";

$insert = $database_twitter->prepare("INSERT INTO tweet (tweet) VALUES(:ouioui)"); //pour twitter une valeur "tweet"
$insert->execute(
    [
        "ouioui" => $_POST['tweet']
    ]
     );

header("Location: Twitter.php");