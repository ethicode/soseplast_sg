<div class="sticky-lg-top">
    <div class="card mb-3">
        <div class="categories">
            <div class="collapse show" id="category">
                <div class="filter-category">
                    <ul class="category-listd">
                        <li><a class='title fw-bold h5' href="#" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" class="collapsed">Categories</a>
                            <ul id="" class="" data-parent="#">
                                <?php foreach ($categories as $category): ?>
                                    <li class="m-3 h6"> <a href="index.php?action=sellArticlesByCategory&id=<?php echo $category["id"] ?>"><?php echo $category["name"] ?></a></li>
                                <?php endforeach ?>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3">
        <div class="dropdown m-3">
            <button class="btn btn-danger text-white  fw-bold dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                Filtrer par point
            </button>
            <ul class="dropdown-menu border-0 shadow p-3">
                <li><a class="dropdown-item py-1 rounded" href="index.php?action=filtrer&filtrer=1">1 point</a></li>
                <li><a class="dropdown-item py-1 rounded" href="index.php?action=filtrer&filtrer=2">2 points</a></li>
                <li><a class="dropdown-item py-1 rounded" href="index.php?action=filtrer&filtrer=3">3 points</a></li>
                <li><a class="dropdown-item py-1 rounded" href="index.php?action=filtrer&filtrer=4">4 points</a></li>
                <li><a class="dropdown-item py-1 rounded" href="index.php?action=filtrer&filtrer=5">5 points</a></li>
            </ul>
        </div>
    </div>
</div>