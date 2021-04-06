<?php
$participe = "SELECT * FROM `participe` WHERE `id_utilisateur` = 9";

$tblparticipe = $db->query($participe);

$requete2 = " SELECT * FROM participe, webinar WHERE participe.id_Utilisateur = 9 AND participe.id = webinar.id ";


$tblWebinaire = $db->query($requete2);


include('menu.php');

?>

<body class="bodyHome">
    <h2>
        Les prochains webinaires
    </h2>

    <?php if (!$test) { ?>
        <p id="empty">Aucun événement à venir pour le moment</p>
    <?php } ?>


    <div class="row">

        <?php if (isset($_SESSION['admin']['nom'])) { ?>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="ajouter-webinaire">
                    <a href="index.php?page=form-edit" class="btn btnHome"><img class="btn-ajouter" src="images\add.png" alt="ajouter un webiniare"></a>
                </div>
            </div>
        <?php } ?>



        <?php
        while ($ligneparticipe = $tblparticipe->fetch()) {
            
                // var_dump($ligneparticipe)
                // $date = utf8_encode(strftime("%A %d %B %G", strtotime($date['date'])));
        ?>


                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <?php 
while ($ligne = $tblWebinaire->fetch()) { ?>
                    <?php if (isset($_SESSION['admin']['nom'])) { ?>

                        <!-- Supression -->
                        <a href="index.php?page=form-edit&idwebinaire=<?php echo $ligne['id']; ?>" class="btn btnHome"><img class="btn-supprimer" src="images\x-supp.png" alt="supprimer"></a>

                        <!-- Edition -->
                        <a href="index.php?page=form-edit&idwebinaire=<?php echo $ligne['id']; ?>" class="btn btnHome"><img class="btn-editer " src="images\edition.png" alt="editer"></a>
                    <?php } ?>

                    <?php if (isset($_SESSION)) { ?>

                        <div class="card">
                            <img class="card-img-top" src="https://loremflickr.com/640/360" alt="Card image cap">

                            <div class="card-body">
                                <p class=""><small class="text-muted">Diffusé le <?php echo $date ?></small></p>

                                <h3 class="card-title"><?php echo $ligne['nomLive'] ?></h3>

                                <p class="card-text clamp" onclick="(function(){classList.toggle('clamp')})()" ?><?php echo $ligne['resumer'] ?>
                                </p>

                                <a href="index.php?page=rejoindre&idwebinaire=<?php echo $ligne['id']; ?>" class="btn btnHome">Rejoindre le webinaire</a>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
                </div>
            <?php } ?>

            <!-- Ajout -->

            <br>
</body>
<?php

include('footer.php');
