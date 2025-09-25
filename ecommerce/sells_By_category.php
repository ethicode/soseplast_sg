<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<!-- Mirrored from pixelwibes.com/template/ebazar/html/dist/product-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Aug 2025 13:37:31 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SOSEPLAST</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->

    <!--plugin css file -->
    <link rel="stylesheet" href="assets/plugin/nouislider/nouislider.min.css">

    <!-- project css file  -->
    <link rel="stylesheet" href="assets/css/ebazar.style.min.css">
</head>

<body>
    <div id="ebazar-layout" class="theme-blue">

        <!-- main body area -->
        <div class="main">

            <!-- Body: Header -->
            <?php require 'sections/header.php' ?>
            <div class="container">
                <nav class="navbar " data-bs-theme="dark">
                    <div class="container-fluid">
                        <div class="input-group flex-nowrap input-group-lg">
                            <input type="search" class="form-control" placeholder="Rechercher" aria-label="search" aria-describedby="addon-wrapping">
                            <button type="button" class="input-group-text" id="addon-wrapping"><i class="fa fa-search"></i></button>

                        </div>
                    </div>
                </nav>
            </div>
            <!-- Body: Body -->
            <div class="body d-flex py-3">
                <div class="container-xxl">
                    <div class="row align-items-center">
                        <div class="border-0 mb-4">
                            <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                                <h3 class="fw-bold mb-0">Articles</h3>
                            </div>
                        </div>
                    </div> <!-- Row end  -->
                    <div class="row g-3 mb-3">
                        <div class="col-md-12 col-lg-4 col-xl-4 col-xxl-3">
                            <div class="sticky-lg-top">
                                <div class="card mb-3">
                                    <div class="reset-block">
                                        <div class="filter-title">
                                            <h4 class="title">Filtrer</h4>
                                        </div>
                                        <div class="filter-btn">
                                            <a class="btn btn-danger text-white" href="#">Reinitialiser</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="categories">
                                        <div class="filter-title">
                                            <a class="title" data-bs-toggle="collapse" href="#category" role="button" aria-expanded="true">Catégories</a>
                                        </div>
                                        <div class="collapse show" id="category">
                                            <div class="filter-category">
                                                <ul class="category-list">
                                                    <?php foreach ($categories as $category): ?>
                                                        <li> <a href="#"><?php echo $category["name"] ?></a></li>
                                                        <!-- <li><a href="#" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" class="collapsed"><?php echo $category["name"] ?></a>
                                                        <ul id="collapseOne" class="sub-category collapse" data-parent="#category" >
                                                            <li><a href="#">PlayStation 4</a></li>
                                                            <li><a href="#">Oculus VR</a></li>
                                                            <li><a href="#">Remote</a></li>
                                                            <li><a href="#">Lighting Keyborad</a></li>
                                                        </ul>
                                                    </li> -->
                                                    <?php endforeach ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="price-range-block">
                                        <div class="filter-title">
                                            <a class="title" data-bs-toggle="collapse" href="#pricingTwo" role="button" aria-expanded="false">fourchette de prix</a>
                                        </div>
                                        <div class="collapse show" id="pricingTwo">
                                            <div class="price-range">
                                                <div class="price-amount flex-wrap">
                                                    <div class="amount-input mt-1">
                                                        <label class="fw-bold">Prix Minimeum</label>
                                                        <input type="text" id="minAmount2" class="form-control">
                                                    </div>
                                                    <div class="amount-input mt-1">
                                                        <label class="fw-bold">Prix Maximum</label>
                                                        <input type="text" id="maxAmount2" class="form-control">
                                                    </div>
                                                </div>
                                                <div id="slider-range2" class="slider-range noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="size-block">
                                        <div class="filter-title">
                                            <a class="title" data-bs-toggle="collapse" href="#size" role="button" aria-expanded="true">Selectionner Taille</a>
                                        </div>
                                        <div class="collapse show" id="size">
                                            <div class="filter-size" id="filter-size-1">
                                                <ul>
                                                    <li>PM</li>
                                                    <li>M</li>
                                                    <li class="">GM</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="color-block">
                                        <div class="filter-title">
                                            <a class="title" data-bs-toggle="collapse" href="#color" role="button" aria-expanded="false">Selectionner Couleur</a>
                                        </div>
                                        <div class="collapse show" id="color">
                                            <div class="filter-color">
                                                <ul>
                                                    <li>
                                                        <div class="color-check">
                                                            <p><span style="background-color: #4114e4;"></span> <strong>Blue</strong></p>

                                                            <input type="checkbox" id="color-1">
                                                            <label for="color-1"><span></span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="color-check">
                                                            <p><span style="background-color: #E14C7B;"></span> <strong>Red</strong></p>

                                                            <input type="checkbox" id="color-2">
                                                            <label for="color-2"><span></span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="color-check">
                                                            <p><span style="background-color: #7CB637;"></span> <strong>Green</strong></p>

                                                            <input type="checkbox" id="color-3">
                                                            <label for="color-3"><span></span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="color-check">
                                                            <p><span style="background-color: #161359;"></span> <strong>Dark</strong></p>

                                                            <input type="checkbox" id="color-4">
                                                            <label for="color-4"><span></span></label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="rating-block">
                                        <div class="filter-title">
                                            <a class="title" data-bs-toggle="collapse" href="#rating" role="button" aria-expanded="false">Selectionner Rating</a>
                                        </div>
                                        <div class="collapse show" id="rating">
                                            <div class="filter-rating">
                                                <ul>
                                                    <li>
                                                        <div class="rating-check">
                                                            <input type="checkbox" id="rating-5">
                                                            <label for="rating-5"><span></span>

                                                            </label>
                                                            <p>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="rating-check">
                                                            <input type="checkbox" id="rating-4">
                                                            <label for="rating-4"><span></span></label>
                                                            <p>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="rating-check">
                                                            <input type="checkbox" id="rating-3">
                                                            <label for="rating-3"><span></span></label>
                                                            <p>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="rating-check">
                                                            <input type="checkbox" id="rating-2">
                                                            <label for="rating-2"><span></span></label>
                                                            <p>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="rating-check">
                                                            <input type="checkbox" id="rating-1">
                                                            <label for="rating-1"><span></span></label>
                                                            <p>
                                                                <i class="icofont-star"></i>
                                                            </p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-8 col-xl-8 col-xxl-9">
                            <div class="row g-3 mb-3 row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-3">
                                <?php foreach ($articles as $article): ?>
                                    <div class="col">
                                        <div class="card h-100">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="product-item active">
                                                        <a href="index.php?action=detailArticle&id=<?php echo $article["id"] ?>">
                                                            <img src="../inventory/<?php echo $article["image_url"] ?>" alt="product" class="img-fluid w-100">
                                                        </a>
                                                    </div>
                                                    <a class="add-wishlist" href="#">
                                                        <i class="bi bi-heart-fill text-danger"></i>
                                                    </a>
                                                </div>
                                                <div class="product-content p-3">
                                                    <span class="rating mb-2 d-block"><i class="icofont-star text-warning"></i> 4.5 (145)</span>
                                                    <a href="product-detail.html" class="fw-bold"><?php echo $article["name"] ?> </a>
                                                    <p class="text-muted"><?php echo substr($article["description"], 0, 88) . "...";?></p>
                                                    <span class="d-block fw-bold fs-5 text-black"><?php echo $article["price"] ?></span>
                                                    <?php if (isset($_SESSION["soseplast_user_id"])): ?>
                                                        <?php if ($command): ?>
                                                            <button type="button" class="btn waves-effect waves-light btn-danger" onclick="confirmCancelReservation('<?php echo $article["id"]; ?>')">Annuler la réservation</button>
                                                        <?php else: ?>
                                                            <button type="button" class="btn waves-effect waves-light btn-danger text-white fw-bold" data-bs-toggle="modal" data-bs-target="#command<?php echo $article["id"] ?>">Commander</button>
                                                        <?php endif ?>
                                                    <?php else: ?>
                                                        <a href="index.php?action=loginForm" class="btn waves-effect waves-light btn-danger">Connectez-vous pour commander cet article</a>
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
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach ?>

                            </div>
                            <div class="row g-3 mb-3">
                                <div class="col-md-12">
                                    <nav class="justify-content-end d-flex">
                                        <ul class="pagination">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item active" aria-current="page">
                                                <a class="page-link" href="#">2</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">Next</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Row end  -->
                </div>
            </div>

        </div>

    </div>

    <!-- Jquery Core Js -->
    <script src="assets/bundles/libscripts.bundle.js"></script>

    <!-- Jquery Plugin -->
    <script src="assets/plugin/nouislider/nouislider.min.js"></script>

    <!-- Jquery Page Js -->
    <script src="../js/template.js"></script>
    <script>
        var stepsSlider2 = document.getElementById('slider-range2');
        var input3 = document.getElementById('minAmount2');
        var input4 = document.getElementById('maxAmount2');
        var inputs2 = [input3, input4];
        noUiSlider.create(stepsSlider2, {
            start: [50000, 60000000],
            connect: true,
            step: 1,
            range: {
                'min': [1000],
                'max': 100000000
            },

        });

        stepsSlider2.noUiSlider.on('update', function(values, handle) {
            inputs2[handle].value = values[handle];
        });
    </script>
</body>

<!-- Mirrored from pixelwibes.com/template/ebazar/html/dist/product-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Aug 2025 13:37:32 GMT -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $(".acheter-btn").on("click", function(e) {
            e.preventDefault();

            let button = $(this);
            let articleId = button.data("id");

            // Exécution de la fonction acheter()
            acheter(articleId, button);
        });

        function acheter(id, button) {
            // Exemple d’appel AJAX si besoin (ici juste console.log)
            console.log("Article acheté, ID:", id);

            // Changement de l'état du bouton
            if (button.text().trim() === "Acheter") {
                button.text("Annuler")
                    .removeClass("btn-danger")
                    .addClass("btn-secondary");
            } else {
                button.text("Acheter")
                    .removeClass("btn-secondary")
                    .addClass("btn-danger");
            }
        }
    });

    function confirmCancelReservation(id) {
        if (confirm("Voulez-vous annuler la réservation de cet article ?")) {
            window.location.href = "index.php?action=deleteCommand&id=" + id;
        }
    }
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Cibler tous les boutons qui déclenchaient l’ouverture de la modale
        var buttons = document.querySelectorAll('[data-article-id]');

        buttons.forEach(function(button) {
            button.addEventListener('click', function(event) {
                event.preventDefault();

                // Récupération de l'id article depuis data-attribute
                var articleId = button.getAttribute('data-article-id');

                // Alerte de confirmation
                if (confirm("Voulez-vous vraiment réserver l’article #" + articleId + " ?")) {
                    // Exemple de requête POST
                    fetch('/reservation', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-Requested-With': 'XMLHttpRequest'
                            },
                            body: JSON.stringify({
                                article_id: articleId
                            })
                        })
                        .then(response => {
                            if (!response.ok) throw new Error("Erreur serveur");
                            return response.json();
                        })
                        .then(data => {
                            alert("Réservation confirmée pour l’article #" + articleId);
                            // Optionnel : rafraîchir la page ou mettre à jour l’UI
                        })
                        .catch(error => {
                            alert("Échec de la réservation : " + error.message);
                        });
                }
            });
        });
    });
</script>


</html>