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
    <link href="./public/dist/css/style.min.css" rel="stylesheet">
    <link href="./public/assets/icons/font-awesome/css/all.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="skin-megna fixed-layout">
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
                <!-- <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Liste des articles</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Contact</li>
                            </ol>
                            <button type="button" class="btn btn-info d-none d-lg-block m-l-15 text-white"><i
                                    class="fa fa-plus-circle"></i> Create New</button>
                        </div>
                    </div>
                </div> -->
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
                                        <li class="box-label"><a href="javascript:void(0)">Rôles
                                                <span><?php echo $roleCount ?></span></a></li>
                                        <li class="divider"></li>
                                        <?php foreach ($roles as $role): ?>
                                            <li><a href="javascript:void(0)"><?php echo $role["name"] ?> <span><?php echo $role["users_count"] ?></span></a></li>
                                        <?php endforeach ?>
                                        <div id="myModal" class="modal fade in" tabindex="-1" role="dialog"
                                            aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel">Add Lable</h4>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-hidden="true"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <from class="form-horizontal">
                                                            <div class="form-group">
                                                                <label class="col-md-12">Name of Label</label>
                                                                <div class="col-md-12">
                                                                    <input type="text" class="form-control"
                                                                        placeholder="type name">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-12">Select Number of people</label>
                                                                <div class="col-md-12">
                                                                    <select class="form-select">
                                                                        <option>All Contacts</option>
                                                                        <option>10</option>
                                                                        <option>20</option>
                                                                        <option>30</option>
                                                                        <option>40</option>
                                                                        <option>Custome</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </from>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-info waves-effect"
                                                            data-bs-dismiss="modal">Save</button>
                                                        <button type="button" class="btn btn-default waves-effect"
                                                            data-bs-dismiss="modal">Cancel</button>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                    </ul>
                                </div>
                                <!-- /.left-aside-column-->
                                <div class="right-aside ">
                                    <div class="right-page-header">
                                        <div class="d-flex">
                                            <div class="align-self-center">
                                                <h4 class="card-title m-t-10">Liste des utilisateurs </h4>
                                            </div>
                                            <div class="ms-auto">
                                                <input type="text" id="demo-input-search2" placeholder="rechercher"
                                                    class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-info btn-rounded m-t-10 float-end text-white"
                                        data-bs-toggle="modal" data-bs-target="#add-contact">Ajouter un utilisateur</button>
                                    <!-- Add Contact Popup Model -->
                                    <div id="add-contact" class="modal fade in" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel" aria-hidden="true">
                                        <form action="index.php?action=addUser" method="POST" class="form-horizontal form-material">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel">Add New User</h4>
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
                                                                <input type="text" class="form-control"
                                                                    placeholder="Email" name="email">
                                                            </div>
                                                            <div class="col-md-12 m-b-20">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Password" name="password">
                                                            </div>
                                                            <div class="col-md-12 m-b-20">
                                                                <label class="form-label">Input Select</label>
                                                                <select class="form-select col-12" id="inlineFormCustomSelect" name="role_id">
                                                                    <option selected>Choose...</option>
                                                                    <?php foreach ($roles as $role): ?>
                                                                        <option value="<?php echo $role["id"] ?>"><?php echo $role["name"] ?></option>
                                                                    <?php endforeach ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-12 m-b-20">
                                                                <div
                                                                    class="fileupload btn btn-danger btn-rounded waves-effect waves-light">
                                                                    <span><i class="ion-upload m-r-5"></i>Upload Contact
                                                                        Image</span>
                                                                    <input type="file" class="upload">
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
                                        <table id="demo-foo-addrow"
                                            class="table no-wrap table-bordered m-t-30 table-hover contact-list"
                                            data-paging="true" data-paging-size="7">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Role</th>
                                                    <th>Etat</th>
                                                    <th>date</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($users as $user): ?>
                                                    <tr>
                                                        <td>
                                                            <a href="javascript:void(0)">
                                                                <!-- <img src="./public/assets/images/users/4.jpg" alt="user" width="40" class="img-circle" /> -->
                                                                <?php echo $user["name"]; ?>
                                                            </a>
                                                        </td>
                                                        <td><span class="label <?php echo $user["role_name"] == "Administrateur" ? 'label-danger' : 'label-success' ?> "><?php echo $user["role_name"]; ?></span> </td>
                                                        <td><?php echo $user["is_enabled"] == 1 ? 'Activé' : 'Désactivé'; ?></td>
                                                        <td>12-10-2014</td>
                                                        <td>
                                                            <div class="btn-group">
                                                                <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    Action
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <?php if ($user["is_enabled"]): ?>
                                                                        <a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target=".<?php echo 'alert_disable_' . $user["id"] ?>">Désactiver</a>
                                                                    <?php else: ?>
                                                                        <a class="dropdown-item" href="javascript:void(0)">Activer</a>
                                                                    <?php endif ?>
                                                                    <a class="dropdown-item" href="javascript:void(0)">Modifier</a>
                                                                    <a class="dropdown-item" href="javascript:void(0)" onclick="confirmDelete('<?php echo $user["id"]; ?>')">Supprimer</a>
                                                                </div>
                                                            </div>
                                                            <!-- sample modal content -->
                                                            <div class="modal <?php echo 'alert_disable_' . $user["id"] ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
                                                                <div class="modal-dialog modal-sm">
                                                                    <form method="POST" action="utilisateurs.php">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h4 class="modal-title" id="mySmallModalLabel"><?php echo 'Désactiver ' . $user["name"] ?></h4>
                                                                                <input type="hidden" name="user_id" value="<?php echo $user["id"] ?>">
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="submit" name="disableUser" class="btn btn-sm btn-danger waves-effect waves-light text-white">Confirmer</button>
                                                                            </div>
                                                                        </div>
                                                                        <!-- /.modal-content -->
                                                                    </form>
                                                                </div>
                                                                <!-- /.modal-dialog -->
                                                            </div>
                                                            <div class="modal <?php echo 'alert_delete_' . $user["id"] ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
                                                                <div class="modal-dialog modal-sm">
                                                                    <form method="POST" action="utilisateurs.php">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h4 class="modal-title" id="mySmallModalLabel"><?php echo 'Supprimer ' . $user["name"] ?></h4>
                                                                                <input type="hidden" name="user_id" value="<?php echo $user["id"] ?>">
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="submit" name="disableUser" class="btn btn-sm btn-danger waves-effect waves-light text-white">Confirmer</button>
                                                                            </div>
                                                                        </div>
                                                                        <!-- /.modal-content -->
                                                                    </form>
                                                                </div>
                                                                <!-- /.modal-dialog -->
                                                            </div>
                                                        </td>
                                                    </tr>
                                                <?php endforeach ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <?php if (ceil($total_pages / $num_results_on_page) > 0): ?>
                                        <ul class="pagination">
                                            <?php if ($page > 1): ?>
                                                <li class="prev page-item"><a class="page-link" href="index.php?action=utilisateurs&page=<?php echo $page - 1 ?>">Prev</a></li>
                                            <?php endif; ?>

                                            <?php if ($page > 3): ?>
                                                <li class="start page-item"><a class="page-link" href="index.php?action=utilisateurs&page=1">1</a></li>
                                                <li class="dots page-item page-link">...</li>
                                            <?php endif; ?>

                                            <?php if ($page - 2 > 0): ?><li class="page <?php if ($page - 2 == $page) echo 'active'; ?>"><a class="page-link" href="index.php?action=utilisateurs&page=<?php echo $page - 2 ?>"><?php echo $page - 2 ?></a></li><?php endif; ?>
                                            <?php if ($page - 1 > 0): ?><li class="page <?php if ($page - 1 == $page) echo 'active'; ?>"><a class="page-link" href="index.php?action=utilisateurs&page=<?php echo $page - 1 ?>"><?php echo $page - 1 ?></a></li><?php endif; ?>

                                            <li class="currentpage page-item active"><a class="page-link" href="index.php?action=utilisateurs&page=<?php echo $page ?>"><?php echo $page ?></a></li>

                                            <?php if ($page + 1 < ceil($total_pages / $num_results_on_page) + 1): ?><li class="page-item page <?php if ($page + 1 == $page) echo 'active'; ?>"><a class="page-link" href="index.php?action=utilisateurs&page=<?php echo $page + 1 ?>"><?php echo $page + 1 ?></a></li><?php endif; ?>
                                            <?php if ($page + 2 < ceil($total_pages / $num_results_on_page) + 1): ?><li class="page-item page <?php if ($page + 2 == $page) echo 'active'; ?>"><a class="page-link" href="index.php?action=utilisateurs&page=<?php echo $page + 2 ?>"><?php echo $page + 2 ?></a></li><?php endif; ?>

                                            <?php if ($page < ceil($total_pages / $num_results_on_page) - 2): ?>
                                                <li class="dots page-link">...</li>
                                                <li class="end"><a class="page-link" href="index.php?action=utilisateurs&page=<?php echo ceil($total_pages / $num_results_on_page) ?>"><?php echo ceil($total_pages / $num_results_on_page) ?></a></li>
                                            <?php endif; ?>

                                            <?php if ($page < ceil($total_pages / $num_results_on_page)): ?>
                                                <li class="next"><a class="page-link" href="index.php?action=utilisateurs&page=<?php echo $page + 1 ?>">Next</a></li>
                                            <?php endif; ?>
                                        </ul>
                                    <?php endif; ?>
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
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span>
                        </div>
                        <div class="r-panel-body">
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" data-skin="skin-default" class="default-theme">1</a>
                                </li>
                                <li><a href="javascript:void(0)" data-skin="skin-green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-red" class="red-theme">3</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-blue" class="blue-theme">4</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-megna"
                                        class="megna-theme working">6</a></li>
                                <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                                <li><a href="javascript:void(0)" data-skin="skin-default-dark"
                                        class="default-dark-theme ">7</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-green-dark"
                                        class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-red-dark" class="red-dark-theme">9</a>
                                </li>
                                <li><a href="javascript:void(0)" data-skin="skin-blue-dark"
                                        class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-purple-dark"
                                        class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-megna-dark"
                                        class="megna-dark-theme ">12</a></li>
                            </ul>
                            <ul class="m-t-20 chatonline">
                                <li><b>Chat option</b></li>
                                <li>
                                    <a href="javascript:void(0)"><img src="./public/assets/images/users/1.jpg" alt="user-img"
                                            class="img-circle"> <span>Varun Dhavan <small
                                                class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="./public/assets/images/users/2.jpg" alt="user-img"
                                            class="img-circle"> <span>Genelia Deshmukh <small
                                                class="text-warning">Away</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="./public/assets/images/users/3.jpg" alt="user-img"
                                            class="img-circle"> <span>Ritesh Deshmukh <small
                                                class="text-danger">Busy</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="./public/assets/images/users/4.jpg" alt="user-img"
                                            class="img-circle"> <span>Arijit Sinh <small
                                                class="text-muted">Offline</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="./public/assets/images/users/5.jpg" alt="user-img"
                                            class="img-circle"> <span>Govinda Star <small
                                                class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="./public/assets/images/users/6.jpg" alt="user-img"
                                            class="img-circle"> <span>John Abraham<small
                                                class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="./public/assets/images/users/7.jpg" alt="user-img"
                                            class="img-circle"> <span>Hritik Roshan<small
                                                class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="./public/assets/images/users/8.jpg" alt="user-img"
                                            class="img-circle"> <span>Pwandeep rajan <small
                                                class="text-success">online</small></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
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
        <footer class="footer">
            © 2021 Eliteadmin by themedesigner.in
            <a href="https://www.wrappixel.com/">WrapPixel</a>
        </footer>
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

    <script type="text/javascript">
        function confirmDelete(id) {
            if (confirm("Voulez-vous vraiment supprimer cet utilisateur ?")) {
                window.location.href = "index.php?action=deleteUser&id=" + id;
            }
        }
    </script>
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

</body>

</html>