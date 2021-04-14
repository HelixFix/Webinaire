
<?php

include 'dbconnexion.php';

//***Controle des valeurs entrées****//
function premier_Controle($dataclean)
{
  //trim
  $dataclean = trim($dataclean);
  $dataclean = stripslashes($dataclean);
  $dataclean = htmlspecialchars($dataclean);

  return $dataclean;
}

//**************************** Fonction utilisateur************************************ */


function utilisateur_existe($conn, $mail){

  $sql = "SELECT * FROM utilisateur WHERE  mail = ?;";
  /* c'est pour securiser le code contre les attaques injection
  on a preparé la declration on va combiner l intruction sql a la declaration */
  $declaration = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($declaration, $sql)) {
    header("Location:/index.php?page=form-compte&error=echecrecup");
    exit();
  }

  mysqli_stmt_bind_param($declaration, "s", $mail);
  mysqli_stmt_execute($declaration);
  /*on verifier si on recupere un resultat et si c'est le cas alors le alors le resulat
 true alors mla fonction sera exécuter parque un utilisateur existe alors il devra utiliser 
 d'autre valeur */
  //si on recuperer la valeur = true cela veut dire qu il existe deja

  $resultData = mysqli_stmt_get_result($declaration);
  //on a créer un varaible row juste pour prendre les valeurs true et false
  //si on obtien false c'est parfait pour formulaire  
  if ($row = mysqli_fetch_assoc($resultData)) {
    
    return $row;
  } else {
    $result = false;
    return $result;
  }
  mysqli_close($declaration);
}


 


       /* $sql = "SELECT * FROM personne WHERE nom= ''".$_POST['mail']."'");
        if(mysqli_num_rows($sql)){
            exit('ce nom d'utilisateur existe déjà');*/
    


  function insertion_utilisateur($conn, $nom, $prenom, $mail, $password, $telephone, $emploi, $ville)
{

  //Declaration preparer 


  $sql = "INSERT INTO utilisateur (nom, prenom, mail, motDePasse, telephone, emploi, ville, dateIncription) VALUES(?, ?, ?, ?, ?, ?, ?, NOW())";
  $declaration = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($declaration, $sql)) {

    header("Location:../index.php?page=form-compte&error=echecenvoie");
    exit();
  } else {
    $hashpassword = password_hash($password, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($declaration, "sssssss", $nom, $prenom, $mail, $hashpassword, $telephone, $emploi, $ville);
    mysqli_stmt_execute($declaration);
    // echo "Hashpass: $nom <br>";
    // echo "Hashpass: $prenom <br>";
    // echo "Hashpass: $mail <br>";
    // echo "Hashpass: $password <br>";
    // echo "Hashpass: $telephone <br>";
    // echo "Hashpass: $emploi <br>";
    // echo "Hashpass: $ville <br>";
    echo "Hashpass: $hashpassword <br>";
    header("Location:../index.php?page=login");
    mysqli_stmt_close($declaration);
    
  }
}



function modification_utilisateur($conn, $nom, $prenom, $mail, $password, $telephone, $emploi, $ville)
{
  
 $email = $_POST['mail'];
 $id = $_POST['id'];
 
  //Declaration preparer
  $sql = "UPDATE utilisateur SET nom = ?, prenom = ?, mail = ? , motDePasse= ?, telephone = ?,
  emploi = ?, ville = ?  WHERE id = $id  ;";
   $declaration = mysqli_stmt_init($conn);
   if (!mysqli_stmt_prepare($declaration, $sql)) {

    header("Location:../index.php?page=form-modification&userId=$id&error=echecenvoie2");
  
     exit();
   }
   
   else {
     $hashpassword = password_hash($password, PASSWORD_DEFAULT);
     mysqli_stmt_bind_param($declaration, "sssssss", $nom, $prenom, $mail, $hashpassword, $telephone, $emploi, $ville);
     mysqli_stmt_execute($declaration);
     header("Location:Location:../index.php");
     
     

     if($mail !== $_GET['userId']){
      session_start();
      session_unset();
      session_destroy();
     header("Location:../index.php?page=login");
     }
     
     mysqli_stmt_close($declaration);
     
   }

   
}





 


//*****************************Function login utilisateur et admin************************************ */
//controle des entrées
function controle_login($mail, $password)
{




  if (empty($mail)) {

    header("Location:../index.php?page=login&error=champvidelog");
    exit();
  } elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {

    header("Location:../index.php?page=login&error=maillog");
    exit();
  }

  // //password


  if (empty($password)) {

    header("Location:../index.php?page=login&error=passwordvidelog");
    exit();
  } elseif (strlen($password) <= '8') {

    header("Location:../index.php?page=login&error=passwordlogh");
    exit();
  } elseif (!preg_match("#[0-9]+#", $password)) {

    header("Location:../index.php?page=login&error=passwordlogn");
    exit();
  } elseif (!preg_match("#[A-Z]+#", $password)) {

    header("Location:../index.php?page=login&error=passwordlogL");
    exit();
  } elseif (!preg_match("#[a-z]+#", $password)) {

    header("Location:../index.php?page=login&error=passwordlogn");
    exit();
  }
}

//Login utilisateur
function Login_user($conn, $mail, $password)
{
  //on verifie si elle existe dans la base de donnée
  $userexiste = utilisateur_existe($conn, $mail);

  if ($userexiste === false) {

    header("Location:../index.php?page=login&error=loginincorrecte");
    exit();
  }

  //on verifie que le password de l utilisateur est égal au passwordcrypté dans la base de donnée
  //et on utlise un tableau associative qui veut dire qu on fera la recherche par le nom colonne
  $passwordhashes = $userexiste["motDePasse"];
  //on compare les deux mot de passe 
  $checkpassword = password_verify($password, $passwordhashes);
  if ($checkpassword === false)
    header("Location:../index.php?page=login&error=loginincorrecte2");
  else if ($checkpassword === true) {

    session_start();

    $_SESSION["user"]["mail"] = $userexiste["mail"];
    $_SESSION["user"]["id"] = $userexiste["id"];
    $_SESSION['user']['nom'] = $userexiste["nom"];
    header("Location:../index.php");
    exit();
  }
}



//*********************************Admin*************************************** */ */


//login admin
function Login_admin($conn, $mail, $password)
{

    
  //on verifie si elle existe dans la base de donnée
  $adminexiste = admin_existe($conn, $mail);

  if ($adminexiste === false) {

    header("Location:../index.php?page=login&error=loginadminexiste");
    exit();
  }

  //on verifie que le password de l utilisateur est égal au passwordcrypté dans la base de donnée
  //et on utlise un tableau associative qui veut dire qu on fera la recherche par le nom colonne
  $passwordhashes = $adminexiste["motDePasse"];
  //on compare les deux mot de passe 
  $checkpassword = password_verify($password, $passwordhashes);
  if ($checkpassword === false) {

    header("Location:../index.php?page=login&error=logininpaspareil");
  } else if ($checkpassword === true) {

    session_start();

    $_SESSION["admin"]['mail'] = $adminexiste["mail"];
    header("location:../index.php");
    exit();
  }
}

function admin_existe($conn, $mail)
{




  $sql = "SELECT * FROM  admins WHERE  mail = ?;";
  /* c'est pour securiser le code contre les attaques injection
  on a preparé la declration on va combiner l intruction sql a la declaration */
  $declaration = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($declaration, $sql)) {
    header("Location:../index.php?page=login&error=echecrecupadmin");
    exit();
  }

  mysqli_stmt_bind_param($declaration, "s", $mail);
  mysqli_stmt_execute($declaration);

  $resultDataAdmin = mysqli_stmt_get_result($declaration);

  if ($result = mysqli_fetch_assoc($resultDataAdmin)) {

    return $result;
  } else {

    $result = false;
    return $result;
  }

  
}

//*******************************Function  Ajout Admin********************************* */

function insertion_admin($conn, $mail, $password)
{

  //Declaration preparer 


  $sql = "INSERT INTO admins ( mail, motDePasse) VALUES(?, ?) ";
  $declaration = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($declaration, $sql)) {

    header("Location:/index.php?page=ajout-admin&error=echecenvoie");
    exit();
  } else {
    $hashpassword = password_hash($password, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($declaration, "ss",  $mail, $hashpassword);
    mysqli_stmt_execute($declaration);
    header("Location:../index.php?page=login");
    mysqli_stmt_close($declaration);
  }
}