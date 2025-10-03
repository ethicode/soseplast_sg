<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<!-- Mirrored from pixelwibes.com/template/ebazar/html/dist/customer-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Aug 2025 13:37:43 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SOSEPLAST </title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->

    <!-- plugin css file  -->
    <link rel="stylesheet" href="assets/plugin/datatables/responsive.dataTables.min.css">
    <link rel="stylesheet" href="assets/plugin/datatables/dataTables.bootstrap5.min.css">

    <!-- project css file  -->
    <link rel="stylesheet" href="assets/css/ebazar.style.min.css">
</head>

<body>
    <div id="ebazar-layout" class="theme-blue">

        <!-- main body area -->
        <div class="main">

            <!-- Body: Header -->
            <?php require 'sections/header.php' ?>

            <!-- Body: Body -->
            <div class="body d-flex py-3">
                <div class="container-xxl">
                    <div class="row align-items-center">
                        <div class="border-0 mb-4">
                            <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                                <h3 class="fw-bold mb-0">Mon Compte</h3>
                            </div>
                        </div>
                    </div> <!-- Row end  -->
                    <div class="row g-3 mb-xl-3">
                        <div class="col-xxl-4 col-xl-12 col-lg-12 col-md-12">
                            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-1 row-deck g-3">
                                <div class="col">
                                    <div class="card profile-card">
                                        <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                            <h6 class="mb-0 fw-bold ">Profile</h6>
                                        </div>
                                        <div class="card-body d-flex profile-fulldeatil flex-column">
                                            <div class="profile-block text-center w220 mx-auto">
                                                <a href="#">
                                                    <img src="assets/images/lg/avatar4.svg" alt="" class="avatar xl rounded img-thumbnail shadow-sm">
                                                </a>
                                                <div class="about-info d-flex align-items-center mt-3 justify-content-center flex-column">
                                                    <span class="text-muted small">ID : #CS-00002</span>
                                                </div>
                                            </div>
                                            <div class="profile-info w-100">
                                                <h6 class="mb-0 mt-2  fw-bold d-block fs-6 text-center"><?php echo $user["name"] ?></h6>
                                                <span class="py-1 fw-bold small-11 mb-0 mt-1 text-muted text-center mx-auto d-block">24 years, California</span>
                                                <p class="mt-2">Duis felis ligula, pharetra at nisl sit amet, ullamcorper fringilla mi. Cras luctus metus non enim porttitor sagittis. Sed tristique scelerisque arcu id dignissim.</p>
                                                <div class="row g-2 pt-2">
                                                    <div class="col-xl-12">
                                                        <div class="d-flex align-items-center">
                                                            <i class="icofont-ui-touch-phone"></i>
                                                            <span class="ms-2">202-555-0174 </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12">
                                                        <div class="d-flex align-items-center">
                                                            <i class="icofont-email"></i>
                                                            <span class="ms-2">adrianallan@gmail.com</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12">
                                                        <div class="d-flex align-items-center">
                                                            <i class="icofont-birthday-cake"></i>
                                                            <span class="ms-2">19/03/1980</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12">
                                                        <div class="d-flex align-items-center">
                                                            <i class="icofont-address-book"></i>
                                                            <span class="ms-2">2734 West Fork Street,EASTON 02334.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                            <h6 class="mb-0 fw-bold ">Expence Count</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex justify-content-end text-center">
                                                <div class="p-2">
                                                    <h6 class="mb-0 fw-bold">$1790</h6>
                                                    <span class="text-muted">Total</span>
                                                </div>
                                                <div class="p-2 ms-4">
                                                    <h6 class="mb-0 fw-bold">$149.16</h6>
                                                    <span class="text-muted">Avg Month</span>
                                                </div>
                                            </div>
                                            <div id="apex-circle-gradient"></div>
                                            <div class="row">
                                                <div class="col">
                                                    <span class="mb-3 d-block">Food</span>
                                                    <div class="progress-bar  bg-secondary" role="progressbar" style="width: 55%; height: 5px;"></div>
                                                    <span class="mt-2 d-block text-secondary">$597 spend</span>
                                                </div>
                                                <div class="col">
                                                    <span class="mb-3 d-block">Cloth</span>
                                                    <div class="progress-bar  bg-primary" role="progressbar" style="width: 60%; height: 5px;"></div>
                                                    <span class="mt-2 d-block text-primary">$845 spend</span>
                                                </div>
                                                <div class="col">
                                                    <span class="mb-3 d-block">Other</span>
                                                    <div class="progress-bar  bg-lavender-purple" role="progressbar" style="width: 70%; height: 5px;"></div>
                                                    <span class="mt-2 d-block color-lavender-purple">$348 spend</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mt-3">
                                <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                    <h6 class="mb-0 fw-bold ">Status report</h6>
                                </div>
                                <div class="card-body">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-4">
                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <h6 class="mb-0">54</h6>
                                                <span class="small text-muted">Product Visit</span>
                                            </div>
                                            <div class="progress" style="height: 2px;">
                                                <div class="progress-bar bg-success" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="87" data-transitiongoal="87" style="width: 87%;"></div>
                                            </div>
                                        </li>
                                        <li class="mb-4">
                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <h6 class="mb-0">27</h6>
                                                <span class="small text-muted">Product Buy</span>
                                            </div>
                                            <div class="progress" style="height: 2px;">
                                                <div class="progress-bar bg-info" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="34" data-transitiongoal="34" style="width: 34%;"></div>
                                            </div>
                                        </li>
                                        <li class="mb-4">
                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <h6 class="mb-0">102</h6>
                                                <span class="small text-muted">Comment on Product</span>
                                            </div>
                                            <div class="progress" style="height: 2px;">
                                                <div class="progress-bar bg-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="14" data-transitiongoal="14" style="width: 14%;"></div>
                                            </div>
                                        </li>
                                        <li class="mb-0">
                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <h6 class="mb-0">1024 Hours</h6>
                                                <span class="small text-muted">Total spent time</span>
                                            </div>
                                            <div class="progress" style="height: 2px;">
                                                <div class="progress-bar bg-danger" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="67" data-transitiongoal="67" style="width: 67%;"></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-8 col-xl-12 col-lg-12 col-md-12">
                            <div class="row g-3 mb-3 row-cols-1 row-cols-md-1 row-cols-lg-2 row-deck">
                                <div class="col">
                                    <div class="card auth-detailblock">
                                        <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                            <h6 class="mb-0 fw-bold ">Delivery Address</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="row g-3">
                                                <div class="col-12">
                                                    <label class="form-label col-6 col-sm-5">Block Number:</label>
                                                    <span><strong>A-510</strong></span>
                                                </div>
                                                <div class="col-12">
                                                    <label class="form-label col-6 col-sm-5">Address:</label>
                                                    <span><strong>81 Fulton London</strong></span>
                                                </div>
                                                <div class="col-12">
                                                    <label class="form-label col-6 col-sm-5">Pincode:</label>
                                                    <span><strong>385467</strong></span>
                                                </div>
                                                <div class="col-12">
                                                    <label class="form-label col-6 col-sm-5">Phone:</label>
                                                    <span><strong>202-458-4568</strong></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                            <h6 class="mb-0 fw-bold ">Billing Address</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="row g-3">
                                                <div class="col-12">
                                                    <label class="form-label col-6 col-sm-5">Block Number:</label>
                                                    <span><strong>A-510</strong></span>
                                                </div>
                                                <div class="col-12">
                                                    <label class="form-label col-6 col-sm-5">Address:</label>
                                                    <span><strong>81 Fulton London</strong></span>
                                                </div>
                                                <div class="col-12">
                                                    <label class="form-label col-6 col-sm-5">Pincode:</label>
                                                    <span><strong>385467</strong></span>
                                                </div>
                                                <div class="col-12">
                                                    <label class="form-label col-6 col-sm-5">Phone:</label>
                                                    <span><strong>202-458-4568</strong></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                    <h6 class="mb-0 fw-bold ">Mes commandes</h6>
                                </div>
                                <div class="card-body">
                                    <table id="myProjectTable" class="table table-hover align-middle mb-0" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Item</th>
                                                <th>Payment Info</th>
                                                <th>Order Date</th>
                                                <th>Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($commands as $command): ?>
                                                <tr>
                                                    <td><a href="order-details.html"><strong>#Order-78414</strong></a></td>
                                                    <td><img src="assets/images/product/product-1.jpg" class="avatar lg rounded me-2" alt="profile-image"><span><?php echo $command["name"]; ?> </span></td>
                                                    <?php if ($command["is_validated"] === 1): ?>
                                                        <td><span class="badge bg-success">Validé</span> </td>
                                                    <?php elseif ($command["is_validated"] === null): ?>
                                                        <td><span class="badge bg-dark">En attente</span> </td>
                                                    <?php else: ?>
                                                        <td><span class="badge bg-danger">rejeté</span> </td>
                                                    <?php endif ?>
                                                    <td>June 16, 2021</td>
                                                    <td>
                                                        $420
                                                    </td>
                                                </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row end  -->
                </div>
            </div>

            <!-- Modal Custom Settings-->
            <div class="modal fade right" id="Settingmodal" tabindex="-1" aria-hidden="true">
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
                                    <li data-theme="indigo">
                                        <div class="indigo"></div>
                                    </li>
                                    <li data-theme="tradewind">
                                        <div class="tradewind"></div>
                                    </li>
                                    <li data-theme="monalisa">
                                        <div class="monalisa"></div>
                                    </li>
                                    <li data-theme="blue" class="active">
                                        <div class="blue"></div>
                                    </li>
                                    <li data-theme="cyan">
                                        <div class="cyan"></div>
                                    </li>
                                    <li data-theme="green">
                                        <div class="green"></div>
                                    </li>
                                    <li data-theme="orange">
                                        <div class="orange"></div>
                                    </li>
                                    <li data-theme="blush">
                                        <div class="blush"></div>
                                    </li>
                                    <li data-theme="red">
                                        <div class="red"></div>
                                    </li>
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
                                    <li data-theme="dynamic">
                                        <div class="dynamic"><i class="icofont-paint me-2"></i> Click to Dyanmic Setting</div>
                                    </li>
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

    <!-- Plugin Js -->
    <script src="assets/bundles/apexcharts.bundle.js"></script>
    <script src="assets/bundles/dataTables.bundle.js"></script>

    <!-- Jquery Page Js -->
    <script src="../js/template.js"></script>
    <script src="../js/page/profile.js"></script>
    <script>
        $(document).ready(function() {
            $('#myProjectTable')
                .addClass('nowrap')
                .dataTable({
                    responsive: true,
                    columnDefs: [{
                        targets: [-1, -3],
                        className: 'dt-body-right'
                    }]
                });
        });
    </script>
</body>

<!-- Mirrored from pixelwibes.com/template/ebazar/html/dist/customer-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Aug 2025 13:37:44 GMT -->

</html>