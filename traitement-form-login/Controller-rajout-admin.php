<?php

require_once 'dbconnexion.php';
require_once 'fonction.php';

if (isset($_POST['submit'])){


    $mail = premier_Controle(($_POST["mail"]));
    $password = premier_Controle(($_POST["password"]));
    
    

if (admin_existe($conn, $mail) == !false){
  echo " Error";
    exit();
  }
  else{  
     
insertion_admin($conn, $mail, $password);

}

}

