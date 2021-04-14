
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="style.css" />
    <title>Se connecter</title>
  </head>

  <body class="body ">
<header>
<div class="logo">

<a href="index.php"><img class="logop" src="images/logop.png" alt="Logo Praxis"></a>
</div>
</header>
 
<main>
    <div class="container-fluid ">
           <div class="row justify-content-end w100 conten">
 <div class="col-md-4 col-sm-6 col-xs-12">





 
    <form action="traitement-form-login/controller-login.php" method="POST"  class="form-container bg "Allow: OPTIONS, GET, HEAD, POST>
    
      <h1 class="titre">Se Connecter</h1>
      <!--error condition-->
      
<!-- <div class="text-center mb-3  alert alert-danger erreur" role="alert" data-mdb-color="danger"> -->
<?php
if(isset($_GET["error"])) {

    if ($_GET["error"] == "champvidelog") {
                echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-white

                \" role=\"alert\" data-mdb-color=\"danger\">
              Entrer votre mail !</div>";
              } 
              elseif ($_GET["error"] == "maillog") {
                echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-white

                \" role=\"alert\" data-mdb-color=\"danger\">
              Mail incorrecte !</div>";
                
              } 
              
              
              elseif ($_GET["error"] == "passwordvidelog") {
                echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-white

                \" role=\"alert\" data-mdb-color=\"danger\">
                Entrer votre mot de passe !
              </div>";
                
               
              } 
             
              
              elseif ($_GET["error"] == "passwordlogh") {
                echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-white

                \" role=\"alert\" data-mdb-color=\"danger\">Mot de passe : il faut minimun 8 caractères !
              </div>";
                
                
              } 
              
              
              elseif ($_GET["error"] == "passwordlogn") {

                echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-white

                \" role=\"alert\" data-mdb-color=\"danger\">Mot de passe :  il faut minimun 1 nombre !
              </div>";
                
              } 

              elseif ($_GET["error"] == "passwordlogL") {
                 echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-white

                \" role=\"alert\" data-mdb-color=\"danger\">Mot de passe :  il faut minimun 1 majuscule !
              </div>";
                
               
              } 
              
              elseif ($_GET["error"] == "passwordlogn") {
                 echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-white

                \" role=\"alert\" data-mdb-color=\"danger\"> Mot de passe : il faut minimun 1 minuscule !
              </div>";
                
              
                            } 

                            elseif ($_GET["error"] == "echecrecupadmin") {
                               echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-white

                \" role=\"alert\" data-mdb-color=\"danger\">Echec de recuperation des données admin !
              </div>";
                
                              
                            } 

                            
                            elseif ($_GET["error"] == "loginadminexiste") {
                               echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-white

                \" role=\"alert\" data-mdb-color=\"danger\">Il n existe pas dans la base de donnee !
              </div>";
                
                              
                            } 
                            elseif ($_GET["error"] == "logininpaspareil") {
                               echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-white

                \" role=\"alert\" data-mdb-color=\"danger\"> Le mot de passe fournie ne sont pas identique !
              </div>";
                
                             
                            } 
                            
                elseif ($_GET["error"] == "loginincorrecte2") {
                   echo "<div class=\"text-center mb-3  alert alert-danger erreur bg-danger text-white

                \" role=\"alert\" data-mdb-color=\"danger\">Les identifiant fournis sont incorrecte !
              </div>";
                
                  
              
}
}
    
?>

<!-- </div> -->
        <!-- Email input -->
        <div class="form-outline mb-4">
          <input type="email" id="mail" name="mail" class="form-control  text-white "  />
          <label class="form-label" for="mail">Adresse mail</label>
        </div>
      
        <!-- Password input -->
        <div class="form-outline mb-4 champ">
          <input type="password" id="password" name="password" class="form-control controle-champ"  />
          <label class="form-label label" for="password">Mot de passe</label>
        </div>

        <!-- Lien -->
        <div class="row text-center mb-4">
          <div class="col-mb-1 lien">
            <!-- Checkbox -->
            <div class="col">
                <!-- Simple link -->
                <a class="a" href="#">Mot de passe oublié?</a>
              </div>
          </div>
      
          <div class="col-mb-1 lien">
            <!-- lien -->
            <a class="a" href="index.php?page=form-compte">Créer un compte</a>
          </div>
        </div>
      
        <!-- Submit button -->
   <div class="button-valider text-center mb-2">

      <button  type="submit" name=" submit" class=" btn btn-primary btn-sm " data-mdb-ripple-color="#083b4c" style="border-color:white">
      Se connecter</button>
      
   </div>
            <!-- checkbox -->
            <div class="d-flex form-check ">
            <input type="hidden" name="check" value="0">
            <input class="form-check-input" name="check" type="checkbox" value="1" id="check"/>
            <label class="form-check-label" for="check"> Admin</label>
          </div>
                
      </form>
 </div>





<div class="col-md-4 col-sm-4 col-xs-12"></div>
  </div>
 
    </div> 
</div>
</main>
<div class="footer1" >
<div class="copyright">
<!--Background du site freepik-->
   <a href="http://www.freepik.com" id="free">Designed by starline / Freepik</a>
</div>
 
</div>

    <!-- MDB -->
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"
    ></script>
  </body>
</html>
