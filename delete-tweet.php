<?php

require 'database-twitter.php';

$supp = $database_twitter->prepare("DELETE FROM tweet WHERE id= :id");
$supp-> execute(
    [
        "id" => $_POST['supp']
    ]
);

header("Location: Twitter.php");