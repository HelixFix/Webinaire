<?php

require_once 'dbconnexion.php';
require_once 'validation.php';

if (isset($_POST['submit'])){


    $mail = premier_Controle(($_POST["mail"]));
    $password = premier_Controle(($_POST["password"]));
    
    

if (verife($conn, $mail) == !false){
  echo "c est faux";
    exit();
  }
  else{  
     
creation($conn, $mail, $password);

}
var_dump($_POST);
}

