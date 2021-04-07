<?php
$requete2 = "SELECT * FROM participe, webinar WHERE participe.id_Utilisateur = ".$_SESSION['user']['id']." AND participe.id = webinar.id AND webinar.date >= CURDATE() ORDER BY `date` ";


$tblWebinaire = $db->query($requete2);

$tblWebinaire2 = $db->query($requete2);
$test = $tblWebinaire2->fetch();


include('menu.php');

?>

<body class="bodyHome">
    <h2>
        Mes webinaires
    </h2>

    <?php if (!$test) { ?>
        <p id="empty">Aucun événement suivi</p>
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
        while ($ligne = $tblWebinaire->fetch()) {

            // var_dump($ligneparticipe)
            $date = utf8_encode(strftime("%A %d %B %G", strtotime($ligne['date'])));
        ?>


            <div class="col-lg-4 col-md-6 col-sm-6 col-12">

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

                                <a target="_blank rel=noopener" href="<?php echo $ligne['lienZoom']; ?>" class="btn btnHome">Ouvrir le webinaire</a>
                            </div>
                        </div>
                    <?php } ?>
        
            </div>
        <?php } ?>

        <!-- Ajout -->

        <br>
</body>
<?php

include('footer.php');
