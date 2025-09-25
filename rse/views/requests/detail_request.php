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
    <title>SOSEPLAST RSE</title>
    <!-- Custom CSS -->
    <link href="./public/assets/icons/font-awesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="./public/dist/css/style.min.css" rel="stylesheet">
    <!-- page css -->
    <link href="./public/dist/css/pages/file-upload.css" rel="stylesheet">
        <link href="./public/assets/icons/font-awesome/css/all.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="skin-blue fixed-layout">
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
    <div id="main-wrapperc">
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
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class=" ">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor"></h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)"></a></li>
                                <li class="breadcrumb-item active"></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->

                <div class="row">
                    <div class="col-12">
                        <div class="card card-body shadow">
                            <h4 class="card-title">Détail de la demandet</h4>
                            <h5 class="card-subtitle"> Les fichiers à importer doivent être en format PDF </h5>
                            <hr>
                            <br>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <div>
                                        <div class="form-group">
                                            <label class="form-label">Demande formelle</label>
                                            <textarea disabled required name="text_1" class="form-control" rows="5"><?php echo $request["text_1"]?></textarea>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label class="form-label">Description détaillée du projet</label>
                                            <textarea disabled required name="text_2" class="form-control" rows="5"><?php echo $request["text_2"]?></textarea>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="exampleInputEmail" class="form-label">Budget prévisionnel</label>
                                            <textarea disabled name="text_3" class="form-control" rows="5"><?php echo $request["text_3"]?></textarea>
                                            <input type="hidden" name="user_id" value="<?php echo $user["id"]?>">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="exampleInputEmail" class="form-label">Justificatif de l'association ou de la structure porteuse (Obligatoire)</label>
                                            <h6 class="card-subtitle"> Status, enregistrement officiel, ou autre document prouvant la légitimité de l'organisation </h6>
                                            <input disabled name="fichier" class="form-control" type="file" id="formFile">
                                        </div>
                                        <br>
                                        <hr>
                                        <button type="submit" class="btn btn-danger btn-lg me-2 text-white">ANNULER LA DEMANDE</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
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
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <script src="./public/dist/js/pages/jasny-bootstrap.js"></script>
</body>

</html>