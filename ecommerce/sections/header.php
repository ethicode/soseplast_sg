<div class="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow py-2 py-md-3 px-lg-5 px-md-2">
        <div class="container-xxl">
            <!-- header rightbar icon -->
            <a class="text-danger h5 fw-bold" href="index.php">
                <img style="height: 40px;" src="assets/images/sg.png" alt="">
                RSE
            </a>
            <?php if (!isset($_SESSION["soseplast_user_id"])): ?>
                <div class="h-right d-flex align-items-center mr-lg-0 order-1">
                    <div class="dropdown user-profile ml-2 ml-sm-3 d-flex align-items-center zindex-popover me-5">
                        <!-- <div class="u-info me-2">
                            <p class="mb-0 text-end line-height-sm "><span class="font-weight-bold">Mon Compte</span></p>
                        </div> -->
                        <a class="nav-link dropdown-toggle pulse p-0 fw-bold" href="#" role="button" data-bs-toggle="dropdown" data-bs-display="static">
                            Mon Compte <i class="icofont-user fs-4"></i>
                        </a>
                        <div class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-end p-0 m-0">
                            <div class="card border-0 w280">
                                <div class="list-group m-2 ">
                                    <a href="index.php?action=signinForm" class="list-group-item list-group-item-action border-0 "><i class="icofont-ui-user fs-5 me-3"></i>Creer un compte</a>
                                    <a href="index.php?action=loginForm" class="list-group-item list-group-item-action border-0 "><i class="icofont-file-text fs-5 me-3"></i>Se connecter</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <div class="h-right d-flex align-items-center mr-lg-0 order-1">
            <button type="button" class="btn btn-dark fw-bold text-white position-relative me-5">
                Mes points
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    <?php echo $user['point']; ?>
                    <span class="visually-hidden">Mes points</span>
                </span>
            </button>
                    <div class="dropdown user-profile ml-2 ml-sm-3 d-flex align-items-center zindex-popover me-5">
                        <div class="u-info me-2">
                            <!-- <p class="mb-0 text-end line-height-sm "><span class="font-weight-bold">Mon Compte</span></p> -->
                            <?php if (isset($_SESSION["soseplast_user_id"])): ?>
                                <?php if ($_SESSION["role"] === "Collaborateur"): ?>
                                    <li class="nav-item"> <a class="nav-link  d-lg-block d-md-block waves-effect waves-dark text-white" href="index.php?action=mes-commandes"> <small>Mes commandes</small></a> </li>
                                <?php endif ?>
                            <?php endif ?>
                            <!-- <small>Admin Profile</small>    -->
                        </div>
                        <a class="nav-link dropdown-toggle pulse p-0 fw-bold" href="#" role="button" data-bs-toggle="dropdown" data-bs-display="static">
                            Mon Compte <i class="icofont-user fs-4"></i>
                        </a>
                        <div class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-end p-0 m-0">
                            <div class="card border-0 w280">
                                <div class="card-body pb-0">
                                    <div class="d-flex py-1">
                                        <div class="flex-fill ms-3">
                                            <p class="mb-0"><span class="font-weight-bold"><?php echo $_SESSION["name"]; ?></span></p>
                                        </div>
                                    </div>

                                    <div>
                                        <hr class="dropdown-divider border-dark">
                                    </div>
                                </div>
                                <div class="list-group m-2 ">
                                    <?php if ($_SESSION["role"] === "Administrateur"): ?>
                                        <a href="/soseplast/inventory/index.php?action=dashboard" class="list-group-item list-group-item-action border-0 "><i class="icofont-navigation-menu  fs-5 me-3"></i>Gestion de stock</a>
                                    <?php endif ?>
                                    <hr class="dropdown-divider border-dark">
                                    <a href="index.php?action=monCompte" class="list-group-item list-group-item-action border-0 "><i class="icofont-ui-user fs-5 me-3"></i>Mon compte</a>
                                    <a href="index.php?action=mes-commandes" class="list-group-item list-group-item-action border-0 "><i class="icofont-file-text fs-5 me-3"></i>Mes commandes</a>
                                    <a href="index.php?action=logout" class="list-group-item list-group-item-action border-0 "><i class="icofont-logout fs-5 me-3"></i>Se deconnecter </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif ?>
            <!-- menu toggler -->
            <button class="navbar-toggler p-0 border-0 menu-toggle order-3" type="button" data-bs-toggle="collapse" data-bs-target="#mainHeader">
                <span class="fa fa-bars"></span>
            </button>
        </div>
    </nav>
</div>
