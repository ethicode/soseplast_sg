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
                                                <span><?php echo $articleCount ?></span></a></li>
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
                                                <h4 class="card-title m-t-10">Liste des articles </h4>
                                            </div>
                                            <div class="ms-auto">
                                                <!-- <form method="GET" action="?action=articles">
                                                    <input type="hidden" name="action" value="searchArticle">
                                                    <input type="text" name="search" id="demo-input-search2" placeholder="Rechercher"
                                                        class="form-control">
                                                </form> -->
                                            </div>
                                        </div>
                                    </div>
                                    <a href="index.php?action=addArticleForm" type="button" class="btn btn-info btn-rounded m-b-20 float-end text-white">Ajouter un article</a>
                                    <!-- Add Contact Popup Model -->
                                    <div id="add-data" class="modal fade in" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel" aria-hidden="true">
                                        <form class="form-horizontal" method="POST" action="?action=addArticle" enctype="multipart/form-data">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel">Ajouter un article</h4>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-hidden="true"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <div class="col-md-12 m-b-20">
                                                                <input type="text" class="form-control"
                                                                    placeholder="name" name="name">
                                                            </div>
                                                            <div class="col-md-12 m-b-20">
                                                                <textarea class="form-control" rows="5" placeholder="description" name="description"></textarea>
                                                            </div>
                                                            <div class="col-md-12 m-b-20">
                                                                <input type="number" class="form-control"
                                                                    placeholder="quantité" name="quantity">
                                                            </div>
                                                            <div class="col-md-12 m-b-20">
                                                                <div class="form-group">
                                                                    <label class="form-label">Catégorie</label>
                                                                    <select class="form-select" name="category">
                                                                        <?php foreach ($categories as $category): ?>
                                                                            <option value="<?php echo $category["id"] ?>"><?php echo $category["name"] ?></option>
                                                                        <?php endforeach ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 m-b-20">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Emplacement" name="location">
                                                            </div>
                                                            <div class="col-md-12 m-b-20">
                                                                <div
                                                                    class="fileupload btn btn-danger btn-rounded waves-effect waves-light">
                                                                    <span><i class="ion-upload m-r-5"></i>Upload Contact
                                                                        Image</span>
                                                                    <input type="file" class="upload" name="image_url">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-info waves-effect"
                                                            data-bs-dismiss="modal">Save</button>
                                                        <button type="button" class="btn btn-default waves-effect"
                                                            data-bs-dismiss="modal">Cancel</button>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                        </form>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <div class="table-responsive">
                                        <table  id="myTable"
                                            class="table border table-striped m-t-30 table-hover"
                                            data-paging="true" data-paging-size="7">
                                            <thead>
                                                <tr>
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


                                    <!-- <?php if (ceil($total_pages / $num_results_on_page) > 0): ?>
                                        <ul class="pagination">
                                            <?php if ($page > 1): ?>
                                                <li class="prev page-item"><a class="page-link" href="index.php?action=articles&page=<?php echo $page - 1 ?>">Prev</a></li>
                                            <?php endif; ?>

                                            <?php if ($page > 3): ?>
                                                <li class="start page-item"><a class="page-link" href="index.php?action=articles&page=1">1</a></li>
                                                <li class="dots page-item page-link">...</li>
                                            <?php endif; ?>

                                            <?php if ($page - 2 > 0): ?><li class="page <?php if ($page - 2 == $page) echo 'active'; ?>"><a class="page-link" href="index.php?action=articles&page=<?php echo $page - 2 ?>"><?php echo $page - 2 ?></a></li><?php endif; ?>
                                            <?php if ($page - 1 > 0): ?><li class="page <?php if ($page - 1 == $page) echo 'active'; ?>"><a class="page-link" href="index.php?action=articles&page=<?php echo $page - 1 ?>"><?php echo $page - 1 ?></a></li><?php endif; ?>

                                            <li class="currentpage page-item active"><a class="page-link" href="index.php?action=articles&page=<?php echo $page ?>"><?php echo $page ?></a></li>

                                            <?php if ($page + 1 < ceil($total_pages / $num_results_on_page) + 1): ?><li class="page-item page <?php if ($page + 1 == $page) echo 'active'; ?>"><a class="page-link" href="index.php?action=articles&page=<?php echo $page + 1 ?>"><?php echo $page + 1 ?></a></li><?php endif; ?>
                                            <?php if ($page + 2 < ceil($total_pages / $num_results_on_page) + 1): ?><li class="page-item page <?php if ($page + 2 == $page) echo 'active'; ?>"><a class="page-link" href="index.php?action=articles&page=<?php echo $page + 2 ?>"><?php echo $page + 2 ?></a></li><?php endif; ?>

                                            <?php if ($page < ceil($total_pages / $num_results_on_page) - 2): ?>
                                                <li class="dots page-link">...</li>
                                                <li class="end"><a class="page-link" href="index.php?action=articles&page=<?php echo ceil($total_pages / $num_results_on_page) ?>"><?php echo ceil($total_pages / $num_results_on_page) ?></a></li>
                                            <?php endif; ?>

                                            <?php if ($page < ceil($total_pages / $num_results_on_page)): ?>
                                                <li class="next"><a class="page-link" href="index.php?action=articles&page=<?php echo $page + 1 ?>">Next</a></li>
                                            <?php endif; ?>
                                        </ul>
                                    <?php endif; ?> -->
                                    <!-- .left-aside-column-->
                                </div>
                                <!-- /.left-right-aside-column-->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <!-- <footer class="footer">
            © 2021 Eliteadmin by themedesigner.in
            <a href="https://www.wrappixel.com/">WrapPixel</a>
        </footer> -->
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
    <!--stickey kit -->
    <script src="./public/assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="./public/assets/node_modules/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="./public/dist/js/custom.min.js"></script>
    <!-- Footable -->
    <script src="./public/assets/node_modules/moment/moment.js"></script>
    <!--FooTable init-->
    <script>
        $(function() {
            $('#demo-foo-addrow').footable();
        });

        function confirmDelete(id) {
            if (confirm("Voulez-vous vraiment supprimer cet article ?")) {
                window.location.href = "index.php?action=deleteArticle&id=" + id;
            }
        }
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