<?php

include 'dbconnexion.php';
include 'fonction.php';
//varaible definit avec aucune valeur null
 $mail = $password ="";


if (isset($_POST['submit'])){


$mail = premier_Controle(($_POST["mail"]));
$password = premier_Controle(($_POST["password"]));
$check = premier_Controle(($_POST["check"]));


  
   if( $check == 0){

  


    controle_login( $mail, $password);
    Login_user($conn,$mail,$password);

  }elseif ($check == 1){

  
 

  controle_login( $mail, $password);
 Login_admin($conn,$mail,$password);


}

}