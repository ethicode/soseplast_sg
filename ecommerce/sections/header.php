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
                    <a href="index.php?action=loginForm" class="btn btn-danger fw-bold text-white position-relative me-5">Se connecter</a>
                    <!-- <a href="index.php?action=signinForm" class="btn btn-danger fw-bold text-white position-relative me-5">Creer un compte</a> -->
                </div>
            <?php else: ?>
                <div class="h-right d-flex align-items-center mr-lg-0 order-1">
                    <div class="dropdown user-profile ml-2 ml-sm-3 d-flex align-items-center zindex-popover me-3">
                        <div class="u-info me-2">
                            <!-- <small>Admin Profile</small>    -->
                        </div>
                        <a class="btn btn-light dropdown-toggle text fw-bold" href="#" role="button" data-bs-toggle="dropdown" data-bs-display="static">
                            Mon Compte <i class="icofont-user fs-6"></i>
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
                                    <?php else: ?>
                                        <a href="index.php?action=monCompte" class="list-group-item list-group-item-action border-0 "><i class="icofont-ui-user fs-5 me-3"></i>Mon compte</a>
                                    <?php endif ?>
                                    <hr class="dropdown-divider border-dark">
                                    <a href="index.php?action=logout" class="list-group-item list-group-item-action border-0 "><i class="icofont-logout fs-5 me-3"></i>Se deconnecter </a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-danger fw-bold text-white position-relative me-4">
                        Mes points
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-black">
                            <?php echo $user['point']; ?>
                            <span class="visually-hidden">Mes points</span>
                        </span>
                    </button>
                    <a target="_blank" href="/soseplast/inventory/index.php?action=articles" class="btn btn-danger fw-bold text-white position-relative me-5">Admin</a>
                </div>
            <?php endif ?>
            <!-- menu toggler -->
            <button class="navbar-toggler p-0 border-0 menu-toggle order-3" type="button" data-bs-toggle="collapse" data-bs-target="#mainHeader">
                <span class="fa fa-bars"></span>
            </button>
        </div>
    </nav>
</div>