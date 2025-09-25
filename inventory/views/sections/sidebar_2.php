    <aside class="left-sidebar shadow shadow-none">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li> <a class="waves-effect waves-dark text-dark" href="index.php"><span class="hide-menu">Catégories</span></a>
                    </li>
                    <?php foreach ($categories as $category): ?>
                        <li class="ms-3"> <a class="waves-effect waves-dark" href="index.php?action=sellArticlesByCategory&id=<?php echo $category["id"] ?>"> <span class="hide-menu"><?php echo $category["name"] ?> (<?php echo $category["articles_count"] ?>)</span></a> </li>
                    <?php endforeach ?>
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll -->
    </aside>