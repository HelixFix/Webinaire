<?php
//session_start();
$varcache=0;
$uptdate=false;
$titre = '';
$lien = '';
$date = '';
$appt = '';
$descriptif = '';


require_once 'dbconexion.php';

$mysqli = new mysqli('localhost', 'root','', 'webinaire' ) or die(mysqli_error($mysqli));


if(isset($_GET['edit'])){
  $id = $_GET['edit'];
  $uptdate=true;
  $result = $mysqli->query("SELECT * FROM webinar WHERE id=$id") or die($mysqli->error());

    $ligne = $result->fetch_array();
    $titre = $ligne['nomLive'];
    $lien = $ligne['lienZoom'];
    $date = $ligne['date'];
    $appt = $ligne['heure'];
    $descriptif = $ligne['resumer'];
    $varcache = $ligne['id'];

}


if(isset($_POST['sauvegarder'])){
if($_POST['edit2'] > 0) {

  $mysqli->query("UPDATE `webinar` SET
    `nomLive` = '".addslashes($_POST['titre'])."',
    `lienZoom` = '".addslashes($_POST['lien'])."',
    `date` = '".($_POST['trip-start'])."',
    `heure` = '".($_POST['appt'])."',
    `resumer` = '".addslashes($_POST['description'])."' WHERE `id` = ".$_POST['edit2']) or die($mysqli->error);

 }
 header('Location: index.php');
}

  elseif (isset($_POST['confirmer'])){
      $titre = addslashes($_POST['titre']);
      $lien = addslashes($_POST['lien']);
      $date = $_POST['trip-start'];
      $appt = $_POST['appt'];
      $descriptif = addslashes($_POST['description']);

      $mysqli->query("INSERT INTO webinar(nomLive,lienZoom,date,heure,resumer)VALUES('$titre','$lien','$date','$appt','$descriptif')")
      or die($mysqli->error);

      /*$_SESSION['message'] = "Sauvegardé";
      $_SESSION['msg_type'] = "success";*/
      header('Location: index.php');

}

if(isset($_GET['delete'])){
  $id = $_GET['delete'];
  $mysqli->query("DELETE FROM webinar WHERE id=$id")or die($mysqli->error());
  header('Location: index.php');

}

?>
