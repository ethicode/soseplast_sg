<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<!-- Mirrored from pixelwibes.com/template/ebazar/html/dist/ui-elements/auth-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Aug 2025 13:38:11 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SOSEPLAST </title>
    <link rel="icon" href="../favicon.ico" type="image/x-icon"> <!-- Favicon-->

    <!-- project css file  -->
    <link rel="stylesheet" href="../assets/css/ebazar.style.min.css">
</head>

<body>
    <div id="ebazar-layout" class="theme-blue">

        <!-- main body area -->
        <div class="main p-2">
            <?php require 'sections/header.php' ?>

            <!-- Body: Body -->
            <div class="body d-flex p-0 p-xl-5">
                <div class="container-xxl">

                    <div class="row g-0">
                        <div class="col-lg-6 d-none d-lg-flex justify-content-center align-items-center rounded-lg auth-h100">
                            <div style="max-width: 25rem;">
                                <div class="text-center mb-5">
                                    <i class="bi bi-bag-check-fill  text-primary" style="font-size: 90px;"></i>
                                </div>
                                <!-- Image block -->
                                <div class="">
                                    <img src="../assets/images/login-img.svg" alt="login-img">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 d-flex justify-content-center align-items-center border-0 rounded-lg auth-h100">
                            <div class="w-100 p-3 p-md-5 card border-0 shadow-sm" style="max-width: 32rem;">
                                <!-- Form -->
                                <form class="row g-1 p-3 p-md-4" action="index.php?action=register" method="POST">
                                    <div class="col-12 text-center mb-5">
                                        <h1>Créer un compte</h1>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-2">
                                            <label class="form-label">Nom d'utilisateur</label>
                                            <input type="email"name="name" class="form-control form-control-lg" placeholder="Moussa">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-2">
                                            <label class="form-label"> Adresse Email  </label>
                                            <input name="email" type="email" class="form-control form-control-lg" placeholder="nom@example.com">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-2">
                                            <label class="form-label">Mot de passe</label>
                                            <input type="email" name="password" class="form-control form-control-lg" placeholder="4+ characters required">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-2">
                                            <label class="form-label">Confirmer le mot de passe</label>
                                            <input name="password2" type="email" class="form-control form-control-lg" placeholder="4+ characters required">
                                        </div>
                                    </div>
                                    <div class="col-12 text-center mt-4">
                                        <a href="auth-signin.html" class="btn btn-lg btn-block btn-danger text-white fw-bold lift text-uppercase" alt="SIGNUP">VALIDER</a>
                                    </div>
                                    <div class="col-12 text-center mt-4">
                                        <span>Vous avez déjà un compte ? <a href="index.php?action=loginForm" title="Sign in" class="text-danger">Identifiez-vous</a></span>
                                    </div>
                                </form>
                                <!-- End Form -->

                            </div>
                        </div>
                    </div> <!-- End Row -->

                </div>
            </div>

        </div>

    </div>

    <!-- Jquery Core Js -->
    <script src="../assets/bundles/libscripts.bundle.js"></script>
</body>

<!-- Mirrored from pixelwibes.com/template/ebazar/html/dist/ui-elements/auth-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Aug 2025 13:38:11 GMT -->

</html>