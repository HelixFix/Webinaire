<div class="container">

    <header>

        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php?page=home"><img src="images/ESPS-58x58.jpg" alt=""></a>
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <!-- <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>-->

                        <?php if (isset($_SESSION['user']['id'])) { ?>
                            <li class="nav-item">
                                <!-- <a class="nav-link" href="index.php?page=listparticipe">Mes webinaires</a> -->
                                <a href="index.php?page=listparticipe">
                                    <div class="icon">
                                        <i class="fa fa-video" aria-hidden="true"></i>
                                        <i class="fa fa-video" aria-hidden="true"></i>
                                    </div>
                                    <div class="name"><span data-text="Mes webinaires">Mes webinaires</span></div>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <!-- <a class="nav-link" href="index.php?page=form-modfication&userID=<?php echo $_SESSION['user']['id']; ?>"><img height="58px" src="images/profile-default.svg"></img> -->
                                <a href="index.php?page=form-modfication&userID=<?php echo $_SESSION['user']['id']; ?>">
                                    <div class="icon">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                    </div>
                                    <div class="name"><span data-text="<?php echo $_SESSION['user']['nom']; ?>"><?php echo $_SESSION['user']['nom']; ?></span></div>
                                </a>
                            </li>
                            <!-- <li class="profil-text nav-item">
                                <a class="nav-link" href="index.php?page=form-modfication&userID=<?php echo $_SESSION['user']['id']; ?>">Mon profil
                                </a>
                            </li> -->
                        <?php } ?>
            
                    </ul>            <?php if (!$_SESSION) { ?>
                            <li class="btn btnHome nav-item" id="connect">
                                <a class="nav-link nav-link-home" href="index.php?page=login" tabindex="-1" aria-disabled="" style="padding-left: 32px; padding-right: 32px;">Se connecter</a>
                            </li>
                        <?php } else { ?>
                            <li class="btn btnHome nav-item" id="connect">
                                <a class="nav-link nav-link-home" href="index.php?page=deconnect" tabindex="-1" aria-disabled="" style="padding-left: 32px; padding-right: 32px;">Se déconnecter</a>
                            </li>
                        <?php } ?>
                </div>
            </div>
        </nav>
        <br>




    </header>