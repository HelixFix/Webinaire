<?php
$dbNomServeur = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "webinaire";

$connexion = mysqli_connect($dbNomServeur,$dbUserName,$dbPassword,$dbName);

if(!$connexion){
  die("Eror". mysqli_connect_error());
}
else
  "connecion etablie"
?>
