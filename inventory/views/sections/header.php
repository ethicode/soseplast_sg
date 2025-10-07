<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <!-- ============================================================== -->
        <!-- Logo -->
        <!-- ============================================================== -->
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php?action=dashboard">
                <!-- Logo icon --><b>
                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                    <!-- Dark Logo icon -->
                    <img src="/incident/assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                    <!-- Light Logo icon -->
                    <!-- <img src="/incident/assets/images/logo-light-icon.png" alt="homepage" class="light-logo" /> -->
                </b>
                <!--End Logo icon -->
                <span class="hidden-xs"><span class="font-bold">SOSEPLAST
            </a>
        </div>
        <div class="navbar-collapse">
            <ul class="navbar-nav me-auto">
                <!-- This is  -->
                <li class="nav-item"> <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                <li class="nav-item"> <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark" href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
                <?php if (isset($_SESSION["soseplast_user_id"])): ?>
                    <?php if ($_SESSION["role"] === "Collaborateur"): ?>
                    <li class="nav-item"> <a class="nav-link  d-lg-block d-md-block waves-effect waves-dark text-white" href="index.php?action=mes-commandes"> <small>Mes commandes</small></a> </li>
                <?php endif ?>
                <?php endif ?>
            </ul>
            <ul class="navbar-nav my-lg-0">
                <?php if (isset($_SESSION["role"])): ?>
                    <?php if ($_SESSION["role"] === "Administrateur"): ?>
                        <li class="nav-item dropdown u-pro">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><button class="btn btn-dark hidden-md-down text-white fw-bold">Admin &nbsp;<i class="ti-angle-down"></i></button> </a>
                            <div class="dropdown-menu dropdown-menu-end flipInY">
                                <a href="index.php?action=dashboard" class="dropdown-item"><i class="ti-wallet"></i> Dashboard</a>
                                <a href="index.php?action=monCompte" class="dropdown-item"><i class="ti-wallet"></i> Mon compte</a>
                                <a href="index.php?action=logout" class="dropdown-item"><i class="fa fa-power-off"></i> Se déconnecter</a>
                            </div>
                        </li>
                    <?php else: ?>
                        <!-- <ul class="navbar-nav me-auto">
                            <li class="nav-item"> <a class="nav-link  d-lg-block d-md-block waves-effect waves-dark text-white" href="index.php?action=mes-commandes"> <small>Mes commandes</small></a> </li>
                        </ul> -->
                        <li class="nav-item dropdown u-pro">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="hidden-md-down">Mon compte &nbsp;<i class="ti-angle-down"></i></span> </a>
                            <div class="dropdown-menu dropdown-menu-end animated flipInY">
                                <!-- text-->
                                <a href="index.php?action=mes-commandes" class="dropdown-item"><i class="ti-wallet"></i> Mes commandes</a>
                                <!-- text-->
                                <a href="index.php?action=logout" class="dropdown-item"><i class=" fas fa-outdent"></i> Se déconnecter</a>
                                <!-- text-->
                            </div>
                        </li>
                    <?php endif ?>
                <?php else: ?>
                    <li class="nav-item dropdown u-pro">
                        <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="hidden-md-down fw-bold text-light">Mon compte &nbsp;<i class="ti-angle-down"></i></span> </a>
                        <div class="dropdown-menu dropdown-menu-end animated flipInY">
                            <!-- text-->
                            <a href="index.php?action=loginForm" class="dropdown-item"><i class="ti-user"></i> Se connecter</a>
                            <!-- text-->
                            <a href="index.php?action=signinForm" class="dropdown-item"><i class="ti-wallet"></i> Créer un compte</a>
                            <!-- text-->
                        </div>
                    </li>
            </ul>
        <?php endif ?>
        </div>
    </nav>
</header>