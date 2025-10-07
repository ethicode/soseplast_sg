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
                    
                </nav>
            </div>
            <!-- Body: Body -->
            <div class="body d-flex py-3">
                <div class="container-xxl">
                    <div class="row align-items-center">
                    </div> <!-- Row end  -->
                    <div class="row g-3 mb-3">
                        <div class="col-md-12 col-lg-4 col-xl-4 col-xxl-3">
                            <?php require 'sections/sidebar.php' ?>
                        </div>
                        <div class="col-md-12 col-lg-8 col-xl-8 col-xxl-9">
                            <div class="row g-3 mb-3 row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-3">
                                <?php foreach ($articles as $article): ?>
                                    <div class="col">
                                        <div class="card  d-flex flex-column h-100" style="opacity: <?php echo $article['is_ordered'] == 1 ? '0.6' : '1'; ?>;">
                                            <div class="product pb-0 mb-0">
                                                <div class="product-image">
                                                    <div class="product-item active">
                                                        <a class="stretched-link" href="index.php?action=detailArticle&id=<?php echo $article["id"] ?>">
                                                            <img style="max-height: 300px;" src="inventory/<?php echo $article["image_url"] ?>" alt="product" class="img-fluid w-100">
                                                        </a>
                                                    </div>
                                                    <a class="add-wishlist" href="#">
                                                        <i class="bi bi-heart-fill text-danger"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="card-footer bg-white border-0 mt-auto">
                                                <div class="product-content px-3">
                                                    <span class="rating mb-2 d-block fw-bold fs-5 text-black"><i class="icofont-money-bag text-danger"></i><?php echo $article["point"] ?> </span>
                                                    <a href="product-detail.html" class="fw-bold"><?php echo $article["name"] ?> </a>
                                                    <p class="text-muted"><?php echo substr($article["description"], 0, 90) . "..."; ?></p>
                                                    <!-- <button type="button" class="btn waves-effect waves-light btn-danger text-white fw-bold" data-bs-toggle="modal" data-bs-target="#command<?php echo $article["id"] ?>">Commander</button> -->

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
                                                </div>
                                                <?php if ($article['is_ordered'] == 1): ?>
                                                    <button type="button" class="btn btn-secondary text-white fw-bold" disabled>Déjà commandé par un utilisateur</button>
                                                <?php else: ?>
                                                    <div class="d-grid gap-2">
                                                        <a class="stretched-link btn waves-effect waves-light btn-danger text-white fw-bold" href="index.php?action=detailArticle&id=<?php echo $article["id"] ?>">Disponible</a>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach ?>

                            </div>
                            <!-- <div class="row g-3 mb-3">
                                <div class="col-md-12">
                                    <nav class="justify-content-end d-flex">
                                        <ul class="pagination">
                                            <li class="page-item disabled">
                                                <a class="page-link text-danger" href="#" tabindex="-1">Previous</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item  text-danger active" aria-current="page">
                                                <a class="page-link  text-white" href="#">2</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link  text-danger" href="#">Next</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div> -->
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