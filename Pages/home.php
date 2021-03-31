<!-- Background image -->
<div class="p-5 text-center bg-image">
    <div class=" mask" style="background-color: rgba(0, 0, 0, 0.6)">
        <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white">
                <h1 class="mb-3 h1Home">Journées Portes Ouvertes</h1>
                <!-- <h4 class="mb-3">Subheading</h4> -->
                <a class="btn btnHome btn-outline-light btn-lg" href="index.php?page=form-compte" role="button">S'inscrire</a>
            </div>
        </div>
    </div>
</div>
<!-- Background image -->
<br>

<body class="bodyHome">
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
            $date = utf8_encode(strftime("%A %d %B %G", strtotime($ligne['date'])));
        ?>


            <div class="col-lg-4 col-md-6 col-sm-6 col-12">

                <?php if (isset($_SESSION['user']['nom'])) { ?>

                    <!-- Supression -->
                    <a href="index.php?page=formwebinaire&idwebinaire=<?php echo $ligne['id']; ?>" class="btn btnhome"><img class="btn-supprimer" src="images\x-supp.png" alt="supprimer"></a>

                    <!-- Edition -->
                    <a href="index.php?page=formwebinaire&idwebinaire=<?php echo $ligne['id']; ?>" class="btn btnhome"><img class="btn-editer" src="images\edition.png" alt="editer"></a>
                <?php } ?>

                <div class="card">
                    <img class="card-img-top" src="https://loremflickr.com/640/360" alt="Card image cap">

                    <div class="card-body">
                        <p class=""><small class="text-muted">Diffusé le <?php echo $date ?></small></p>

                        <h3 class="card-title"><?php echo $ligne['nomLive'] ?></h3>

                        <p class="card-text clamp" onclick="(function(){classList.toggle('clamp')})()" ?><?php echo $ligne['resumer'] ?>
                        </p>

                        <a href="index.php?page=formwebinaire&idwebinaire=<?php echo $ligne['id']; ?>" class="btn btnHome">Rejoindre le webinaire</a>
                    </div>
                </div>
            </div>
        <?php } ?>

        <!-- Ajout -->
        <?php if (isset($_SESSION['user']['nom'])) { ?>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <a href="#" class="btn btnhome"><img class="btn-supprimer" src="images\x-supp.png" alt="supprimer"></a>

                <a href="#" class="btn btnhome"><img class="btn-editer" src="images\edition.png" alt="editer"></a>

                <div class="ajouter-webinaire">
                    <a href="form-edit.html" class="btn btnhome"><img class="btn-ajouter" src="images\add.png" alt="ajouter un webiniare"></a>
                </div>
            <?php } ?>

            <?php if (isset($_SESSION['user']['nom'])) echo "Ma variable de session " . $_SESSION['user']['nom']; ?>

            </div>
            <br>
</body>