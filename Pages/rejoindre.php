<?php 

if (!$_SESSION) { 
    header('Location: index.php?page=form-compte');
} else {

    $join = "INSERT INTO `participe`( `id`, `id_utilisateur`) 
    VALUES ('".$_GET['idwebinaire']."' , 9 )";

    $db->query($join); // Exécute la requete

    echo "Votre webinaire est maintenant dans la base.<br>";




}  ?>



