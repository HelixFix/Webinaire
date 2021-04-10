<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
    <title>Edition d'un webinaire</title>

  </head>

  <body class="fond-editer">

    <?php require_once 'editer.php';
    if(isset($_GET['edit'])){
      $id = $_GET['edit'];
      $result = $mysqli->query("SELECT * FROM webinar WHERE id=$id") or die(mysqli_error($mysqli));

        $ligne = $result->fetch_array();
        $titre = $ligne['nomLive'];
        $lien = $ligne['lienZoom'];
        $date = $ligne['date'];
        $appt = $ligne['heure'];
        $descriptif = $ligne['resumer'];
        $photo = $ligne['photo'];
        $varcache = $ligne['id'];

}
     ?>

    <div class="contour-form">
    <form class="monform" action="editer.php" method="POST">
  <!-- lien du zoom -->
  <div class="form-outline col-md-3 mb-4">
    <input type="text" id="titre" class="form-control" name="titre" value="<?php echo $titre;?>" />
    <label class="form-label" for="form1Example1">Titre du webinaire</label>
  </div>

  <!-- Titre du zoom -->
  <div class="form-outline col-md-3 mb-4">
    <input type="url" id="lien" class="form-control" name="lien" value="<?php echo $lien; ?>" />
    <label class="form-label" for="form1Example2">Lien vers le zoom</label>
  </div>
<!--Date et heure-->
<div class="date col-md-3 mb-4" >
  <label for="start">Date du zoom :</label>

<input type="date" id="start" name="trip-start"
       value="<?php echo $date; ?>"
       min="2021-03-17" max="2030-03-17">
</div>

<div class="heure col-md-3 mb-3">
  <label class="form-label" for="appt">Heure de début du zoom :</label>

<input value="<?php echo $appt; ?>" type="time" id="appt" name="appt"
       min="09:00" max="20:00" required>
</div>

<div class="descriptif col-md-3 mb-3">
  <div class="form-outline">
  <textarea class="form-control" id="textAreaExample" rows="4" name="description">
  <?php echo $descriptif; ?>
</textarea>
  <label class="form-label" for="textAreaExample" >Dscriptif de la réunion :</label>
</div>
</div>

<!--Ajouter une image-->

<div class="ajouter-image col-md-3 mb-3">
  <label for="avatar">Image pour le webinaire:</label>

<input type="file"
       id="avatar" name="avatar"
       accept="image/png, image/jpeg"
       value="<?php echo $photo; ?>">
</div>

<button id="btn-confirmer" type="submit"name="confirmer">Confirmer</button>
</div>

  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-4">
    <div class="col d-flex justify-content-center">
      <!-- Checkbox -->
    </div>
  </div>

  <input type="hidden" name="edit2" value="<?php echo $varcache; ?>">

</form>
</div>
  </body>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"></script>
</html>
