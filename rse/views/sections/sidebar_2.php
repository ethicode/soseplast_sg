    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li> <a class="waves-effect waves-dark" href="index.php"><i class="ti-layout-grid2"></i><span class="hide-menu">TOUS</span></a>
                    </li>
                    <?php foreach ($categories as $category): ?>
                        <li> <a class="waves-effect waves-dark" href="index.php?action=sellArticlesByCategory&id=<?php echo $category["id"] ?>"><i class="ti-layout-grid2"></i><span class="hide-menu"><?php echo $category["name"] ?> (<?php echo $category["articles_count"] ?>)</span></a>
                        <?php endforeach ?>
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>