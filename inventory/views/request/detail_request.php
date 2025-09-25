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
    <link rel="stylesheet" type="text/css"
        href="./public/assets/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css"
        href="./public/assets/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css">
    <!-- Custom CSS -->
    <link href="./public/dist/css/style.min.css" rel="stylesheet">
    <link href="./public/assets/icons/font-awesome/css/fontawesome.min.css" rel="stylesheet">
    <!-- page css -->
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
        <?php require './views/sections/sidebar.php' ?>

        <div class="page-wrapper">
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <!-- <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Email Details</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Email Details</li>
                            </ol>
                            <button type="button" class="btn btn-info d-none d-lg-block m-l-15 text-white"><i class="fa fa-plus-circle"></i> Create New</button>
                        </div>
                    </div> -->
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="row">
                                <div class="col-xlg-2 col-lg-3 col-md-4">
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
                                                <a href="javascript:void(0)" class="d-flex  no-block align-items-center"> <i class="mdi mdi-file-document-box fs-4 me-2 d-flex align-items-center"></i> Demandes </a><span class="badge bg-danger ms-auto">3</span>
                                            </li>
                                            <li class="list-group-item d-flex no-block align-items-center ">
                                                <a href="javascript:void(0)" class="d-flex no-block align-items-center"> <i class="mdi mdi-file-document-box fs-4 me-2 d-flex align-items-center"></i> Dons </a><span class="badge bg-danger ms-auto">0</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <div class="button-group">
                                            <button type="button" class="btn waves-effect waves-light btn-danger" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">Don en nature</button>
                                            <button type="button" class="btn waves-effect waves-light btn-secondary" data-bs-toggle="modal" data-bs-target="#responsive-modal2">Don en numéraire</button>
                                            <div class="modal bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <!-- <h4 class="modal-title" id="myLargeModalLabel">Extra Large modal</h4> -->
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="table-responsive m-t-40">
                                                                <table id="example23"
                                                                    class="display nowrap table table-hover table-striped border"
                                                                    cellspacing="0" width="100%">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Libellé</th>
                                                                            <th>Quantité</th>
                                                                            <th>Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tfoot>
                                                                        <tr>
                                                                            <th>Libellé</th>
                                                                            <th>Quantité</th>
                                                                            <th>Action</th>
                                                                        </tr>
                                                                    </tfoot>
                                                                    <tbody>
                                                                        <?php foreach ($articles as $article): ?>
                                                                            <tr>
                                                                                <td><?php echo $article["name"] ?></td>
                                                                                <td><?php echo $article["quantity"] ?></td>
                                                                                <td>
                                                                                    <button type="button" class="btn btn-sm waves-effect waves-light btn-success" data-bs-toggle="modal" data-bs-target="#<?php echo 'modal' . $article["id"] ?>">Sélectionner</button>

                                                                                </td>
                                                                            </tr>
                                                                            <div id="<?php echo 'modal' . $article["id"] ?>" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                                                <div class="modal-dialog">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <!-- <h4 class="modal-title">Modal Content is Responsive</h4> -->
                                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <form>
                                                                                                <div class="form-group">
                                                                                                    <label for="recipient-name" class="form-label">Quantité:</label>
                                                                                                    <input type="text" name="quantity" class="form-control" id="recipient-name">
                                                                                                    <input type="hidden" name="request_id" value="<?php echo $request["id"] ?>" class="form-control" id="recipient-name">
                                                                                                    <input type="hidden" name="article_id" value="<?php echo $article["id"] ?>" class="form-control" id="recipient-name">
                                                                                                </div>
                                                                                            </form>
                                                                                        </div>
                                                                                        <div class="modal-footer">
                                                                                            <button type="button" class="btn btn-default waves-effect" data-bs-dismiss="modal">Annuler</button>
                                                                                            <button type="button" class="btn btn-danger waves-effect waves-light text-white">Enregistrer</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        <?php endforeach ?>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger waves-effect text-start text-white" data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <div id="responsive-modal2" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <!-- <h4 class="modal-title">Modal Content is Responsive</h4> -->
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                                                        </div>
                                                        <form method="POST" action="index.php?action=ajouterUnDonEnNumeraire">
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label for="recipient-name" class="form-label">Montant:</label>
                                                                    <input name="value" autofocus type="text" class="form-control" id="recipient-name">
                                                                    <input type="hidden" name="request_id" value="<?php echo $request["id"] ?>" class="form-control" id="recipient-name">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default waves-effect" data-bs-dismiss="modal">Fermer</button>
                                                                <button type="submit" class="btn btn-danger waves-effect waves-light text-white">Enregistrer</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xlg-10 col-lg-9 col-md-8 bg-light border-start">
                                    <div class="card">
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs profile-tab" role="tablist">
                                            <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">Détail de la demande</a> </li>
                                            <!-- <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">Faire un don</a> </li> -->
                                            <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#settings" role="tab">Dons reçus</a> </li>
                                        </ul>
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div class="tab-pane active bg-" id="home" role="tabpanel">
                                                <div class="card-body">
                                                    <div class="btn-group" role="group">
                                                        <button id="btnGroupDrop1" type="button" class="btn m-b-10 btn-secondary font-14 dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <?php if ($request["is_validated"] === 1): ?>
                                                                Validée
                                                            <?php elseif ($request["is_validated"] === 0): ?>
                                                                Rejetée
                                                            <?php else: ?>
                                                                En attente de validation
                                                            <?php endif ?>
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                            <form action="index.php?action=updateValidation" method="post">
                                                                <button type="submit" class="dropdown-item" href="javascript:void(0)">Valider</button>
                                                                <input type="hidden" name="is_validated" value="1">
                                                            </form>
                                                            <form action="index.php?action=updateValidation" method="post">
                                                                <button type="submit" class="dropdown-item" href="javascript:void(0)">Rejeter</button>
                                                                <input type="hidden" name="is_validated" value="0">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body p-t-0">
                                                    <div class="card b-all shadow-none">
                                                        <div class="card-body">
                                                            <h5 class="card-title m-b-0 font-18"><?php echo $request["text_1"] ?></h5>
                                                        </div>
                                                        <div>
                                                            <hr class="m-t-0">
                                                        </div>
                                                        <h4 class="card-body">
                                                            <p> <?php echo $request["text_2"] ?> </p>
                                                        </h4>
                                                        <div>
                                                            <hr class="m-t-0">
                                                        </div>
                                                        <div class="card-body">
                                                            <h4><i class="fa fa-paperclip m-r-10 m-b-10"></i> Fichier <span>(3)</span></h4>
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <a href="/SOSEPLAST/demande.pdf" target="_blank"> <img class="img-thumbnail img-responsive" alt="attachment" src="./public/assets/images/big/file.jpg"> </a>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <a href="/SOSEPLAST/demande.pdf" target="_blank"> <img class="img-thumbnail img-responsive" alt="attachment" src="./public/assets/images/big/file.jpg"> </a>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <a href="/SOSEPLAST/demande.pdf" target="_blank"> <img class="img-thumbnail img-responsive" alt="attachment" src="./public/assets/images/big/file.jpg"> </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--second tab-->
                                            <div class="tab-pane" id="settings" role="tabpanel">
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table id="myTable"
                                                            class="table no-wrap table-bordered m-t-30 table-hover contact-list"
                                                            data-paging="true" data-paging-size="7">
                                                            <thead>
                                                                <tr>
                                                                    <th>Libellé</th>
                                                                    <th>Montant</th>
                                                                    <th>Date</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php foreach ($dons as $don): ?>
                                                                    <tr>
                                                                        <td>
                                                                            <a href="?action=detailArticleAdmin&id=<?php echo $don["article_name"]; ?>"><?php echo $don["article_name"]; ?></a>
                                                                        </td>
                                                                        <td><?php echo $don["value"] ?></td>
                                                                        <td><?php echo $don["created_at"] ?></td>
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
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Page Content -->
                <!-- ============================================================== -->
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End footer -->
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
    <!-- This is data table -->
    <script src="./public/assets/node_modules/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="./public/assets/node_modules/datatables.net-bs4/js/dataTables.responsive.min.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->
    <script>
        $(function() {
            $('#myTable').DataTable();
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
            // responsive table
            $('#config-table').DataTable({
                responsive: true
            });
            $('#example23').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    // 'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
            $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary me-1');
        });
    </script>
</body>

</html>