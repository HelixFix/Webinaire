<?php 
  if(isset($_SESSION['admin']['mail'])){



?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="/style.css" />
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel="stylesheet" />
  <title>S'inscrire</title>
</head>

<body class="corp">
  <header>
    <div class="logo">

      <a href="/index.php"><img class="logop" src="images/logop.png" alt="Logo Praxis"></a>
    </div>
  </header>

  <main>
    <div class="wrapper d-flex  align-items-center contenua " >
      <div class="container">
        <div class="row cadre">
          <div class="picture col-lg-5">
            <img src="images/Students.jpg" alt="Image de etudiant praxis" class="img-fluid" />
          </div>

          <div class="englobe col-lg-7">
            <h1 class="titre-creation">Ajouter un nouvel Admin</h1>
            
            
            <span class="text-center h-25">
            <?php
            if (isset($_GET["error"])) {

             
            
    
              
             if ($_GET["error"] == "invalidmailvide") {

              echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-warning

              \" role=\"alert\" data-mdb-color=\"danger\">  Entrer votre Mail
            </div>";
               
              } 
              elseif ($_GET["error"] == "invalidmail") {

                echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-warning

                \" role=\"alert\" data-mdb-color=\"danger\">  format mail incorrecte
              </div>";
               
              } 
              
              
              elseif ($_GET["error"] == "invalidpasswordvide") {


                echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-warning

                \" role=\"alert\" data-mdb-color=\"danger\">  Entrer votre mot de passe
              </div>";
                
              } 
              
              
              elseif ($_GET["error"] == "invalidpasswordc") {


                 echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-warning

                \" role=\"alert\" data-mdb-color=\"danger\">  Mot de passe : Il faut minimun 8 caractères
              </div>";
                
              } 
              
              
              elseif ($_GET["error"] == "invalidpasswordn") {


                 echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-warning

                \" role=\"alert\" data-mdb-color=\"danger\">  Il faut minimun 1 nombre ! 
              </div>";
                
              } 

              elseif ($_GET["error"] == "invalidpasswordL") {


                 echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-warning

                \" role=\"alert\" data-mdb-color=\"danger\">  Il faut minimun 1 majuscule !
              </div>";
                
              } 
              
              elseif ($_GET["error"] == "invalidpasswordl") {


                 echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-warning

                \" role=\"alert\" data-mdb-color=\"danger\">Il faut minimun 1 minuscule !   
              </div>";
                
              } 
         
              
              elseif ($_GET["error"] == "echecrecup") {


                 echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-warning

                \" role=\"alert\" data-mdb-color=\"danger\"> Il y a un soucis formulaire n'as pas pu etre envoié 
              </div>";
                              
                            } 

              elseif ($_GET["error"] == "echecenvoie") {


                 echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-warning

                \" role=\"alert\" data-mdb-color=\"danger\">  Il y a un soucis formulaire n'as pas pu etre envoié
              </div>";
                
              } 
              
              
              
              elseif ($_GET["error"] == "mailexistedeja") {


                 echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-warning

                \" role=\"alert\" data-mdb-color=\"danger\">  Mail existe déjà !!
              </div>";
                
              } 
              
              elseif ($_GET["error"] == "reussite") 
              
              
               echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-warning

                \" role=\"alert\" data-mdb-color=\"danger\"> vous etes maintenant inscrit 
              </div>";
            }

            ?>
            </span>

            <form action="/traitement-form-login/Controller-rajout-admin.php" method="POST" class="groupe-form" novalidate Allow: OPTIONS, GET, HEAD, POST>
             
               

              <div class="form-row col-lg-7">
                <div class="form-outline mb-4">
                  <input type="mail" id="mail" name="mail" class="form-control" value="<?php if(isset($_POST['$mail'])){ echo $_POST['$mail'];} ?>" required="required" />
                  <label class="form-label" for="mail">Adresse mail</label>
                </div>
              </div>

              <div class="form-row col-lg-7">
                <div class="form-outline mb-4">
                  <input type="password" id="password" name="password" class="form-control"value="" required="required" />
                  <label class="form-label" for="password">Mot de passe</label>
                </div>
              </div>

                <div class="form-outline mb-4">
                  <div class="button3">
                    <input class="btn btn-primary btn-sm" data-mdb-ripple-color="#083b4c" style="border-color: white" id="submitS" type="submit" name="submit" value="Valider" />
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>
  <div class="footer pied">
    <div class="copyrigth">
      <a href='https://fr.freepik.com/vecteurs/ecole' id="foot">École vecteur créé par pch.vector - fr.freepik.com</a>
    </div>
  </div>


 
  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"></script>
</body>

</html>
<?php } ?>