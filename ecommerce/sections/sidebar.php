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
        <div class="reset-block">
            <div class="filter-title">
                <h4 class="title">Filtrer</h4>
            </div>
            <div class="filter-btn">
                <a class="btn btn-danger text-white" href="#">Reinitialiser</a>
            </div>
        </div>
        <div class="price-range">
            <div class="price-amount flex-wrap">
                <div class="amount-input m-3">
                    <select name="point" class="form-select" aria-label="Default select example">
                        <option value="1">Filtrer par point</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>