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
    <link href="./public/dist/css/style.css" rel="stylesheet">
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
                    <!-- <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Basic Form</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Basic Form</li>
                            </ol>
                            <button type="button" class="btn btn-info d-none d-lg-block m-l-15 text-white"><i class="fa fa-plus-circle"></i> Create New</button>
                        </div>
                    </div> -->
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- row -->
                <!-- .row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Modifier l'article</h4>
                                <form class="form" enctype="multipart/form-data" method="POST" action="index.php?action=savearticle">
                                    <div class="form-group mt-5 row">
                                        <label for="example-text-input" class="col-2 col-form-label">Libellé</label>
                                        <div class="col-10">
                                            <input class="form-control" type="text" name="name" value="<?php echo $article["name"] ?>" id="example-text-input">
                                            <input class="form-control" type="hidden" name="article_id" value="<?php echo $article["id"] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-search-input" class="col-2 col-form-label">Description</label>
                                        <div class="col-10">
                                            <!-- <textarea class="textarea_editor form-control" rows="15" placeholder="Enter text ..."></textarea> -->
                                            <div class="form-group">
                                            <!-- <textarea class="form-control" rows="4" name="description" id=""><?php echo $article["description"] ?></textarea> -->
                                            <textarea class="textarea_editor form-control" name="description" rows="15" placeholder="Enter text ..."><?php echo $article["description"] ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-2 col-form-label">Point</label>
                                        <div class="col-10">
                                            <input class="form-control" name="point" type="number" value="<?php echo $article["point"] ?>" id="">
                                        </div>
                                    </div>
                                     <div class="form-group row">
                                        <label for="example-url-input" class="col-2 col-form-label">Quantité</label>
                                        <div class="col-10">
                                            <input class="form-control" name="quantity" type="number" value="<?php echo $article["quantity"] ?>" id="example-url-input">
                                        </div>
                                    </div>
                                    <div class="form-group mt-5 row">
                                        <label for="example-text-input" class="col-2 col-form-label">Emplacement</label>
                                        <div class="col-10">
                                            <input class="form-control" name="location" type="text" value="<?php echo $article["location"] ?>" id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-month-input2" class="col-2 col-form-label">Select</label>
                                        <div class="col-10">
                                            <select class="form-select col-12" name="category_id" id="example-month-input2">
                                                <?php foreach ($categories as $category): ?>
                                                    <option <?php echo $category["id"] == $article["category_id"] ? "selected" : ""; ?> value="<?php echo $category["id"]; ?>"><?php echo $category["name"]; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- <div class="col-lg-6 col-md-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title">File Upload1</h4>
                                                    <label for="input-file-now" class="form-label">Your so fresh input file — Default version</label>
                                                    <input type="file" id="input-file-now" class="dropify" />
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="col-lg-3 col-md-3">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title">Image principal</h4>
                                                    <input type="file" name="image_url" id="input-file-now-custom-1" value="<?php echo $article["image_url"] ?>" class="dropify" data-default-file="<?php echo $article["image_url"] ?>" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title">Image 1</h4>
                                                    <!-- <label for="input-file-now-custom-1" class="form-label">Modifier l'image</label> -->
                                                    <input type="file" name="image_1" value="<?php echo $article["image_1"] ?>" id="input-file-now-custom-1" class="dropify" data-default-file="<?php echo $article["image_1"] ?>" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title">Image 2</h4>
                                                    <!-- <label for="input-file-now-custom-1" class="form-label">Modifier l'image</label> -->
                                                    <input type="file" name="image_2" value="<?php echo $article["image_2"] ?>" id="input-file-now-custom-1" class="dropify" data-default-file="<?php echo $article["image_2"] ?>" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title">Image 3</h4>
                                                    <!-- <label for="input-file-now-custom-1" class="form-label">Modifier l'image</label> -->
                                                    <input type="file" name="image_3" value="<?php echo $article["image_3"] ?>" id="input-file-now-custom-1" class="dropify" data-default-file="<?php echo $article["image_3"] ?>" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-4 offset-4">
                                            <button type="submit" class="btn w-100 btn-lg btn-info">ENREGISTRER</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
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