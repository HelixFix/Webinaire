
<?php 


if (isset($_SESSION['user']['id'])) {
 


 

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
      rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
      rel="stylesheet"
    />
    <!-- MDB -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css"
      rel="stylesheet"
    />
    <title>Modification</title>
  </head>
  <body class="corp">       
    <main>
 <div class="wrapper">
        <div class="container">
          <div class="row cadre">
              <div class=" picture d-flex justify-content-center" col-lg-5">
                 <img src="images/universite.jpg" alt="Image de etudiant praxis" class="img-fluid"/>
              </div>




              <div class="info d-flex justify-content-center">
             
  <?php
  
  
 include_once "traitement-form-login\dbconnexion.php";
 if (isset($_SESSION['user']['id'])) {

   $id = $_SESSION['user']['id'];
   $result2 = $conn->query("SELECT * FROM utilisateur WHERE id = $id") or die(mysqli_error($conn));

   $row2 = $result2->fetch_array();

  ?>

<?php

}
?>



<?php
          
          if(isset($_GET["error"])) {

             /*****Error Nom ****/
            
              
               if($_GET["error"] == "invalidnom"){


                echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-white

                \" role=\"alert\" data-mdb-color=\"danger\">  Nom : Entrer uniquement des lettres !
              </div>";
               }
                  
                
                /*****Error Prenom ****/
              
                
              
              elseif ($_GET["error"] == "invalidprenom") {

                echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-white

                \" role=\"alert\" data-mdb-color=\"danger\"> Prenom : Entrer uniquement des lettres ! 
              </div>";
               
              }
              
              
               /*****Error Mail ****/
             
              elseif ($_GET["error"] == "invalidmail") {

                echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-white

                \" role=\"alert\" data-mdb-color=\"danger\">  format mail incorrecte</div>";
               
              } 

              
               /*****Error Password ****/
              
              
              
              elseif ($_GET["error"] == "invalidpasswordc") {


                 echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-white

                \" role=\"alert\" data-mdb-color=\"danger\">  Mot de passe : Il faut minimun 8 caract??res !
              </div>";
                
              } 
              
              
              elseif ($_GET["error"] == "invalidpasswordn") {


                 echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-white

                \" role=\"alert\" data-mdb-color=\"danger\"> Mot de passe : Il faut minimun un nombre ! 
              </div>";
                
              } 

              elseif ($_GET["error"] == "invalidpasswordL") {


                 echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-white

                \" role=\"alert\" data-mdb-color=\"danger\">Mot de passe : Il faut minimun une majuscule !
              </div>";
                
              } 
              
              elseif ($_GET["error"] == "invalidpasswordl") {


                 echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-white

                \" role=\"alert\" data-mdb-color=\"danger\">Mot de passe : Il faut minimun 1 minuscule !   
              </div>";
                
              } 
              
              
              
               /*****Error Telephone ****/
             
              elseif ($_GET["error"] == "invalidtel") {


                 echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-white

                \" role=\"alert\" data-mdb-color=\"danger\"> Telephone: Entrer que des chiffres !
              </div>";
                
              } 

               /*****Error Emploi ****/
              
              
              elseif ($_GET["error"] == "invalidemploi") {


                 echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-white

                \" role=\"alert\" data-mdb-color=\"danger\"> Emploi : Entrer uniquement des lettres !
              </div>";
                
              }
              

               /*****Error Ville ****/
              
              
              elseif ($_GET["error"] == "invalidville") {


                 echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-white

                \" role=\"alert\" data-mdb-color=\"danger\">Ville : Entrer uniquement des lettres !
              </div>";
                
              } 
              

               /*****Error Recuperation ****/
              if ($_GET["error"] == "echecrecup") {

                 echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-white

                \" role=\"alert\" data-mdb-color=\"danger\"> Echec de la r??cuperation des donn??es 
              </div>";
                              
                            } 

              elseif ($_GET["error"] == "echecenvoie2") {


                 echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-white

                \" role=\"alert\" data-mdb-color=\"danger\"> Formulaire non envoyer !!
              </div>";
                
              } 
              
              
              
              elseif ($_GET["error"] == "mailexistedeja") {


                 echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-white

                \" role=\"alert\" data-mdb-color=\"danger\">  Le  Mail existe d??j?? choisissez un nouveau mail !!</div>";
                
              } 
              
              elseif ($_GET["error"] == "reussite") 
              
              
               echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-white

                \" role=\"alert\" data-mdb-color=\"danger\"> Vous etes maintenant inscrit !!
              </div>";{
               
              }
            
            }

          
            ?>


          
            <div class=" englobe col-lg-7 ">
                <h1 class="titre-creation">Modification</h1>
             <form action="traitement-form-login/controller-modification.php" method="POST" class="groupe-form" Allow: OPTIONS, GET, HEAD, POST>
                


             <div class="form-row col-lg-7 ">
                  
                   
                      <input type="hidden" id="id"  name="id" class="form-control" value="<?php echo $row2['id']?>" />
                    
                    
                  </div>

                <div class="form-row col-lg-7 ">
                    <div class="form-outline mb-4">
                      <input type="text" id="nom"  name="nom" class="form-control" value="<?php echo $row2['nom']?>" />
                      <label class="form-label" for="nom"> <?php echo $row2['nom']?></label>
                    </div>
                  </div>
                

                <div class="form-row col-lg-7">
                    <div class="form-outline mb-4">
                      <input type="text" id="prenom" name="prenom" class="form-control" value="<?php echo $row2['prenom']?> " />
                      <label class="form-label" for="prenom"><?php echo $row2['prenom']?> </label>
                    </div>
                  </div>
               

                <div class="form-row col-lg-7">
                    <div class="form-outline mb-4">
                      <input type="mail" id="mail" name="mail" class="form-control" value="<?php echo $row2['mail']?>" />
                      <label class="form-label" for="mail"><?php echo $row2['mail']?></label>
                    </div>
                  </div>
                

                <div class="form-row col-lg-7">
                    <div class="form-outline mb-4">
                      <input type="password" id="password" name="password" class="form-control" value=""/>
                      <label class="form-label" for="password"></label>
                    </div>
                  </div>
               

                <div class="form-row col-lg-7">
                 
                    <div class="form-outline mb-4">
                      <input type="tel" id="telephone" name="telephone" class="form-control" value="<?php echo $row2['telephone']?>" />
                      <label class="form-label" for="telephone"> <?php echo $row2['telephone']?></label>
                    </div>
                  </div>
                

                <div class="form-row col-lg-7">
                    <div class="form-outline mb-4">
                      <input type="text" id="emploi" name="emploi" class="form-control" value="<?php echo $row2['emploi']?>" />
                      <label class="form-label" for="emploi"><?php echo $row2['emploi']?></label>
                    </div>
                  </div>
                

                <div class="form-row col-lg-7">
                    <div class="form-outline mb-4">
                      <input type="text" id="ville" name="ville" class="form-control" value="<?php echo $row2['ville']?>" />
                      <label class="form-label" for="ville"><?php echo $row2['ville']?></label>
                    </div>
                  </div>
               

                <div class="form-row col-lg-7 groupe-button">
                    
                
                <div class="form-outline mb-4">
                    <div class="button3">
                        <input  class=" btn btn-primary btn-sm " data-mdb-ripple-color="#083b4c" 
                        style="border-color:white" type="submit" name="modifier"  />
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
        <a href="http://www.freepik.com" id="foot">Designed by pch.vector / Freepik</a> 
        </div>
</div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <!-- MDB -->
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"
    ></script>
  </body>
</html>
<?php
  }

  else {
    header('Location: index.php');
  }

 ?>