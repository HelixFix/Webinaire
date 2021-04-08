<?php

include 'dbconnexion.php';
include 'validation.php';
//varaible definit avec aucune valeur null
 $mail = $password ="";


if (isset($_POST['submit'])){


$mail = premier_Controle(($_POST["mail"]));
$password = premier_Controle(($_POST["password"]));
$check = premier_Controle(($_POST["check"]));



 
  //  header("Location:Pages/form-compte.php?error=incorrect");
  
   if( $check == 0){

  


    deuxieme_controle_champ( $mail, $password);
    Login_user($conn,$mail,$password);

  }elseif ($check == 1){

  
 

  deuxieme_controle_champ( $mail, $password);
 Login_admin($conn,$mail,$password);


}

}
print_r($check);


 




    













