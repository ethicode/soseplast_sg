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
    <link rel="stylesheet" href="./public/assets/node_modules/html5-editor/bootstrap-wysihtml5.css" />
    <!-- Custom CSS -->
    <link href="./public/assets/icons/font-awesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="./public/dist/css/pages/file-upload.css" rel="stylesheet">
    <link rel="stylesheet" href="./public/assets/node_modules/dropify/dist/css/dropify.min.css">
    <!-- Custom CSS -->
    <link href="./public/assets/node_modules/footable/css/footable.bootstrap.min.css" rel="stylesheet">
    <!-- page css -->
    <link href="./public/dist/css/pages/footable-page.css" rel="stylesheet">
    <link href="./public/dist/css/pages/other-pages.css" rel="stylesheet">
    <link href="./public/dist/css/style.min.css" rel="stylesheet"><!-- page css -->
    <link href="./public/dist/css/pages/inbox.css" rel="stylesheet">

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
            <p class="loader__label">SOSEPLAST</p>
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

        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Profile</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Profile</li>
                            </ol>
                            <button type="button" class="btn btn-info d-none d-lg-block m-l-15 text-white"><i class="fa fa-plus-circle"></i> Create New</button>
                        </div>
                    </div>
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
                        <div class="card">
                            <div class="card-body p-t-0 p-b-0">
                                <div class="card b-all shadow-none">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div>
                                                <!-- <a href="javascript:void(0)"><img src="./public/assets/images/users/person.png" alt="user" width="40" class="img-circle" /></a> -->
                                            </div>
                                            <div class="p-l-10">
                                                <h4 class="m-t-10 fw-bold"><?php echo $user["name"] ?></h4>
                                                <!-- <small class="text-muted">From: jonathan@domain.com</small> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <hr class="m-t-0">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body inbox-panel">
                                <ul class="list-group list-group-full">
                                    <li class="list-group-item d-flex no-block align-items-center">
                                        <a href="javascript:void(0)" class="d-flex no-block align-items-center"> <i class="mdi mdi-email fs-4 me-2 d-flex justify-content-center"></i> <?php echo $user["email"] ?> </a>
                                    </li>
                                    <li class="list-group-item d-flex no-block align-items-center">
                                        <a href="javascript:void(0)" class="d-flex  no-block align-items-center"> <i class="mdi mdi-phone fs-4 me-2 d-flex align-items-center"></i> <?php echo $user["phone"] ?> </a>
                                    </li>
                                    <li class="list-group-item d-flex no-block align-items-center">
                                        <a href="javascript:void(0)" class="d-flex  no-block align-items-center"> <i class="mdi mdi-file-document-box fs-4 me-2 d-flex align-items-center"></i> Commandes </a><span class="badge bg-danger ms-auto"><?php echo count($commands) ?></span>
                                    </li>
                                    <!-- <li class="list-group-item d-flex no-block align-items-center ">
                                        <a href="javascript:void(0)" class="d-flex no-block align-items-center"> <i class="mdi mdi-file-document-box fs-4 me-2 d-flex align-items-center"></i> Dons </a><span class="badge bg-danger ms-auto">0</span></a>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-9 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">Mes commandes</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">Modifier mes informations</a> </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="home" role="tabpanel">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <!-- <h4 class="card-title">Contact Emplyee list</h4> -->
                                                        <h6 class="card-subtitle"></h6>
                                                        <div class="table-responsive">
                                                            <table id="demo-foo-addrow"
                                                                class="table table-bordered m-t-30 table-hover contact-list" data-paging="true"
                                                                data-paging-size="7">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Libellé</th>
                                                                        <th>Statut</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php foreach ($commands as $command): ?>
                                                                        <tr>
                                                                            <td><a href="javascript:void(0)"><?php echo $command["name"]; ?></a></td>
                                                                            <!-- <td><a href="javascript:void(0)"><?php echo $command["id"]; ?></a></td> -->
                                                                            <?php if ($command["is_validated"] === 1): ?>
                                                                                <td><span class="label label-success">Validé</span> </td>
                                                                            <?php elseif ($command["is_validated"] === null): ?>
                                                                                <td><span class="label label-inverse">En attente</span> </td>
                                                                            <?php else: ?>
                                                                                <td><span class="label label-danger">rejeté</span> </td>
                                                                            <?php endif ?>
                                                                        </tr>
                                                                    <?php endforeach ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--second tab-->
                                <div class="tab-pane" id="profile" role="tabpanel">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Full Name</strong>
                                                <br>
                                                <p class="text-muted">Johnathan Deo</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
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
    <!-- Footable -->
    <script src="./public/assets/node_modules/moment/moment.js"></script>
    <script src="./public/assets/node_modules/footable/js/footable.min.js"></script>
    <!--FooTable init-->
    <script src="./public/dist/js/pages/footable-init.js"></script><!-- This page plugins -->
    <!-- ============================================================== -->
    <script src="./public/dist/js/pages/jasny-bootstrap.js"></script>
    <!-- dropify -->
    <script src="./public/assets/node_modules/dropify/dist/js/dropify.min.js"></script>
    <!--Custom JavaScript -->
    <script src="./public/assets/node_modules/html5-editor/wysihtml5-0.3.0.js"></script>
    <script src="./public/assets/node_modules/html5-editor/bootstrap-wysihtml5.js"></script>
    <script src="./public/assets/node_modules/dropzone-master/dist/dropzone.js"></script>
    <script>
        $(document).ready(function() {

            $('.textarea_editor').wysihtml5();

        });
    </script>
    <script>
        $(document).ready(function() {
            // Basic
            $('.dropify').dropify();

            // Translated
            $('.dropify-fr').dropify({
                messages: {
                    default: 'Glissez-déposez un fichier ici ou cliquez',
                    replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                    remove: 'Supprimer',
                    error: 'Désolé, le fichier trop volumineux'
                }
            });

            // Used events
            var drEvent = $('#input-file-events').dropify();

            drEvent.on('dropify.beforeClear', function(event, element) {
                return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
            });

            drEvent.on('dropify.afterClear', function(event, element) {
                alert('File deleted');
            });

            drEvent.on('dropify.errors', function(event, element) {
                console.log('Has Errors');
            });

            var drDestroy = $('#input-file-to-destroy').dropify();
            drDestroy = drDestroy.data('dropify')
            $('#toggleDropify').on('click', function(e) {
                e.preventDefault();
                if (drDestroy.isDropified()) {
                    drDestroy.destroy();
                } else {
                    drDestroy.init();
                }
            })
        });
    </script>
</body>

</html>