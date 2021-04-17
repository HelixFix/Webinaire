
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

      <a href="index.php"><img class="logop" src="images/logop.png" alt="Logo Praxis"></a>
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
          
          if(isset($_GET["error"])) {

             /*****Error Nom ****/
              if($_GET["error"] == "invalidnomvide") {
                
                echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-white

                \" role=\"alert\" data-mdb-color=\"danger\">  Entrer votre nom !
              </div>";
               }
              
               elseif($_GET["error"] == "invalidnom"){


                echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-white

                \" role=\"alert\" data-mdb-color=\"danger\">  Nom: Entrer uniquement des lettres !
              </div>";
               }
                  
                
                /*****Error Prenom ****/
               if($_GET["error"] == "invalidprenomvide"){


                echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-white

                \" role=\"alert\" data-mdb-color=\"danger\">Entrer votre Prenom ! 
              </div>";
               }
                
              
              elseif ($_GET["error"] == "invalidprenom") {

                echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-white

                \" role=\"alert\" data-mdb-color=\"danger\"> Prenom : Entrer uniquement des lettres ! 
              </div>";
               
              }
              
              
               /*****Error Mail ****/
             if ($_GET["error"] == "invalidmailvide") {

              echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-white

              \" role=\"alert\" data-mdb-color=\"danger\">  Entrer votre Mail !
            </div>";
               
              } 
              elseif ($_GET["error"] == "invalidmail") {

                echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-white

                \" role=\"alert\" data-mdb-color=\"danger\">  format mail incorrecte
              </div>";
               
              } 

              
               /*****Error Password ****/
              if ($_GET["error"] == "invalidpasswordvide") {


                echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-white

                \" role=\"alert\" data-mdb-color=\"danger\">  Entrer votre mot de passe !
              </div>";
                
              } 
              
              
              elseif ($_GET["error"] == "invalidpasswordc") {


                 echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-white

                \" role=\"alert\" data-mdb-color=\"danger\">  Mot de passe : Il faut minimun 8 caractères !
              </div>";
                
              } 
              
              
              elseif ($_GET["error"] == "invalidpasswordn") {


                 echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-white

                \" role=\"alert\" data-mdb-color=\"danger\"> Mot de passe :Il faut minimun un nombre ! 
              </div>";
                
              } 

              elseif ($_GET["error"] == "invalidpasswordL") {


                 echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-white

                \" role=\"alert\" data-mdb-color=\"danger\">Mot de passe :Il faut minimun une majuscule !
              </div>";
                
              } 
              
              elseif ($_GET["error"] == "invalidpasswordl") {


                 echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-white

                \" role=\"alert\" data-mdb-color=\"danger\">Mot de passe :Il faut minimun 1 minuscule !   
              </div>";
                
              } 
              
              
              
               /*****Error Telephone ****/
              if ($_GET["error"] == "invalidtelvide") {


                 echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-white

                \" role=\"alert\" data-mdb-color=\"danger\"> Entrer votre numero de téléphone !
              </div>";
                
              } 
              elseif ($_GET["error"] == "invalidtel") {


                 echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-white

                \" role=\"alert\" data-mdb-color=\"danger\"> Telephone: Entrer que des chiffres !
              </div>";
                
              } 

               /*****Error Emploi ****/
              if ($_GET["error"] == "invalidemploivide") {


                 echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-white

                \" role=\"alert\" data-mdb-color=\"danger\">  Entrer le nom de votre emploi !
              </div>";
                
              }
              
              elseif ($_GET["error"] == "invalidemploi") {


                 echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-white

                \" role=\"alert\" data-mdb-color=\"danger\"> Emploi :Entrer uniquement des lettres !
              </div>";
                
              }
              

               /*****Error Ville ****/
              if ($_GET["error"] == "invalidvillevide") {


                 echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-white

                \" role=\"alert\" data-mdb-color=\"danger\">Entrer le nom de votre ville ! 
              </div>";
                
              } 
              
              elseif ($_GET["error"] == "invalidville") {


                 echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-white

                \" role=\"alert\" data-mdb-color=\"danger\">Ville :Entrer uniquement des lettres !
              </div>";
                
              } 
              

               /*****Error Recuperation ****/
              if ($_GET["error"] == "echecrecup") {

                 echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-white

                \" role=\"alert\" data-mdb-color=\"danger\"> Echec de la récuperation des données 
              </div>";
                              
                            } 

              elseif ($_GET["error"] == "echecenvoie") {


                 echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-white

                \" role=\"alert\" data-mdb-color=\"danger\"> Formulaire non recupérer !!
              </div>";
                
              } 
              
              
              
              elseif ($_GET["error"] == "mailexistedeja") {


                 echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-white

                \" role=\"alert\" data-mdb-color=\"danger\">  Le  Mail existe déjà choisir un nouveau mail !!
              </div>";
                
              } 
              
              elseif ($_GET["error"] == "reussite") 
              
              
               echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-white

                \" role=\"alert\" data-mdb-color=\"danger\"> Vous etes maintenant inscrit !!
              </div>";{
               
              }
            
            }
            ?>
            </span>



            <form action="traitement-form-login/controller-inscription.php" method="POST" class="groupe-form" novalidate Allow: OPTIONS, GET, HEAD, POST>
              <div class="form-row col-lg-7">
                <div class="form-outline mb-4">
                  <input type="text" id="nom" name="nom" class="form-control " value="<?php if(isset($_GET['$nom'])){echo $_GET['$nom'];}  ?>" required/>
                  <label class="form-label" for="nom">Nom</label>
                 
                </div>
              </div>

              <div class="form-row col-lg-7">
                <div class="form-outline mb-4">
                  <input type="text" id="prenom" name="prenom" class="form-control" value="<?php if(isset($_POST['$prenom'])){   echo $_POST['$prenom'];} ?>" required="required" />
                  <label class="form-label" for="prenom">Prenom</label>
                </div>
              </div>

              <div class="form-row col-lg-7">
                <div class="form-outline mb-4">
                  <input type="mail" id="mail" name="mail" class="form-control" value="<?php if(isset($_POST['$mail'])){   echo $_POST['$mail'];} ?>" required="required" />
                  <label class="form-label" for="mail">Adresse-Mail</label>
                </div>
              </div>

              <div class="form-row col-lg-7">
                <div class="form-outline mb-4">
                  <input type="password" id="password" name="password" class="form-control"value="<?php if(isset($_POST['$password'])){   echo $_POST['$password'];} ?>" required="required" />
                  <label class="form-label" for="password">Mot de passe</label>
                </div>
              </div>

              <div class="form-row col-lg-7">
                <div class="form-outline mb-4">
                  <input type="tel" id="telephone" name="telephone" class="form-control" value="<?php if(isset($_POST['$telephone'])){   echo $_POST['$telephone'];} ?>" required="required"/>
                  <label class="form-label" for="telephone">Telephone</label>
                </div>
              </div>

              <div class="form-row col-lg-7">
                <div class="form-outline mb-4">
                  <input type="text" id="emploi" name="emploi" class="form-control" value="<?php if(isset($_POST['$emploi'])){   echo $_POST['$emploi'];} ?>" required="required" />
                  <label class="form-label" for="emploi">Emploie</label>
                </div>
              </div>

              <div class="form-row col-lg-7">
                <div class="form-outline mb-4">
                  <input type="text" id="ville" name="ville" class="form-control" value="<?php if(isset($_POST['$ville'])){   echo $_POST['$ville'];} ?>" required="required"/>
                  <label class="form-label" for="ville">Ville</label>
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


