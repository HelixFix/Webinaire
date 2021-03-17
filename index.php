<?php
$db = new PDO('mysql:host=localhost;dbname=webinaire', 'root', '');

$requete = "SELECT * FROM `webinar` WHERE `date` >= CURDATE()";


$tblWebinaire = $db->query($requete); // Enregistre la requete efectuer sur la db dans une variable
// var_dump($tblWebinaire);

$tblWebinaire2 = $db->query($requete);
$test = $tblWebinaire2->fetch();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
    <title>Webinaire</title>
</head>
<div class="container">

    <header>

        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="images/ESPS-58x58.jpg" alt=""></a>
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <!-- <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li> -->
                        <li class="btn" id="connect">
                            <a class="nav-link" href="login.html" tabindex="-1" aria-disabled="" style="padding-left: 32px; padding-right: 32px;">Se connecter</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <br>
        <!-- Background image -->
        <div class="p-5 text-center bg-image">
            <div class=" mask" style="background-color: rgba(0, 0, 0, 0.6)">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="text-white">
                        <h1 class="mb-3">Journées Portes Ouvertes </h1>
                        <!-- <h4 class="mb-3">Subheading</h4> -->
                        <a class="btn btn-outline-light btn-lg" href="form-compte.html" role="button">Inscription</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Background image -->
        <br>



    </header>

    <body>
        <h2>
            Les prochains webinaires
        </h2>

        <?php if (!$test) { ?>
            <p id="empty">Aucun événement à venir pour le moment</p>
        <?php } ?>


        <div class="row">
            <?php

            while ($ligne = $tblWebinaire->fetch()) {
                // var_dump($ligne)
            ?>

                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card">
                        <img class="card-img-top" src="https://loremflickr.com/640/360" alt="Card image cap">
                        <div class="card-body">
                            <p class=""><small class="text-muted">Diffusé le <?php echo $ligne['date'] ?></small></p>
                            <h5 class="card-title"><?php echo $ligne['nomLive'] ?></h5>
                            <p class="card-text"><?php echo $ligne['resumer'] ?></p>
                            <a href="index.php?page=formwebinaire&idwebinaire=<?php echo $ligne['id']; ?>" class="btn">Rejoindre le webinaire</a>
                        </div>
                    </div>
                </div>
            <?php } ?>


            <!-- <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="card">
                    <img class="card-img-top" src="https://loremflickr.com/640/360" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional
                            content.
                        </p>
                        <a href="#" class="btn">Rejoindre le webinaire</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="card">
                    <img class="card-img-top" src="https://placekitten.com/640/360" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This card has even longer content than the first to show that equal
                            height
                            action.</p>
                        <a href="#" class="btn">Rejoindre le webinaire</a>
                    </div>
                </div>
            </div> -->
        </div>
        <br>
    </body>

    <footer>
        <footer class="text-center text-lg-start">
            <!-- Grid container -->
            <div class="container p-4">
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Où nous trouver ?</h5>

                        <p>
                            <b>
                                SITE SCHLUMBERGER - Siège social
                            </b>
                        </p>

                        <p>
                            4 rue Schlumberger 68200 Mulhouse
                        </p>

                        <p>
                            <b>
                                SITE KENNEDY
                            </b>
                        </p>

                        <p>
                            22 avenue Kennedy 68200 Mulhouse
                        </p>

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Contact </h5>

                        <p>
                            Sabrina Tedjiza, Assistante de formation
                        </p>

                        <p>
                            s.tedjiza@praxis.alsace
                        </p>

                        <p>
                            03 89 60 67 85
                        </p>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2020 Copyright:
                <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
            </div>
            <!-- Copyright -->
        </footer>
    </footer>
</div>
<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"></script>

</html>