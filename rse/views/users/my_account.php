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
    <link href="./public/dist/css/pages/footable-page.css" rel="stylesheet">
    <link href="./public/dist/css/style.min.css" rel="stylesheet"><!-- page css -->
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
                                        <a href="javascript:void(0)" class="d-flex  no-block align-items-center"> <i class="mdi mdi-file-document-box fs-4 me-2 d-flex align-items-center"></i> Demandes </a><span class="badge bg-danger ms-auto">2</span>
                                    </li>
                                    <li class="list-group-item d-flex no-block align-items-center ">
                                        <a href="javascript:void(0)" class="d-flex no-block align-items-center"> <i class="mdi mdi-file-document-box fs-4 me-2 d-flex align-items-center"></i> Dons </a><span class="badge bg-danger ms-auto">0</span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="button-group">
                                    <a href="index.php?action=faireUneDemande" type="button" class="btn waves-effect waves-light btn-info">Nouvelle demande</a>
                                    <!-- <button type="button" class="btn waves-effect waves-light btn-secondary" data-bs-toggle="modal" data-bs-target="#responsive-modal2">Don en numéraire</button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-9 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">Mes demandes</a> </li>
                                <!-- <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">fichiers</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#settings" role="tab">---</a> </li> -->
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
                                                                        <th>Identification</th>
                                                                        <th>Objet</th>
                                                                        <th>Statut</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php foreach ($requests as $request): ?>
                                                                        <tr>
                                                                            <td><a href="index.php?action=demande&uuid=<?php echo $request["uuid"]; ?>" class="text-dark"><?php echo $request["uuid"]; ?></a></td>
                                                                            <td><a href="javascript:void(0)" class="text-dark font-bold"><?php echo substr($request["text_1"], 0, 40);echo "..."; ?></a></td>
                                                                            <?php if ($request["is_validated"] === 1): ?>
                                                                                <td><span class="label label-success">Validé</span> </td>
                                                                            <?php elseif ($request["is_validated"] === null): ?>
                                                                                <td><span class="label label-danger">En attente</span> </td>
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
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Mobile</strong>
                                                <br>
                                                <p class="text-muted">(123) 456 7890</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Email</strong>
                                                <br>
                                                <p class="text-muted">johnathan@admin.com</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6"> <strong>Location</strong>
                                                <br>
                                                <p class="text-muted">London</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <p class="m-t-30">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <h4 class="font-medium m-t-30">Skill Set</h4>
                                        <hr>
                                        <h5 class="m-t-30">Wordpress <span class="pull-right">80%</span></h5>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                                        </div>
                                        <h5 class="m-t-30">HTML 5 <span class="pull-right">90%</span></h5>
                                        <div class="progress">
                                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                                        </div>
                                        <h5 class="m-t-30">jQuery <span class="pull-right">50%</span></h5>
                                        <div class="progress">
                                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                                        </div>
                                        <h5 class="m-t-30">Photoshop <span class="pull-right">70%</span></h5>
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="settings" role="tabpanel">
                                    <div class="card-body">
                                        <form class="form-horizontal form-material">
                                            <div class="form-group">
                                                <label class="col-md-12">Full Name</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="Johnathan Doe" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Email</label>
                                                <div class="col-md-12">
                                                    <input type="email" placeholder="johnathan@admin.com" class="form-control form-control-line" name="example-email" id="example-email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Password</label>
                                                <div class="col-md-12">
                                                    <input type="password" value="password" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Phone No</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="123 456 7890" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Message</label>
                                                <div class="col-md-12">
                                                    <textarea rows="5" class="form-control form-control-line"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-12">Select Country</label>
                                                <div class="col-sm-12">
                                                    <select class="form-control form-control-line">
                                                        <option>London</option>
                                                        <option>India</option>
                                                        <option>Usa</option>
                                                        <option>Canada</option>
                                                        <option>Thailand</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-success text-white">Update Profile</button>
                                                </div>
                                            </div>
                                        </form>
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