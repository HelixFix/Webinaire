<?php 

include 'dbconnexion.php';
include 'fonction.php';

//declaration varaible
$nom = $prenom = $mail = $password = $telephone = $emploi = $ville ="";


if (isset($_POST['modifier'])){
$id = $_POST["id"];
$nom = premier_Controle(($_POST["nom"]));
$prenom = premier_Controle(($_POST["prenom"]));
$mail = premier_Controle(($_POST["mail"]));
$password = premier_Controle(($_POST["password"]));
$telephone = premier_Controle(($_POST["telephone"]));
$emploi = premier_Controle(($_POST["emploi"]));
$ville = premier_Controle(($_POST["ville"]));
 




 // nom
 
  
  
  if(!preg_match("/^[a-zA-Z]*$/", $nom)){
     
     header("Location:../index.php?page=form-modification&userId=$id&error=invalidnom");
   exit();
      }
  
  
  //prenom
  
  
  elseif(!preg_match("/^[a-zA-Z-']*$/", $prenom)){
     
     header("Location:../index.php?page=form-modification&userId=$id&error=invalidprenom");
   exit();
      }
  
   //mail
  
  
  elseif (!filter_var($mail,FILTER_VALIDATE_EMAIL)){
     
     header("Location:../index.php?page=form-modification&userId=$id&error=invalidmail");
     exit();
  }
  
  //password


elseif (strlen( $password) <= 8) {

header("Location:../index.php?page=form-modification&userId=$id&error=invalidpasswordc");
exit();


}
elseif(!preg_match("#[0-9]+#",$password)) {

header("Location:../index.php?page=form-modification&userId=$id&error=invalidpasswordn");
   exit();
}
elseif(!preg_match("#[A-Z]+#",$password)) {

header("Location:../index.php?page=form-modification&userId=$id&error=invalidpasswordL");
  exit();
}
elseif(!preg_match("#[a-z]+#",$password)) {

header("Location:../index.php?page=form-modification&userId=$id&error=invalidpasswordl");
   exit();
}


  
  //telephone
 
  
  elseif(!is_numeric($telephone)){
    
     header("Location:../index.php?page=form-modification&userId=$id&error=invalidtel");
   exit();
      }
  
  
  
      //     emploie
  

  elseif(!preg_match("/^[a-zA-Z-']*$/", $emploi)){
  ;
     header("Location:../index.php?page=form-modification&userId=$id&error=invalidemploi");
   exit();
      }
  
      // ville

  elseif(!preg_match("/^[a-zA-Z-']*$/", $ville)){
    
     header("Location:../index.php?page=form-modification&userId=$id&error=invalidville");
   exit();
      } 
     
      else{

     modification_utilisateur($conn, $nom, $prenom, $mail, $password, $telephone, $emploi, $ville);

     

      }



    
  // }
  // else{


  // }


       
    


  }