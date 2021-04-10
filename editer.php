<?php
//session_start();

$titre = '';
$lien = '';
$date = '';
$appt = '';
$descriptif = '';
$photo = '';


require_once 'dbconexion.php';

$mysqli = new mysqli('localhost', 'root','', 'webinaire' ) or die(mysqli_error($mysqli));



if(isset($_POST['confirmer'])){
if($_POST['edit2'] > 0) {

  $mysqli->query("UPDATE `webinar` SET
    `nomLive` = '".addslashes($_POST['titre'])."',
    `lienZoom` = '".addslashes($_POST['lien'])."',
    `date` = '".($_POST['trip-start'])."',
    `heure` = '".($_POST['appt'])."',
    `resumer` = '".addslashes($_POST['description'])."',
    `photo` = '".($_POST['avatar'])."' WHERE `id` = ".$_POST['edit2'])
  or die($mysqli->error);

 }
 header('Location: index.php');
}
  elseif (isset($_POST['confirmer'])){
      $titre = $_POST['titre'];
      $lien = $_POST['lien'];
      $date = $_POST['trip-start'];
      $appt = $_POST['appt'];
      $descriptif = $_POST['description'];
      $photo = $_POST['avatar'];

      $mysqli->query("INSERT INTO webinar(nomLive,lienZoom,date,heure,resumer,photo)VALUES('$titre','$lien','$date','$appt','$descriptif','$photo')")
      or die($mysqli->error);

      $_SESSION['message'] = "Sauvegardé";
      $_SESSION['msg_type'] = "success";

}

if(isset($_GET['delete'])){
  $id = $_GET['delete'];
  $mysqli->query("DELETE FROM webinar WHERE id=$id")or die($mysqli->error());

}

?>
