<!-- Background image -->
<div class="p-5 text-center bg-image">
    <div class=" mask" style="background-color: rgba(0, 0, 0, 0.6)">
        <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white">
                <h1 class="mb-3 h1Home">Journées Portes Ouvertes</h1>
                <!-- <h4 class="mb-3">Subheading</h4> -->
                <?php if (!$_SESSION) { ?>
                    <a class="btn btnHome btn-outline-light btn-lg" href="index.php?page=form-compte" role="button">S'inscrire</a>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<!-- Background image -->
<br>

<body class="bodyHome">
    <h2 id="webinaires">
        Les prochains webinaires
    </h2>

    <?php if (!$test) { ?>
        <p id="empty">Aucun événement à venir pour le moment</p>
    <?php } ?>



    <?php require_once 'editer.php'; ?>

    <?php
    if (isset($_SESSION['message'])) : ?>
        <div class="alert alert-<?= $_SESSION['msg_type'] ?>">
            <?php
            echo $_SESSION['message'];
            unset($_SESSION['message']);
            ?>
        </div>
    <?php endif ?>


    <div class="row">

                    <!-- Ajout -->

        <?php if (isset($_SESSION['admin']['mail'])) { ?>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="ajouter-webinaire">
                    <a href="index.php?page=form-edit" class="btn btnHome"><img class="btn-ajouter" src="images\add.png" alt="ajouter un webiniare"></a>
                </div>
            </div>
        <?php } ?>



        <?php
        while ($ligne = $tblWebinaire->fetch()) {
            // var_dump($ligne)
            $date = utf8_encode(strftime("%A %d %B %G", strtotime($ligne['date'])));

        ?>


            <div class="col-lg-4 col-md-6 col-sm-6 col-12">

                <?php if (isset($_SESSION['admin']['mail'])) { ?>

                    <!-- Supression -->


                    <a href="index.php?delete=<?php echo $ligne['id']; ?>" class="btn btnHome">
                        <img class="btn-supprimer" src="images\x-supp.png" alt="supprimer"></a>



                    <!-- Edition -->


                    <a href="index.php?page=form-edit&edit=<?php echo $ligne['id']; ?>" class="btn btnHome">
                        <img class="btn-editer" src="images\edition.png" alt="editer">
                    </a>



                   
                <?php } ?>

                <?php if (isset($_SESSION)) { ?>

                    <div class="card">

                    <img class="img-top" src="images\logo.jpg" height="150" width="150" alt="Card image cap">


                        <div class="card-body">

                            <p class=""><small class="text-muted">Sera diffusé le <?php echo $date ?> à <?php echo $ligne['heure'] ?></small></p>

                            <h3 class="card-title"><?php echo $ligne['nomLive'] ?></h3>

                            <p class="card-text clamp" onclick="(function(){classList.toggle('clamp')})()"><?php echo $ligne['resumer'] ?></p>

                            <a href="index.php?page=rejoindre&idwebinaire=<?php echo $ligne['id']; ?>" class="btn btnHome">Rejoindre le webinaire</a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>

        <!-- Ajout -->

        <br>
</body>