<?php

$dbNomServeur = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "webinaire";


$conn =  mysqli_connect($dbNomServeur, $dbUserName, $dbPassword, $dbName);

if (!$conn) {
    die("Echec de connexion" . mysqli_connect_error());
} else {

    echo ("Connexion etablie");
}


