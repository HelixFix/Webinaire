<?php

include 'dbconnexion.php';
include 'inscription.php';

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
    <div class="wrapper">
      <div class="container">
        <div class="row cadre">
          <div class="picture col-lg-5">
            <img src="images/Students.jpg" alt="Image de etudiant praxis" class="img-fluid" />
          </div>

          <div class="englobe col-lg-7">
            <h1 class="titre-creation">Créer un compte</h1>
            
            
            <span class="text-center h-25">
            <?php
            if (isset($_GET["error"])) {

             
            

              if ($_GET["error"] == "invalidnomvide") {
                
                echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-warning

                \" role=\"alert\" data-mdb-color=\"danger\">  Entrer votre nom
              </div>";
               }
               
               
               elseif ($_GET["error"] == "invalidnom"){


                echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-warning

                \" role=\"alert\" data-mdb-color=\"danger\">  entrer que des lettre de l'alphabet et espace sont autorisés
              </div>";
               }
                  
                
               elseif ($_GET["error"] == "invalidprenomvide"){


                echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-warning

                \" role=\"alert\" data-mdb-color=\"danger\">Entrer votre nom 
              </div>";
                  
                
              }
              
             

        
              
              elseif ($_GET["error"] == "invalidprenom") {

                echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-warning

                \" role=\"alert\" data-mdb-color=\"danger\"> entrer que des lettre de l'alphabet et espace sont autorisés 
              </div>";
               
              }
              
              
              
             elseif ($_GET["error"] == "invalidmailvide") {

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
              
              
              
              
              elseif ($_GET["error"] == "invalidtelvide") {


                 echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-warning

                \" role=\"alert\" data-mdb-color=\"danger\"> Entrer votre numero de téléphone 
              </div>";
                
              } 
              elseif ($_GET["error"] == "invalidtel") {


                 echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-warning

                \" role=\"alert\" data-mdb-color=\"danger\">  Entrer que des chiffres
              </div>";
                
              } 

              
              elseif ($_GET["error"] == "invalidemploievide") {


                 echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-warning

                \" role=\"alert\" data-mdb-color=\"danger\">  
              </div>";
                echo "<p>Entrer le nom de votre emploie</p>";
              }
              
              elseif ($_GET["error"] == "invalidemploie") {


                 echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-warning

                \" role=\"alert\" data-mdb-color=\"danger\">  
              </div>";
                echo "<p>entrer que des lettre de l'alphabet et espace sont autorisés</p>";
              }
              
              elseif ($_GET["error"] == "invalidvillevide") {


                 echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-warning

                \" role=\"alert\" data-mdb-color=\"danger\">Le ville n'est pas valide  
              </div>";
                
              } 
              
              elseif ($_GET["error"] == "invalidville") {


                 echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-warning

                \" role=\"alert\" data-mdb-color=\"danger\">Le ville n'est pas valide  
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
              </div>";{
               
              }
            }

            ?>
            </span>

<!-- <? php echo isset($_GET["error"] == "invalidnom") + 'is-invalid' : ''?> -->

            <form action="/formulaire.php" method="POST" class="groupe-form" novalidate Allow: OPTIONS, GET, HEAD, POST>
              <div class="form-row col-lg-7">
                <div class="form-outline mb-4">
                  <input type="text" id="nom" name="nom" class="form-control " value="<?php if(isset($_POST['$nom'])) echo $_POST['$nom']; ?>" required="required"/>
                  <label class="form-label" for="nom">Nom</label>
                  <div class="invalid-feedback valid ">
                      <span class="n">
                      <?php
                           if (isset($_GET["error"])) {

                            if ($_GET["error"] == "invalidnomvide") {
                              echo "<p> Entrer votre nom</p>";
                             } elseif ($_GET["error"] == "invalidnom"){
                                echo "<p>entrer que des lettre de l'alphabet et espace sont autorisés</p>";
                              
                            }
                          }
                      ?>
                      
                      </span>
                  </div>

                </div>
              </div>

              <div class="form-row col-lg-7">
                <div class="form-outline mb-4">
                  <input type="text" id="prenom" name="prenom" class="form-control" value="<?php if(isset($_POST['$prenom'])) echo $_POST['$prenom']; ?>" required="required" />
                  <label class="form-label" for="prenom">Prenom</label>
                    <div class="invalid-feedback">
                  <? php echo isset($_GET["error"] == "invalidnom") ?>
                  </div>

                </div>
              </div>

              <div class="form-row col-lg-7">
                <div class="form-outline mb-4">
                  <input type="mail" id="mail" name="mail" class="form-control" value="<?php if(isset($_POST['$mail'])) echo $_POST['$mail']; ?>" required="required" />
                  <label class="form-label" for="mail">Adreese-Mail</label>
                    <div class="invalid-feedback">
                    <? php echo isset($_GET["error"] == "invalidtel") ?>
                  </div>
                </div>
              </div>

              <div class="form-row col-lg-7">
                <div class="form-outline mb-4">
                  <input type="password" id="password" name="password" class="form-control"value="<?php if(isset($_POST['$password'])) echo $_POST['$password']; ?>" required="required" />
                  <label class="form-label" for="password">Mot de passe</label>
                    <div class="invalid-feedback">
                  <? php echo isset($_GET["error"] == "invalidpassword") ?>
                  </div>
                </div>
              </div>

              <div class="form-row col-lg-7">
                <div class="form-outline mb-4">
                  <input type="tel" id="telephone" name="telephone" class="form-control" value="<?php if(isset($_POST['$telephone'])) echo $_POST['$telephone']; ?>" required="required"/>
                  <label class="form-label" for="telephone">Telephone</label>
                    <div class="invalid-feedback">
                  <? php echo isset($_GET["error"] == "invalidtelephone") ?>
                  </div>
                </div>
              </div>

              <div class="form-row col-lg-7">
                <div class="form-outline mb-4">
                  <input type="text" id="job" name="job" class="form-control" value="<?php if(isset($_POST['$job'])) echo $_POST['$job']; ?>" required="required" />
                  <label class="form-label" for="job">Emploie</label>
                    <div class="invalid-feedback">
                  <? php echo isset($_GET["error"] == "invalidjob") ?>
                  </div>
                </div>
              </div>

              <div class="form-row col-lg-7">
                <div class="form-outline mb-4">
                  <input type="text" id="ville" name="ville" class="form-control" value="<?php if(isset($_POST['$ville'])) echo $_POST['$ville']; ?>" required="required"/>
                  <label class="form-label" for="ville">Ville</label>
                    <div class="invalid-feedback">
                  <? php echo isset($_GET["error"] == "invalidville") ?>
                  </div>
                </div>
              </div>









              <div class="form-row col-lg-7 groupe-button">
                <a href="https://www.paypal.com/fr/webapps/mpp/home" class="btn btn-primary btn-sm" data-mdb-ripple-color="#083b4c" style="border-color: white" type="button" name="payer" value="Payer">
                  Payer</a>
                <div class="form-outline mb-3">
                  <div class="button2"></div>
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
  <div class="footer">
    <div class="copyrigth">
      <a href='https://fr.freepik.com/vecteurs/ecole' id="foot">École vecteur créé par pch.vector - fr.freepik.com</a>
    </div>
  </div>


 
  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"></script>
</body>

</html>