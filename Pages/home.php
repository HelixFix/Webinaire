

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
                $date = utf8_encode(strftime("%A %d %B %G", strtotime($ligne['date'])));
            ?>

                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card">
                        <img class="card-img-top" src="https://loremflickr.com/640/360" alt="Card image cap">
                        <div class="card-body">
                            <p class=""><small class="text-muted">Diffusé le <?php echo $date ?></small></p>
                            <h3 class="card-title"><?php echo $ligne['nomLive'] ?></h3>
                            <p class="card-text clamp" onclick="(function(){classList.toggle('clamp')})()" ?><?php echo $ligne['resumer'] ?>
                            </p>


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