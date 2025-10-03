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
                        <div class="u-info me-2">
                            <p class="mb-0 text-end line-height-sm "><span class="font-weight-bold">Mon Compte</span></p>
                        </div>
                        <a class="nav-link dropdown-toggle pulse p-0" href="#" role="button" data-bs-toggle="dropdown" data-bs-display="static">
                            <i class="icofont-user fs-4"></i>
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
                    <!-- <div class="dropdown notifications">
                                <a class="nav-link dropdown-toggle pulse" href="#" role="button" data-bs-toggle="dropdown">
                                    <i class="icofont-alarm fs-5"></i>
                                    <span class="pulse-ring"></span>
                                </a>
                                <div id="NotificationsDiv" class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-md-end p-0 m-0 mt-3">
                                    <div class="card border-0 w380">
                                        <div class="card-header border-0 p-3">
                                            <h5 class="mb-0 font-weight-light d-flex justify-content-between">
                                                <span>Notifications</span>
                                                <span class="badge text-white">06</span>
                                            </h5>
                                        </div>
                                        <div class="tab-content card-body">
                                            <div class="tab-pane fade show active">
                                                <ul class="list-unstyled list mb-0">
                                                    <li class="py-2 mb-1 border-bottom">
                                                        <a href="javascript:void(0);" class="d-flex">
                                                            <img class="avatar rounded-circle" src="assets/images/xs/avatar1.svg" alt="">
                                                            <div class="flex-fill ms-2">
                                                                <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Chloe Walkerr</span> <small>2MIN</small></p>
                                                                <span class="">Added New Product 2021-07-15 <span class="badge bg-success">Add</span></span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="py-2 mb-1 border-bottom">
                                                        <a href="javascript:void(0);" class="d-flex">
                                                            <div class="avatar rounded-circle no-thumbnail">AH</div>
                                                            <div class="flex-fill ms-2">
                                                                <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Alan Hill</span> <small>13MIN</small></p>
                                                                <span class="">Invoice generator </span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="py-2 mb-1 border-bottom">
                                                        <a href="javascript:void(0);" class="d-flex">
                                                            <img class="avatar rounded-circle" src="assets/images/xs/avatar3.svg" alt="">
                                                            <div class="flex-fill ms-2">
                                                                <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Melanie Oliver</span> <small>1HR</small></p>
                                                                <span class="">Orader Return RT-00004</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="py-2 mb-1 border-bottom">
                                                        <a href="javascript:void(0);" class="d-flex">
                                                            <img class="avatar rounded-circle" src="assets/images/xs/avatar5.svg" alt="">
                                                            <div class="flex-fill ms-2">
                                                                <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Boris Hart</span> <small>13MIN</small></p>
                                                                <span class="">Product Order to Toyseller</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="py-2 mb-1 border-bottom">
                                                        <a href="javascript:void(0);" class="d-flex">
                                                            <img class="avatar rounded-circle" src="assets/images/xs/avatar6.svg" alt="">
                                                            <div class="flex-fill ms-2">
                                                                <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Alan Lambert</span> <small>1HR</small></p>
                                                                <span class="">Leave Apply</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="py-2">
                                                        <a href="javascript:void(0);" class="d-flex">
                                                            <img class="avatar rounded-circle" src="assets/images/xs/avatar7.svg" alt="">
                                                            <div class="flex-fill ms-2">
                                                                <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Zoe Wright</span> <small class="">1DAY</small></p>
                                                                <span class="">Product Stoke Entry Updated</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <a class="card-footer text-center border-top-0" href="#"> View all notifications</a>
                                    </div>
                                </div>
                            </div> -->
                    <div class="dropdown user-profile ml-2 ml-sm-3 d-flex align-items-center zindex-popover me-5">
                        <div class="u-info me-2">
                            <p class="mb-0 text-end line-height-sm "><span class="font-weight-bold">Mon Compte</span></p>
                            <?php if (isset($_SESSION["soseplast_user_id"])): ?>
                                <?php if ($_SESSION["role"] === "Collaborateur"): ?>
                                    <li class="nav-item"> <a class="nav-link  d-lg-block d-md-block waves-effect waves-dark text-white" href="index.php?action=mes-commandes"> <small>Mes commandes</small></a> </li>
                                <?php endif ?>
                            <?php endif ?>
                            <!-- <small>Admin Profile</small>    -->
                        </div>
                        <a class="nav-link dropdown-toggle pulse p-0" href="#" role="button" data-bs-toggle="dropdown" data-bs-display="static">
                            <i class="icofont-user fs-4"></i>
                        </a>
                        <div class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-end p-0 m-0">
                            <div class="card border-0 w280">
                                <div class="card-body pb-0">
                                    <div class="d-flex py-1">
                                        <div class="flex-fill ms-3">
                                            <p class="mb-0"><span class="font-weight-bold">Massar</span></p>
                                            <small class=""><?php echo $_SESSION["name"];?></small>
                                        </div>
                                    </div>

                                    <div>
                                        <hr class="dropdown-divider border-dark">
                                    </div>
                                </div>
                                <div class="list-group m-2 ">
                                    <?php if ($_SESSION["role"] === "Administrateur"): ?>
                                        <a href="/soseplast/inventory/index.php?action=dashboard" class="list-group-item list-group-item-action border-0 "><i class="icofont-ui-user fs-5 me-3"></i>Gestion de stock</a>
                                    <?php endif ?>
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