<?php
require_once('models/UserModel.php');
require_once('models/Product.php');
require_once('models/Article.php');
require_once('models/Category.php');
require_once('models/User.php');
require_once('models/Command.php');

class ArticleController
{
    private $model;
    private $modelCategory;
    private $categoryModel;
    private $articleModel;
    private $userModel;
    private $commandModel;

    public function __construct()
    {
        $this->model = new UserModel();
        $this->userModel = new User();
        $this->modelCategory = new Category();
        $this->categoryModel = new Category();
        $this->articleModel = new Article();
        $this->commandModel = new Command();
    }


    public function SellArticles()
    {
        $total_pages = $this->articleModel->selectCount();
        $page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;
        $num_results_on_page = 12;
        $calc_page = ($page - 1) * $num_results_on_page;

        $articles = $this->articleModel->getForSaleArticlesByPagination($calc_page, $num_results_on_page);
        $categories = $this->categoryModel->getAllCategory();
        require_once('views/sale/sells_By_category.php');
    }

    public function SellArticlesByCategory()
    {

        $article_id = $_GET['id'];

        $total_pages = $this->articleModel->selectForSaleCount();
        $page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;
        $num_results_on_page = 12;
        $calc_page = ($page - 1) * $num_results_on_page;

        $articles = $this->articleModel->sellArticlesByCategory($article_id, $calc_page, $num_results_on_page);
        // $categories = $this->categoryModel->getAllCategory();
        $categories = $this->categoryModel->getAllCategoryForSale();
        require_once('sells_By_category.php');
    }

    public function searchArticles()
    {
        $search = $_GET['search'];
        $articles = $this->articleModel->searchArticles($search);
        $categories = $this->modelCategory->getAllCategory();
        require_once('home.php');
    }
}
