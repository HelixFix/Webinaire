<?php 
/*define('Champ_Obligatoire', 'Ce champ doit etre rempli');
    $erreur = [];*/
include 'dbconnexion.php';
include 'fonction.php';

//declaration varaible
$nom = $prenom = $mail = $password = $telephone = $job = $ville ="";


if (isset($_POST['submit'])){

$nom = premier_Controle(($_POST["nom"]));
$prenom = premier_Controle(($_POST["prenom"]));
$mail = premier_Controle(($_POST["mail"]));
$password = premier_Controle(($_POST["password"]));
$telephone = premier_Controle(($_POST["telephone"]));
$job = premier_Controle(($_POST["job"]));
$ville = premier_Controle(($_POST["ville"]));


  //nom
  if (empty($nom) ){
         
      header("Location:/index.php?page=form-compte&error=invalidnomvide");
   
      exit();
      
      
  }
  
  elseif(!preg_match("/^[a-zA-Z]*$/", $nom)){
     
     header("Location:/index.php?page=form-compte&error=invalidnom");
   exit();
      }
  
  
  //prenom
  
  if (empty($prenom)){
      
       header("Location:/index.php?page=form-compte&error=invalideprenomvide");
   exit();
  }
  
  elseif(!preg_match("/^[a-zA-Z-']*$/", $prenom)){
     
     header("Location:/index.php?page=form-compte&error=invalidprenom");
   exit();
      };
  
   // mail
  
      if (empty($mail)){
     
      header("Location:/index.php?page=form-compte&error=invalidmailvide");
   exit();
  }
  elseif (!filter_var($mail,FILTER_VALIDATE_EMAIL)){
     
     header("Location:/index.php?page=form-compte&error=invalidmail");
     exit();
  }
  
  // password

  
if (empty($password)){
     
  header("Location:/index.php?page=form-compte&error=invalidpasswordvide");
exit();
}

elseif (strlen( $password) <= '8') {

header("Location:/index.php?page=form-compte&error=invalidpasswordc");
exit();


}
elseif(!preg_match("#[0-9]+#",$password)) {

header("Location:/index.php?page=form-compte&error=invalidpasswordn");
   exit();
}
elseif(!preg_match("#[A-Z]+#",$password)) {

header("/index.php?page=form-compte&error=invalidpasswordL");
  exit();
}
elseif(!preg_match("#[a-z]+#",$password)) {

header("Location:index.php?page=form-compte&error=invalidpasswordl");
   exit();
}
var_dump($password);

  
  // telephone
  if (empty($telephone)){
  
    header("Location:/index.php?page=form-compte&error=invalidtelvide");
   exit();
  }
  elseif(!is_numeric($telephone)){
    
     header("Location:/index.php?page=form-compte&error=invalidtel");
   exit();
      }
  
  
  
      //     emploie
  
  if (empty($job)){
    
     header("Location:/index.php?page=form-compte&error=invalidemploivide");
     exit();
  
  }
  elseif(!preg_match("/^[a-zA-Z-']*$/", $job)){
  ;
     header("Location:/index.php?page=form-compte&error=invalidemploi");
   exit();
      }
  
      // ville
  if (empty($ville)){
     
      header("Location:/index.php?page=form-compte&error=invalidvillevide");
   exit(); 
  }
  elseif(!preg_match("/^[a-zA-Z-']*$/", $ville)){
    
     header("Location:/index.php?page=form-compte&error=invalidville");
   exit();
      } 
  
  if (utilisateur_existe($conn, $mail) == !false){
    header("Location:/index.php?page=form-compte&error=mailexistedeja");
    exit();
  }
  else{  
     insertion_utilisateur($conn,$nom, $prenom, $mail, $password, $telephone, $job, $ville);} 
}

