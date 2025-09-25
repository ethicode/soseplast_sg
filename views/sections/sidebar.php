    <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="user-pro"> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><img src="./public/dist/images/alb1.jpg" alt="user-img" class="img-circle"><span class="hide-menu">
                            <?php
                            if(isset($_SESSION['username'])){
                                echo $_SESSION['username'];
                            }else{
                                echo 'Administrateur';
                            }
                            ?>
                        </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="javascript:void(0)"><i class="ti-user"></i> Mon profile</a></li>
                                <li><a href="/incident/auth/logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                            </ul>
                        </li>
                        <li> <a class="waves-effect waves-dark mt-5" href="index.php?action=dashboard"><i class="icon-home"></i><span class="hide-menu">DASHBOARD</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="index.php?action=articles"><i class="ti-shopping-cart"></i><span class="hide-menu">STOCK</span></a></li>
                       <li> <a class="waves-effect waves-dark" href="index.php?action=forsale"><i class="ti-shopping-cart-full"></i><span class="hide-menu">MISE EN VENTE</span></a></li>
                       <li> <a class="waves-effect waves-dark" href="index.php?action=categories"><i class="ti-layout-grid2"></i><span class="hide-menu">CATEGORIES</span></a></li>
                       <li> <a class="waves-effect waves-dark" href="index.php?action=commandes"><i class="ti-pencil"></i><span class="hide-menu">COMMANDES</span></a></li>
                       <li class="nav-small-cap">------------------</li>
                        <li> <a class="waves-effect waves-dark" href="index.php?action=utilisateurs"><i class="ti-user"></i><span class="hide-menu">UTILISATEURS</span></a></li>
                       <li> <a class="waves-effect waves-dark" href="index.php?action=demandes"><i class="ti-email"></i><span class="hide-menu">DEMANDES</span></a></li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>