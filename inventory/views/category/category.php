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
    <!-- Footable CSS -->
    <link href="./public/assets/node_modules/footable/css/footable.bootstrap.min.css" rel="stylesheet">
    <!-- Page CSS -->
    <link href="./public/dist/css/pages/contact-app-page.css" rel="stylesheet">
    <link href="./public/dist/css/pages/footable-page.css" rel="stylesheet">
    <!-- Custom CSS -->
    <!-- Table -->
    <link rel="stylesheet" type="text/css" href="./public/assets/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="./public/assets/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css">
    <!-- Custom CSS -->
    <link href="./public/dist/css/style.min.css" rel="stylesheet">
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
        <?php require './views/sections/sidebar.php' ?>
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
                    <div class="col-md-5 align-self-center">
                        <h4 class="card-title m-t-10"><?php echo $category["name"] ?> </h4>
                    </div>
                    <!-- <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Contact</li>
                            </ol>
                            <button type="button" class="btn btn-info d-none d-lg-block m-l-15 text-white"><i
                                    class="fa fa-plus-circle"></i> Create New</button>
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
                    <div class="col-12">
                        <div class="card">
                            <!-- .left-right-aside-column-->
                            <div class="contact-page-aside">
                                <!-- .left-aside-column-->
                                <div class="left-aside bg-light-part">
                                    <ul class="list-style-none">
                                        <li class="box-label"><a href="javascript:void(0)">Categories
                                                <span><?php echo $articleCount; ?></span></a></li>
                                        <li class="divider"></li>
                                        <?php foreach ($categories as $category): ?>
                                            <li><a href="index.php?action=categoryAdmin&id=<?php echo $category["id"] ?>"><?php echo $category["name"] ?> <span><?php echo $category["articles_count"] ?></span></a></li>
                                        <?php endforeach ?>
                                    </ul>
                                </div>
                                <!-- /.left-aside-column-->
                                <div class="right-aside ">
                                    <div class="right-page-header">
                                        <div class="d-flex">
                                            <div class="align-self-center">
                                                <div class="me-auto">
                                                    <input type="text" id="demo-input-search2" placeholder="search articles"
                                                        class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a  href="index.php?action=addArticleForm" type="button" class="btn btn-info btn-rounded float-end text-white">Ajouter un article</a>
                                    <div class="table-responsive">
                                        <table  id="myTable"
                                            class="table border table-striped m-t-30 table-hover"
                                            data-paging="true" data-paging-size="7">
                                            <thead>
                                                <tr>
                                                    <th class="d-none">Id</th>
                                                    <th>Libellé</th>
                                                    <th>Quantité</th>
                                                    <th>Etat</th>
                                                    <th>Catégorie</th>
                                                    <th>Emplacement</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($articles as $article): ?>
                                                    <tr>
                                                        <td class="d-none"><?php echo $article["id"]; ?></td>
                                                        <td>
                                                            <a class="text-dark" href="?action=detailArticleAdmin&id=<?php echo $article["id"]; ?>"><?php echo $article["name"]; ?></a>
                                                        </td>
                                                        <td><?php echo $article["quantity"]; ?></td>
                                                        <?php if ($article["for_sale"] == true): ?>
                                                            <td><span class="label label-info">En cession</span> </td>
                                                        <?php else: ?>
                                                            <td> </td>
                                                        <?php endif ?>
                                                        <td><span class="label label-primary"><?php echo $article["category_name"]; ?></span> </td>
                                                        <td><?php echo $article["location"]; ?></td>
                                                        <td>
                                                            <div class="btn-group">
                                                                <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    Action
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <?php if ($article["for_sale"] == 0): ?>
                                                                        <a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#<?php echo 'miseEnVenteModal' . $article["id"] ?>">Mettre en cession</a>
                                                                    <?php else: ?>
                                                                        <a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#<?php echo 'annulerVenteModal' . $article["id"] ?>">Annuler la cession</a>
                                                                    <?php endif ?>
                                                                    <a class="dropdown-item" href="index.php?action=updatearticle&id=<?php echo $article["id"] ?>">Modifier</a>
                                                                    <a class="dropdown-item" href="javascript:void(0)" onclick="confirmDelete('<?php echo $article["id"]; ?>')">Supprimer</a>
                                                                    <!-- <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="javascript:void(0)">Separated link</a> -->
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <div class="modal" id="<?php echo 'miseEnVenteModal' . $article["id"] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                                                            <form method="POST" action="index.php?action=sellArticle">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h4 class="modal-title" id="exampleModalLabel1">Mise en vente</h4>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="form-group">
                                                                                <label for="recipient-name" class="form-label">Titre de l'article:</label>
                                                                                <input type="text" disabled value="<?php echo $article["name"]; ?>" class="form-control text-dark" id="recipient-name1">
                                                                                <input type="hidden" name="article_id" value="<?php echo $article["id"]; ?>">
                                                                                <input type="hidden" name="for_sale" value="1">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="message-text" class="form-label">Quantité:</label>
                                                                                <input type="number" disabled value="<?php echo $article["quantity"]; ?>" name="quantity" class="form-control text-dark">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="message-text" class="form-label">Prix:</label>
                                                                                <input type="number" value="<?php echo $article["price"]; ?>" autofocus name="price" class="form-control text-dark">
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-default" data-bs-dismiss="modal">Fermer</button>
                                                                            <button type="submit" class="btn btn-danger text-white">Enregistrer</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="modal" id="<?php echo 'annulerVenteModal' . $article["id"] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                                                            <form method="POST" action="index.php?action=sellArticle">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-body">
                                                                            <div class="form-group">
                                                                                <label for="recipient-name" class="form-label">Titre de l'article:</label>
                                                                                <input type="hidden" name="article_id" value="<?php echo $article["id"]; ?>">
                                                                                <input type="text" disabled value="<?php echo $article["name"]; ?>" class="form-control text-dark">
                                                                                <input type="hidden" value="<?php echo $article["price"]; ?>" name="price" class="form-control text-dark">
                                                                                <?php if ($article["for_sale"] == 0): ?>
                                                                                    <input type="hidden" name="for_sale" value="1">
                                                                                <?php else: ?>
                                                                                    <input type="hidden" name="for_sale" value="0">
                                                                                <?php endif ?>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-default" data-bs-dismiss="modal">Fermer</button>
                                                                            <button type="submit" class="btn btn-danger text-white">Annuler la cession</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </tr>
                                                <?php endforeach ?>
                                            </tbody>
                                        </table>
                                    </div>

                                    <!-- .left-aside-column-->
                                </div>
                                <!-- /.left-right-aside-column-->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
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
    <!--stickey kit -->
    <script src="./public/assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="./public/assets/node_modules/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="./public/dist/js/custom.min.js"></script>
    <!-- Footable -->
    <script src="./public/assets/node_modules/moment/moment.js"></script>
    <script src="./public/assets/node_modules/footable/js/footable.min.js"></script>
    <!--FooTable init-->
    <script>
        $(function() {
            $('#demo-foo-addrow').footable();
        });
    </script>
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
        function confirmDelete(id) {
            if (confirm("Voulez-vous vraiment supprimer cette catégorie ?")) {
                window.location.href="index.php?action=deleteCategory&id=" + id;
            }
        }

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
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
            $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary me-1');
        });
    </script>

</body>

</html>