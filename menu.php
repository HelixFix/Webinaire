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
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li> -->
                        <?php if (isset($_SESSION['user']['nom'])) { ?>
                            <li class="profil">
                                <a class="nav-link" href="index.php?page=form-modfication"><img height="58px" src="images/profile-default.svg"></img>
                                </a>
                            </li>
                        <?php } ?>
                        <?php if (!$_SESSION) { ?>
                            <li class="btn btnHome" id="connect">
                                <a class="nav-link nav-link-home" href="index.php?page=login" tabindex="-1" aria-disabled="" style="padding-left: 32px; padding-right: 32px;">Se connecter</a>
                            </li>
                        <?php } else { ?>
                            <li class="btn btnHome" id="connect">
                                <a class="nav-link nav-link-home" href="index.php?page=deconnect" tabindex="-1" aria-disabled="" style="padding-left: 32px; padding-right: 32px;">Se déconnecter</a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>
        <br>




    </header>