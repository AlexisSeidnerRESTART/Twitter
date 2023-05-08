<h1>Formulaire</h1>


<ul>
    <li><?= $_POST['nom'] ?></li>
    <li><?= $_POST['pseudo'] ?></li>
    <li><?= $_POST['mail'] ?></li>
    <li><?= $_POST['motdepasse'] ?></li>
</ul>
    


<?php 

require "database-twitter.php";

$inserto = $database_twitter->prepare("INSERT INTO utilisateur (nom, pseudo, mail, motdepasse) VALUES(:lenom ,:lepseudo ,:lemail ,:lemdp) "); //pour twitter une valeur "tweet"
$inserto->execute(
    [
        "lenom" => $_POST['nom'],
        "lepseudo" => $_POST['pseudo'],
        "lemail" => $_POST['mail'],
        "lemdp" => $_POST['motdepasse']
    ]



    );

header("Location: Twitter.php");