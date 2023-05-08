<h1>Formulaire</h1>

<ul>
    <li> <?= $_POST['cours'] ?></li>
    <li><?= $_POST['enseignant'] ?></li>
    <li><?= $_POST['note'] ?></li>
</ul>

<?php 

require "template/database.php";

$insert = $database->prepare("INSERT INTO cours (nom, enseignant, note) VALUES(:course, :teacher, :grade) "); //pour twitter une valeur "tweet"
$insert->execute(
    [
        "course" => $_POST['cours'],
        "teacher" => $_POST['enseignant'],
        "grade" => $_POST['note']
    ]



    );

header("Location: portail-note.php");
