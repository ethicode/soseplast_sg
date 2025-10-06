<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./public/assets/images/favicon.png">
    <title>SOSEPLAST</title>
    <!-- Page CSS -->
    <link href="./public/dist/css/pages/contact-app-page.css" rel="stylesheet">
    <!-- Popup CSS -->
    <link href="./public/assets/node_modules/Magnific-Popup-master/dist/magnific-popup.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="./public/dist/css/style.min.css" rel="stylesheet">
    <link href="./public/dist/css/pages/user-card.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="skin-red fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Elite admin</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php require './views/sections/header.php' ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php
        if (isset($_SESSION['role']) && $_SESSION['role'] === 'Administrateur') {
            require './views/sections/sidebar.php';
        } else {
            require './views/sections/sidebar_2.php';
        }
        ?>

        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">

                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-3 col-xlg-3 col-md-5">
                        <div class="card el-element-overlay shadow-sm">
                            <div class="el-card-item p-0">
                                <div class="el-card-avatar el-overlay-1 m-0"> <img src="<?php echo $article["image_url"] != null ? $article["image_url"] : "./public/assets/images/no_image.jpg" ?>" alt="user" />
                                    <div class="el-overlay m-0">
                                        <ul class="el-info">
                                            <li><a class="btn default btn-outline image-popup-vertical-fit" href="<?php echo $article["image_url"] != null ? $article["image_url"] : "./public/assets/images/no_image.jpg" ?>"><i class="icon-magnifier"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="card shadow-sm">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="card el-element-overlay m-0">
                                        <div class="el-card-item p-0">
                                            <div class="el-card-avatar el-overlay-1 m-0"> <img src="<?php echo $article["image_1"] != null ? $article["image_1"] : "./public/assets/images/no_image.jpg" ?>" alt="user" />
                                                <div class="el-overlay m-0">
                                                    <ul class="el-info">
                                                        <li><a class="btn default btn-outline image-popup-vertical-fit" href="<?php echo $article["image_1"] != null ? $article["image_1"] : "./public/assets/images/no_image.jpg" ?>"><i class="icon-magnifier"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card el-element-overlay m-0">
                                        <div class="el-card-item p-0">
                                            <div class="el-card-avatar el-overlay-1 m-0"> <img src="<?php echo $article["image_2"] != null ? $article["image_2"] : "./public/assets/images/no_image.jpg" ?>" alt="user" />
                                                <div class="el-overlay m-0">
                                                    <ul class="el-info">
                                                        <li><a class="btn default btn-outline image-popup-vertical-fit" href="<?php echo $article["image_2"] != null ? $article["image_2"] : "./public/assets/images/no_image.jpg" ?>"><i class="icon-magnifier"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card el-element-overlay m-0">
                                        <div class="el-card-item p-0">
                                            <div class="el-card-avatar el-overlay-1 m-0"> <img src="<?php echo $article["image_3"] != null ? $article["image_3"] : "./public/assets/images/no_image.jpg" ?>" alt="user" />
                                                <div class="el-overlay m-0">
                                                    <ul class="el-info">
                                                        <li><a class="btn default btn-outline image-popup-vertical-fit" href="<?php echo $article["image_3"] != null ? $article["image_3"] : "./public/assets/images/no_image.jpg" ?>"><i class="icon-magnifier"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="card">
                            <div class="card-body">

                            </div>
                        </div> -->
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-9 col-xlg-9 col-md-7">
                        <div class="card shadow-sm">
                            <div class="card-body p-t-0">
                                <div class="card b-all shadow-none">
                                    <div class="card-body">
                                        <h3 class="card-title m-b-0"><?php echo $article["name"] ?></h3>
                                    </div>
                                    <div>
                                        <hr class="m-t-0">
                                    </div>
                                    <div class="card-body">
                                        <!-- <h4 class="font-bold">Description: </h4> -->
                                        <br>
                                        <h5><b><?php echo $article["description"] ?></b></h>
                                            <!-- </div><hr><div class="card-body py-0">
                                        <h4 class="font-bold">Catégoy : </h4>
                                        <h5><b><?php echo $article["category_name"] ?></b></h>
                                    </div> -->
                                            <hr>
                                            <div class="card-body py-0">
                                                <h4 class="font-bold">Point : </h4>
                                                <h5><b><?php echo $article["point"] ?></b></h>
                                            </div>
                                            <hr>
                                            <div class="card-body py-0">
                                                <h4 class="font-bold">Quantité : </h4>
                                                <h5><b><?php echo $article["quantity"] ?></b></h>
                                            </div>
                                            <hr>
                                            <!-- <div class="card-body py-0">
                                                <h4 class="font-bold">Valeur estimée : </h4>
                                                <h5><b><?php echo $article["price"] ?></b></h>
                                            </div>
                                            <hr> -->
                                            <div class="card-body">
                                                <?php if (isset($_SESSION["soseplast_user_id"])): ?>
                                                    <a type="button" class="btn waves-effect waves-light btn-info shadow" href="index.php?action=updatearticle&id=<?php echo $article["id"] ?>">Modifier</a>
                                                    <button type="button" class="btn waves-effect waves-light btn-danger shadow" data-bs-toggle="modal" data-bs-target="#command">Supprimer</button>
                                                <?php else: ?>
                                                    <a href="index.php?action=loginForm" class="btn waves-effect waves-light btn-danger btn-lg">Connectez-vous pour réserver cet article</a>
                                                <?php endif ?>
                                                <div id="command" class="modal fade in" tabindex="-1" role="dialog"
                                                    aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div action="index.php?action=deleteArticle" class="form-horizontal form-material">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title text-dark fw-bold" id="myModalLabel">Supprimer cet article</h4>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                        aria-hidden="true"></button>
                                                                </div>
                                                                <div class="modal-footer text-center">
                                                                    <input type="hidden" value="<?php echo $user["id"] ?>">
                                                                    <input name="id" type="hidden" value="<?php echo $article["id"] ?>">
                                                                    <a href="index.php?action=deleteArticle&id=<?php echo $article["id"] ?>" class="btn btn-danger waves-effect">CONFIRMER</a>
                                                                    <button type="button" class="btn btn-default waves-effect"
                                                                        data-bs-dismiss="modal">Annuler</button>
                                                                </div>
                                                            </div>
                                                            <!-- /.modal-content -->
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-dialog -->
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                    </div>
                    <!-- ============================================================== -->
                </div>
                <!-- ============================================================== -->
                <!-- End Container fluid  -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->
        <script src="./public/assets/node_modules/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="./public/assets/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <!-- slimscrollbar scrollbar JavaScript -->
        <script src="./public/dist/js/perfect-scrollbar.jquery.min.js"></script>
        <!--Wave Effects -->
        <script src="./public/dist/js/waves.js"></script>
        <!--Menu sidebar -->
        <script src="./public/dist/js/sidebarmenu.js"></script>
        <!--Custom JavaScript -->
        <script src="./public/dist/js/custom.min.js"></script>
        <!-- Magnific popup JavaScript -->
        <script src="./public/assets/node_modules/Magnific-Popup-master/dist/jquery.magnific-popup.min.js"></script>
        <script src="./public/assets/node_modules/Magnific-Popup-master/dist/jquery.magnific-popup-init.js"></script>
</body>

</html>