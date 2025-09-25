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
                                                            <a class="single-thumb" id="v-pills-one-tab" data-bs-toggle="pill" href="#v-pills-one" role="button" aria-controls="v-pills-one" >
                                                                <img src="../inventory/<?php echo $article["image_url"] ?>" alt="">
                                                            </a>
                                                            <a class="single-thumb" id="v-pills-two-tab" data-bs-toggle="pill" href="#v-pills-two" role="button" aria-controls="v-pills-two">
                                                                <img src="../inventory/<?php echo $article["image_1"] ?>" alt="">
                                                            </a>
                                                            <a class="single-thumb active" aria-current="page" id="v-pills-three-tab" data-bs-toggle="pill" role="button" href="#v-pills-three"  aria-controls="v-pills-three">
                                                                <img src="../inventory/<?php echo $article["image_2"] ?>" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-image">
                                                        <div class="product-image-active tab-content" id="v-pills-tabContent">
                                                            <a class="single-image tab-pane fade" id="v-pills-one" role="tabpanel" aria-labelledby="v-pills-one-tab">
                                                                <img src="../inventory/<?php echo $article["image_url"] ?>" alt="">
                                                            </a>
                                                            <a class="single-image tab-pane fade" id="v-pills-two" role="tabpanel" aria-labelledby="v-pills-two-tab">
                                                                <img src="../inventory/<?php echo $article["image_1"] ?>" alt="">
                                                            </a>
                                                            <a class="single-image tab-pane fade active show" id="v-pills-three" role="tabpanel" aria-labelledby="v-pills-three-tab">
                                                                <img src="../inventory/<?php echo $article["image_2"] ?>" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="product-details-content mt-45">
                                                    <h2 class="fw-bold fs-4"><?php echo $article['name']?></h2>
                                                    <div class="my-3">
                                                        <i class="fa fa-star text-warning"></i>
                                                        <i class="fa fa-star text-warning"></i>
                                                        <i class="fa fa-star text-warning"></i>
                                                        <i class="fa fa-star text-warning"></i>
                                                        <i class="fa fa-star text-warning"></i>
                                                        <span class="text-muted ms-3">(449 customer review)</span>
                                                    </div>
                                                    <div class="product-select-wrapper flex-wrap">
                                                        <div class="select-item">
                                                            <h6 class="select-title fw-bold">Selectionner une couleur</h6>
                                                            <ul class="color-select" id="select-color-1">
                                                                <li style="background-color: #EFEFEF;" class="active"></li>
                                                                <li style="background-color: #FAE5EC;"></li>
                                                                <li style="background-color: #4C4C4C;"></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-price">
                                                        <h6 class="price-title fw-bold">Estimatif</h6>
                                                        <p class="sale-price"><?php echo $article['price']?></p>
                                                        <!-- <p class="regular-price text-danger">$ 179 USD</p> -->
                                                    </div>
                                                    <p><?php echo $article['description']?></p>
                                                    <div class="product-btn mb-5">
                                                        <div class="d-flex flex-wrap">
                                                            <div class="mt-2 mt-sm-0  me-1">
                                                                <div class="input-group">
                                                                    <input type="number" class="form-control" placeholder="1" min="1" max="5">
                                                                    <span class="input-group-text"><i class="fa fa-sort"></i></span>
                                                                </div>
                                                            </div>
                                                            <?php if (isset($_SESSION["soseplast_user_id"])): ?>
                                                        <?php if ($command): ?>
                                                            <button type="button" class="btn text-white fw-bold waves-effect waves-light btn-danger" onclick="confirmCancelReservation('<?php echo $article["id"]; ?>')">Annuler la réservation</button>
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
                                                                        <h4 class="modal-title text-dark fw-bold" id="myModalLabel">Réserver cet article<?php echo $_SESSION["soseplast_user_id"] ?></h4>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                            aria-hidden="true"></button>
                                                                    </div>
                                                                    <div class="modal-footer text-center">
                                                                        <input type="hidden" name="user_id" value="<?php echo $_SESSION["soseplast_user_id"]?>">
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
                                    <ul class="nav nav-tabs tab-body-header rounded  d-inline-flex" role="tablist">
                                        <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#descriptions" role="tab">Descriptions</a></li>
                                        <li class="nav-item"><a class="nav-link " data-bs-toggle="tab" href="#review" role="tab">Notes</a></li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="descriptions">
                                        <div class="card-body">
                                            <p><?php echo $article['description']?></p>
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
        
            <!-- Modal Custom Settings-->
            <div class="modal fade right" id="Settingmodal" tabindex="-1"  aria-hidden="true">
                <div class="modal-dialog  modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Custom Settings</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body custom_setting">
                            <!-- Settings: Color -->
                            <div class="setting-theme pb-3">
                                <h6 class="card-title mb-2 fs-6 d-flex align-items-center"><i class="icofont-color-bucket fs-4 me-2 text-primary"></i>Template Color Settings</h6>
                                <ul class="list-unstyled row row-cols-3 g-2 choose-skin mb-2 mt-2">
                                    <li data-theme="indigo"><div class="indigo"></div></li>
                                    <li data-theme="tradewind"><div class="tradewind"></div></li>
                                    <li data-theme="monalisa"><div class="monalisa"></div></li>
                                    <li data-theme="blue" class="active"><div class="blue"></div></li>
                                    <li data-theme="cyan"><div class="cyan"></div></li>
                                    <li data-theme="green"><div class="green"></div></li>
                                    <li data-theme="orange"><div class="orange"></div></li>
                                    <li data-theme="blush"><div class="blush"></div></li>
                                    <li data-theme="red"><div class="red"></div></li>
                                </ul>
                            </div>
                            <div class="sidebar-gradient py-3">
                                <h6 class="card-title mb-2 fs-6 d-flex align-items-center"><i class="icofont-paint fs-4 me-2 text-primary"></i>Sidebar Gradient</h6>
                                <div class="form-check form-switch gradient-switch pt-2 mb-2">
                                    <input class="form-check-input" type="checkbox" id="CheckGradient">
                                    <label class="form-check-label" for="CheckGradient">Enable Gradient! ( Sidebar )</label>
                                </div>
                            </div>
                            <!-- Settings: Template dynamics -->
                            <div class="dynamic-block py-3">
                                <ul class="list-unstyled choose-skin mb-2 mt-1">
                                    <li data-theme="dynamic"><div class="dynamic"><i class="icofont-paint me-2"></i> Click to Dyanmic Setting</div></li>
                                </ul>
                                <div class="dt-setting">
                                    <ul class="list-group list-unstyled mt-1">
                                        <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                            <label>Primary Color</label>
                                            <button id="primaryColorPicker" class="btn bg-primary avatar xs border-0 rounded-0"></button>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                            <label>Secondary Color</label>
                                            <button id="secondaryColorPicker" class="btn bg-secondary avatar xs border-0 rounded-0"></button>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                            <label class="text-muted">Chart Color 1</label>
                                            <button id="chartColorPicker1" class="btn chart-color1 avatar xs border-0 rounded-0"></button>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                            <label class="text-muted">Chart Color 2</label>
                                            <button id="chartColorPicker2" class="btn chart-color2 avatar xs border-0 rounded-0"></button>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                            <label class="text-muted">Chart Color 3</label>
                                            <button id="chartColorPicker3" class="btn chart-color3 avatar xs border-0 rounded-0"></button>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                            <label class="text-muted">Chart Color 4</label>
                                            <button id="chartColorPicker4" class="btn chart-color4 avatar xs border-0 rounded-0"></button>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                            <label class="text-muted">Chart Color 5</label>
                                            <button id="chartColorPicker5" class="btn chart-color5 avatar xs border-0 rounded-0"></button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Settings: Font -->
                            <div class="setting-font py-3">
                                <h6 class="card-title mb-2 fs-6 d-flex align-items-center"><i class="icofont-font fs-4 me-2 text-primary"></i> Font Settings</h6>
                                <ul class="list-group font_setting mt-1">
                                    <li class="list-group-item py-1 px-2">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="radio" name="font" id="font-poppins" value="font-poppins">
                                            <label class="form-check-label" for="font-poppins">
                                                Poppins Google Font
                                            </label>
                                        </div>
                                    </li>
                                    <li class="list-group-item py-1 px-2">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="radio" name="font" id="font-opensans" value="font-opensans" checked="">
                                            <label class="form-check-label" for="font-opensans">
                                                Open Sans Google Font
                                            </label>
                                        </div>
                                    </li>
                                    <li class="list-group-item py-1 px-2">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="radio" name="font" id="font-montserrat" value="font-montserrat">
                                            <label class="form-check-label" for="font-montserrat">
                                                Montserrat Google Font
                                            </label>
                                        </div>
                                    </li>
                                    <li class="list-group-item py-1 px-2">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="radio" name="font" id="font-mukta" value="font-mukta">
                                            <label class="form-check-label" for="font-mukta">
                                                Mukta Google Font
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- Settings: Light/dark -->
                            <div class="setting-mode py-3">
                                <h6 class="card-title mb-2 fs-6 d-flex align-items-center"><i class="icofont-layout fs-4 me-2 text-primary"></i>Contrast Layout</h6>
                                <ul class="list-group list-unstyled mb-0 mt-1">
                                    <li class="list-group-item d-flex align-items-center py-1 px-2">
                                        <div class="form-check form-switch theme-switch mb-0">
                                            <input class="form-check-input" type="checkbox" id="theme-switch">
                                            <label class="form-check-label" for="theme-switch">Enable Dark Mode!</label>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center py-1 px-2">
                                        <div class="form-check form-switch theme-high-contrast mb-0">
                                            <input class="form-check-input" type="checkbox" id="theme-high-contrast">
                                            <label class="form-check-label" for="theme-high-contrast">Enable High Contrast</label>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center py-1 px-2">
                                        <div class="form-check form-switch theme-rtl mb-0">
                                            <input class="form-check-input" type="checkbox" id="theme-rtl">
                                            <label class="form-check-label" for="theme-rtl">Enable RTL Mode!</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-start">
                            <button type="button" class="btn btn-white border lift" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary lift">Save Changes</button>
                        </div>
                    </div>
                </div>
            </div> 

        </div>        

    </div>

    <!-- Jquery Core Js -->      
    <script src="assets/bundles/libscripts.bundle.js"></script>

    <!-- Jquery Page Js -->   
    <script src="../js/template.js"></script>
    <script>
        // =========== select-item-1 active 
        selectItem1=document.querySelectorAll("#select-item-1 .single-item");
            for(var i=0; i<selectItem1.length; i++){
                selectItem1[i].onclick=function(){
                var el=selectItem1[0];
                while(el){
                    if(el.tagName==="DIV"){
                    el.classList.remove("active");
                    }
                    el=el.nextSibling;
                }
                this.classList.add("active");
                };
            }
            // =========== select-color-1 active
            selectColor1=document.querySelectorAll("#select-color-1 li");
            for(var i=0; i<selectColor1.length; i++){
                selectColor1[i].onclick=function(){
                var el=selectColor1[0];
                while(el){
                    if(el.tagName==="LI"){
                    el.classList.remove("active");
                    }
                    el=el.nextSibling;
                }
                this.classList.add("active");
                };
            }
    </script>
     <script type="text/javascript">
        function confirmCancelReservation(id) {
            if (confirm("Voulez-vous annuler la réservation de cet article ?")) {
                window.location.href = "index.php?action=deleteCommand&id=" + id;
            }
        }
    </script>
</body>

<!-- Mirrored from pixelwibes.com/template/ebazar/html/dist/product-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Aug 2025 13:37:40 GMT -->
</html> 