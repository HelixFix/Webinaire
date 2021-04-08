<?php

include 'dbconnexion.php';
include 'validation.php';
//varaible definit avec aucune valeur null
$nom = $prenom = $mail = $password = $telephone = $job = $ville ="";
if (isset($_POST['submit'])){

$nom = premier_Controle(($_POST["nom"]));
$prenom = premier_Controle(($_POST["prenom"]));
$mail = premier_Controle(($_POST["mail"]));
$password = premier_Controle(($_POST["password"]));
$telephone = premier_Controle(($_POST["telephone"]));
$job = premier_Controle(($_POST["job"]));
$ville = premier_Controle(($_POST["ville"]));


echo $nom , $prenom , $mail , $password , $telephone , $job, $ville;

/* verification de si ces les champs sont bien rempli*/


//nom
     if (empty($nom)){
       
         header("Location:/formulaire.php?error=invalidnomvide");
      
         exit();
         
         
     }
     
     elseif(!preg_match("/^[a-zA-Z]*$/", $nom)){
        
        header("Location:/formulaire.php?error=invalidnom");
      exit();
         }


//prenom

     if (empty($prenom)){
         
          header("Location:/formulaire.php?&error=invalideprenomvide");
      exit();
     }

     elseif(!preg_match("/^[a-zA-Z-']*$/", $prenom)){
        
        header("Location:/formulaire.php?&error=invalidprenom");
      exit();
         };

// //mail
     if (empty($mail)){
        
         header("Location:/formulaire.php?error=invalidmailvide");
      exit();
    }
    elseif (!filter_var($mail,FILTER_VALIDATE_EMAIL)){
        
        header("Location:/formulaire.php?error=invalidmail");
        exit();
    }

// //password


if (empty($password)){
     
        header("Location:/formulaire.php?error=invalidpasswordvide");
      exit();
    }

  elseif (strlen( $password) <= '8') {
     
      header("Location:/formulaire.php?error=invalidpasswordc");
     exit();
    
     
  }
  elseif(!preg_match("#[0-9]+#",$password)) {
      
      header("Location:/formulaire.php?error=invalidpasswordn");
         exit();
  }
  elseif(!preg_match("#[A-Z]+#",$password)) {
    
      header("Location:/formulaire.php?error=invalidpasswordL");
        exit();
  }
  elseif(!preg_match("#[a-z]+#",$password)) {
   
      header("Location:/formulaire.php?error=invalidpasswordl");
         exit();
  }



// //telephone
    if (empty($telephone)){
    
       header("Location:/formulaire.php?error=invalidtelvide");
      exit();
    }
    elseif(!is_numeric($telephone)){
       
        header("Location:/formulaire.php?error=invalidtel");
      exit();
         }


//     emploie

     if (empty($job)){
       
        header("Location:/formulaire.php?error=invalidemploievide");
        exit();
    
    }
    elseif(!preg_match("/^[a-zA-Z-']*$/", $job)){
     ;
        header("Location:/formulaire.php?error=invalidemploie");
      exit();
         }

// ville
    if (empty($ville)){
        
         header("Location:/formulaire.php?error=invalidvillevide");
      exit(); 
    }
    elseif(!preg_match("/^[a-zA-Z-']*$/", $ville)){
       
        header("Location:/formulaire.php?error=invalidville");
      exit();
         }

      if (utilisateur_existe($conn, $mail) == !false){
        header("Location:Pages/form-compte.php?error=mailexistedeja");
        exit();
      }
      else{  
         creation_utilisateur($conn,$nom, $prenom, $mail, $password, $telephone, $job, $ville);}

echo '<pre>';
print_r($declaration);
echo '</pre>';
}
