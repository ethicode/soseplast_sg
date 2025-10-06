<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<!-- Mirrored from pixelwibes.com/template/ebazar/html/dist/product-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Aug 2025 13:37:38 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SOSEPLAST - Product Detail </title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->

    <!-- project css file  -->
    <link rel="stylesheet" href="assets/css/ebazar.style.min.css">
</head>

<body>
    <div id="ebazar-layout" class="theme-blue">
        <!-- main body area -->
        <div class="main ">

            <!-- Body: Header -->
            <?php require 'sections/header.php' ?>

            <!-- Body: Body -->
            <div class="body d-flex py-3">
                <div class="container-xxl">

                    <div class="row align-items-center">
                        <div class="border-0 mb-4">
                            <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                                <h3 class="fw-bold mb-0">Détail Article</h3>
                            </div>
                        </div>
                    </div> <!-- Row end  -->

                    <div class="row g-3 mb-3">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="product-details">
                                        <div class="row align-items-center">
                                            <div class="col-lg-6">
                                                <div class="product-details-image mt-50">
                                                    <div class="product-thumb-image">
                                                        <div class="product-thumb-image-active nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                            <a class="single-thumb" id="v-pills-one-tab" data-bs-toggle="pill" href="#v-pills-one" role="button" aria-controls="v-pills-one">
                                                                <img src="inventory/<?php echo $article["image_2"] ?>" alt="">
                                                            </a>
                                                            <a class="single-thumb" id="v-pills-two-tab" data-bs-toggle="pill" href="#v-pills-two" role="button" aria-controls="v-pills-two">
                                                                <img src="inventory/<?php echo $article["image_1"] ?>" alt="">
                                                            </a>
                                                            <a class="single-thumb active" aria-current="page" id="v-pills-three-tab" data-bs-toggle="pill" role="button" href="#v-pills-three" aria-controls="v-pills-three">
                                                                <img src="inventory/<?php echo $article["image_url"] ?>" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-image">
                                                        <div class="product-image-active tab-content" id="v-pills-tabContent">
                                                            <a class="single-image tab-pane fade" id="v-pills-one" role="tabpanel" aria-labelledby="v-pills-one-tab">
                                                                <img src="inventory/<?php echo $article["image_2"] ?>" alt="">
                                                            </a>
                                                            <a class="single-image tab-pane fade" id="v-pills-two" role="tabpanel" aria-labelledby="v-pills-two-tab">
                                                                <img src="inventory/<?php echo $article["image_1"] ?>" alt="">
                                                            </a>
                                                            <a class="single-image tab-pane fade active show" id="v-pills-three" role="tabpanel" aria-labelledby="v-pills-three-tab">
                                                                <img src="inventory/<?php echo $article["image_url"] ?>" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="product-details-content mt-45">
                                                    <h2 class="fw-bold fs-4"><?php echo $article['name'] ?></h2>
                                                    <div class="my-3">
                                                        <i class="fa fa-star text-warning"></i>
                                                        <i class="fa fa-star text-warning"></i>
                                                        <i class="fa fa-star text-warning"></i>
                                                        <i class="fa fa-star text-warning"></i>
                                                        <i class="fa fa-star text-warning"></i>
                                                        <!-- <span class="text-muted ms-3">(449 customer review)</span> -->
                                                    </div>
                                                    <div class="product-price">
                                                        <h6 class="price-title fw-bold">Point</h6>
                                                        <p class="sale-price"><i class="icofont-money-bag text-danger"></i><?php echo $article['point'] ?></p>
                                                        <!-- <p class="regular-price text-danger">$ 179 USD</p> -->
                                                    </div>
                                                    <p><?php echo $article['description'] ?></p>
                                                    <div class="product-btn mb-5">
                                                        <div class="d-flex flex-wrap">
                                                            <?php if (isset($_SESSION["soseplast_user_id"])): ?>
                                                                <?php if ($command): ?>
                                                                    <button type="button" class="btn text-white fw-bold waves-effect waves-light btn-danger" onclick="confirmCancelReservation('<?php echo $article["id"]; ?>')">Annuler la réservation</button>
                                                                <?php elseif ($isCommanded): ?>
                                                                    <button type="button" class="btn btn-secondary text-white fw-bold" disabled>Déjà réservé</button>
                                                                <?php else: ?>
                                                                    <button type="button" class="btn waves-effect waves-light btn-danger text-white fw-bold" data-bs-toggle="modal" data-bs-target="#command<?php echo $article["id"] ?>">Commander</button>
                                                                <?php endif ?>
                                                            <?php else: ?>
                                                                <a href="index.php?action=loginForm" class="text-white fw-bold btn waves-effect waves-light btn-danger">Connectez-vous pour commander cet article</a>
                                                            <?php endif ?>
                                                            <div id="command<?php echo $article["id"] ?>" class="modal in" tabindex="-1" role="dialog"
                                                                aria-labelledby="myModalLabel" aria-hidden="true">
                                                                <form action="index.php?action=addCommand" method="POST" class="form-horizontal form-material">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h4 class="modal-title text-dark fw-bold" id="myModalLabel">Réserver cet article</h4>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                                    aria-hidden="true"></button>
                                                                            </div>
                                                                            <div class="modal-footer text-center">
                                                                                <input type="hidden" name="user_id" value="<?php echo $_SESSION["soseplast_user_id"] ?>">
                                                                                <input type="hidden" name="article_id" value="<?php echo $article["id"] ?>">
                                                                                <button type="submit" class="btn btn-danger text-white fw-bold waves-effect"
                                                                                    data-bs-dismiss="modal">CONFIRMER</button>
                                                                                <button type="button" class="btn btn-default waves-effect"
                                                                                    data-bs-dismiss="modal">Annuler</button>
                                                                            </div>
                                                                        </div>
                                                                        <!-- /.modal-content -->
                                                                    </div>
                                                                </form>
                                                                <!-- /.modal-dialog -->
                                                            </div>
                                                            <!-- <button class="btn btn-primary mx-1 mt-2 mt-sm-0 w-sm-100"><i class="fa fa-shopping-cart me-1"></i> Add to Cart</button> -->
                                                        </div>
                                                    </div>

                                                            <?php
                                                            session_start();  // Démarre la session
                                                            if (isset($_SESSION['error'])) {
                                                                echo '<div role="alert" class="alert alert-danger fw-bold">' . $_SESSION['error'] . '</div>';
                                                                unset($_SESSION['error']);
                                                            }
                                                            ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Row end  -->

                    <div class="row g-3 mb-3">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <ul class="nav nav-tabs tab-body-header rounded d-inline-flex" role="tablist">
                                        <li class="nav-item"><a class="nav-link active " data-bs-toggle="tab" href="#descriptions" role="tab">Descriptions</a></li>
                                        <li class="nav-item"><a class="nav-link " data-bs-toggle="tab" href="#review" role="tab">Notes</a></li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="descriptions">
                                        <div class="card-body">
                                            <p><?php echo $article['description'] ?></p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="review">
                                        <div class="card-body">
                                            <p>0 note(s)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row end  -->

                </div>
            </div>

        </div>

    </div>

    <!-- Jquery Core Js -->
    <script src="assets/bundles/libscripts.bundle.js"></script>

    <!-- Jquery Page Js -->
    <!-- <script src="../js/template.js"></script> -->
    <script>
        // =========== select-item-1 active 
        selectItem1 = document.querySelectorAll("#select-item-1 .single-item");
        for (var i = 0; i < selectItem1.length; i++) {
            selectItem1[i].onclick = function() {
                var el = selectItem1[0];
                while (el) {
                    if (el.tagName === "DIV") {
                        el.classList.remove("active");
                    }
                    el = el.nextSibling;
                }
                this.classList.add("active");
            };
        }
        // =========== select-color-1 active
        selectColor1 = document.querySelectorAll("#select-color-1 li");
        for (var i = 0; i < selectColor1.length; i++) {
            selectColor1[i].onclick = function() {
                var el = selectColor1[0];
                while (el) {
                    if (el.tagName === "LI") {
                        el.classList.remove("active");
                    }
                    el = el.nextSibling;
                }
                this.classList.add("active");
            };
        }
    </script>
    <script type="text/javascript">
        function confirmCancelReservation(id) {
            if (confirm("Voulez-vous annuler la réservation de cet article ?")) {
                window.location.href = "index.php?action=annulerCommande&id=" + id;
            }
        }
    </script>
</body>

<!-- Mirrored from pixelwibes.com/template/ebazar/html/dist/product-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Aug 2025 13:37:40 GMT -->

</html>