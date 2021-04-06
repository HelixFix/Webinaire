<?php session_start();
$_SESSION['user']['nom'] = "Utilisateur";
// $_SESSION['admin']['nom'] = "Admin";

 if (isset($_SESSION['user']['nom'])) echo "Ma variable de session " . $_SESSION['user']['nom'];
$db = new PDO('mysql:host=localhost;dbname=webinaire', 'root', '');

setlocale(LC_TIME, "fr_FR", "French");

$requete = "SELECT * FROM `webinar` WHERE `date` >= CURDATE() ORDER BY `date`";


$tblWebinaire = $db->query($requete); // Enregistre la requete efectuer sur la db dans une variable
// var_dump($tblWebinaire);

$tblWebinaire2 = $db->query($requete);
$test = $tblWebinaire2->fetch();

if (!isset($_GET['page'])) $_GET['page'] = 'home'; ?>
<!--Si la valeur n'existe pas attribue la valeur home par défault -->



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <title>Webinaire</title>
</head>


<?php if ($_GET['page'] == 'home') include('menu.php'); ?>

<?php if (file_exists('pages/' . $_GET['page'] . '.php')) include('pages/' . $_GET['page'] . '.php');
else echo "404 La page " . $_GET['page'] . " n'existe pas."; ?>

<?php if ($_GET['page'] == 'home') include('footer.php'); ?>