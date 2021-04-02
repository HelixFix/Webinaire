

<?php

require_once 'dbconexion.php';

$mysqli = new mysqli('localhost', 'root','', 'webinaire' ) or die(mysqli_error($mysqli));

if (isset($_POST['confirmer'])){
  $titre = $_POST['titre'];
  $lien = $_POST['lien'];
  $date = $_POST['trip-start'];
  $appt = $_POST['appt'];
  $descriptif = $_POST['description'];
  $photo = $_POST['avatar'];

  $mysqli->query("INSERT INTO webinar(titre,lien,date,heure,descriptif,image)VALUES('$titre','$lien','$date','$appt','$descriptif','$photo')")
  or die($mysqli->error);
}
?>
