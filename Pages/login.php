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
    <form class="form-container bg ">
      <h1 class="titre">Se Connecter</h1>
        <!-- Email input -->
        <div class="form-outline mb-4">
          <input type="email" id="mail" class="form-control" required />
          <label class="form-label" for="mail">Adresse mail</label>
        </div>
      
        <!-- Password input -->
        <div class="form-outline mb-4 .champ">
          <input type="password" id="password" class="form-control controle-champ" required />
          <label class="form-label label" for="password">Mot de passe</label>
        </div>
      
        <!-- Lien -->
        <div class="row text-center mb-4">
          <div class="col-mb-1 lien">
            <!-- Checkbox -->
            <div class="col">
                <!-- Simple link -->
                <a class="a" href="#!">Mot de passe oublié?</a>
              </div>
          </div>
      
          <div class="col-mb-1 lien">
            <!-- lien -->
            <a class="a" href="#!">Créer un compte</a>
          </div>
        </div>
      
        <!-- Submit button -->
   <div class="button-valider text-center">

      <button  type="submit" class=" btn btn-primary btn-sm " data-mdb-ripple-color="#083b4c" style="border-color:white">Se connecter</button>
      
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
