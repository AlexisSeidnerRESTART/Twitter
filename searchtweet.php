<?php 

require "database-twitter.php";

if( isset($_GET['search'])){
    $search =$_GET['search'];
    $sql= "SELECT * FROM tweet WHERE contenu LIKE '%$search%";

    while($d=mysql_fetch_assoc($req)){
        echo $d["tweet"];
    }}

    header("Location: Twitter.php");
