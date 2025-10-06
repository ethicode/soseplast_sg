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

    public function showAllArticles()
    {
        // Récupérer la recherche éventuelle depuis $_GET
        $search = isset($_GET['search']) ? trim($_GET['search']) : '';

        // Pagination
        $total_pages = $this->articleModel->selectCount($search); // <-- on adapte la méthode pour compter selon la recherche
        $page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
        $num_results_on_page = 8;
        $calc_page = ($page - 1) * $num_results_on_page;

        // Récupérer les articles avec ou sans recherche
        if (!empty($search)) {
            $articles = $this->articleModel->getArticlesBySearch($search, $calc_page, $num_results_on_page);
        } else {
            $articles = $this->articleModel->getArticlesByPagination($calc_page, $num_results_on_page);
        }

        // Catégories
        $categories = $this->modelCategory->getAllCategory();

        // Compteur d'articles (selon recherche)
        $articleCount = $this->articleModel->selectCount($search);

        require_once('views/article/articles.php');
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
        $user = $this->userModel->getUserById($_SESSION["soseplast_user_id"]);
        $categories = $this->categoryModel->getAllCategoryForSale();
        require_once('ecommerce/sells_By_category.php');
    }

    public function searchArticles()
    {
        $search = $_GET['search'];
        $articles = $this->articleModel->searchArticles($search);
        $categories = $this->modelCategory->getAllCategory();
        require_once('ecommerce/home.php');
    }

    public function showDetailArticleForAdmin()
    {

        $user = null;
        if (isset($_SESSION["soseplast_user_id"])) {
            $user = $this->userModel->getUserById($_SESSION["soseplast_user_id"]);
        }

        $id = $_GET['id'];
        $article = $this->articleModel->getArticleById($id);
        $categories = $this->modelCategory->getAllCategory();
        require_once('views/article/detail_article.php');
    }


    public function showDetailArticle()
    {

        $user = null;
        $command = null;
        $id = $_GET['id'];
        if (isset($_SESSION["soseplast_user_id"])) {
            $user = $this->userModel->getUserById($_SESSION["soseplast_user_id"]);
            $user_id = $_SESSION["soseplast_user_id"];
            $command = $this->commandModel->getCommandByUserId($user_id, $id);
            $isCommanded = $this->commandModel->getCommandByArticleId($id);
        }

        $article = $this->articleModel->getArticleById($id);
        $categories = $this->categoryModel->getAllCategoryForSale();
        require_once('ecommerce/detail_article.php');
    }

    public function showUpdateArticleForm()
    {
        $id = $_GET['id'];
        $article = $this->articleModel->getArticleById($id);
        $categories = $this->modelCategory->getAllCategory();
        require_once('views/article/edit_article_form.php');
    }

    public function showUsers()
    {
        $users = $this->model->getAllUsers();
        require_once('views/user_view.php');
    }

    public function addUserForm()
    {
        require_once('views/user_form.php');
    }

    public function addArticleForm()
    {
        $categories = $this->modelCategory->getAllCategory();
        require_once('views/article/add_article_form.php');
    }

    public function showForSaleArticles()
    {
        $total_pages = $this->articleModel->selectForSaleCount();
        $page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;
        $num_results_on_page = 8;
        $calc_page = ($page - 1) * $num_results_on_page;


        $articles = $this->articleModel->getForSaleArticlesByPagination($calc_page, $num_results_on_page);
        $categories = $this->modelCategory->getAllCategory();
        $articleCount = $this->articleModel->selectCount();
        require_once('views/sale/sells.php');
    }

    public function addArticle()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $upload_directory = "./public/images/";
            $image_url = $_FILES["image_url"]["name"];
            $image_1 = $_FILES["image_1"]["name"];
            $image_2 = $_FILES["image_2"]["name"];
            $image_3 = $_FILES["image_3"]["name"];

            if (file_exists($image_url)) {
                $image_url = $upload_directory . basename($_FILES["image_url"]["name"]);
                $file_extension = pathinfo($image_url, PATHINFO_EXTENSION);
                $file_name = pathinfo($image_url, PATHINFO_FILENAME) . '_' . uniqid() . '.' . $file_extension;
                $image_url = $upload_directory . $file_name;
            }
            if (file_exists($image_1)) {
                $image_1 = $upload_directory . basename($_FILES["image_1"]["name"]);
                $file_extension = pathinfo($image_1, PATHINFO_EXTENSION);
                $file_name = pathinfo($image_1, PATHINFO_FILENAME) . '_' . uniqid() . '.' . $file_extension;
                $image_1 = $upload_directory . $file_name;
            }
            if (file_exists($image_2)) {
                $file_extension = pathinfo($image_2, PATHINFO_EXTENSION);
                $file_name = pathinfo($image_2, PATHINFO_FILENAME) . '_' . uniqid() . '.' . $file_extension;
                $image_2 = $upload_directory . $file_name;
                $image_2 = $upload_directory . basename($_FILES["image_2"]["name"]);
            }
            if (file_exists($image_3)) {
                $file_extension = pathinfo($image_3, PATHINFO_EXTENSION);
                $file_name = pathinfo($image_3, PATHINFO_FILENAME) . '_' . uniqid() . '.' . $file_extension;
                $image_3 = $upload_directory . $file_name;
                $image_3 = $upload_directory . basename($_FILES["image_3"]["name"]);
            }
            move_uploaded_file($_FILES["image_url"]["tmp_name"], $image_url);
            move_uploaded_file($_FILES["image_1"]["tmp_name"], $image_1);
            move_uploaded_file($_FILES["image_2"]["tmp_name"], $image_2);
            move_uploaded_file($_FILES["image_3"]["tmp_name"], $image_3);

            $name = $_POST['name'];
            $description = $_POST['description'];
            $category_id = $_POST['category'];
            $quantity = $_POST['quantity'];
            $location = $_POST['location'];
            $this->articleModel->addArticle($name, $description, $category_id, $quantity, $location, $image_url, $image_1, $image_2, $image_3);
        }
        header('Location: index.php?action=articles');
    }

    public function saveArticle()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $article_id = $_POST['article_id'];
            $name = $_POST['name'];
            $description = $_POST['description'];
            $category_id = $_POST['category_id'];
            $quantity = $_POST['quantity'];
            $price = $_POST['price'];
            $location = $_POST['location'];

            $upload_directory = "./public/images/";
            $image_url = $upload_directory . basename($_FILES["image_url"]["name"]);
            $image_1 = $upload_directory . basename($_FILES["image_1"]["name"]);
            $image_2 = $upload_directory . basename($_FILES["image_2"]["name"]);
            $image_3 = $upload_directory . basename($_FILES["image_3"]["name"]);

            if (isset($_FILES['image_url']) && $_FILES['image_url']['error'] == 0) {
                if (file_exists($image_url)) {
                    $file_extension = pathinfo($image_url, PATHINFO_EXTENSION);
                    $file_name = pathinfo($image_url, PATHINFO_FILENAME) . '_' . uniqid() . '.' . $file_extension;
                    $image_url = $upload_directory . $file_name;
                }
            } else {
                $article = $this->articleModel->getArticleById($article_id);
                $image_url = $article["image_url"];
            }

            if (isset($_FILES['image_1']) && $_FILES['image_1']['error'] == 0) {
                if (file_exists($image_1)) {
                    $file_extension = pathinfo($image_1, PATHINFO_EXTENSION);
                    $file_name = pathinfo($image_1, PATHINFO_FILENAME) . '_' . uniqid() . '.' . $file_extension;
                    $image_1 = $upload_directory . $file_name;
                }
            } else {
                $article = $this->articleModel->getArticleById($article_id);
                $image_1 = $article["image_1"];
            }

            if (isset($_FILES['image_2']) && $_FILES['image_2']['error'] == 0) {
                if (file_exists($image_2)) {
                    $file_extension = pathinfo($image_2, PATHINFO_EXTENSION);
                    $file_name = pathinfo($image_2, PATHINFO_FILENAME) . '_' . uniqid() . '.' . $file_extension;
                    $image_2 = $upload_directory . $file_name;
                }
            } else {
                $article = $this->articleModel->getArticleById($article_id);
                $image_2 = $article["image_2"];
            }

            if (isset($_FILES['image_3']) && $_FILES['image_3']['error'] == 0) {
                if (file_exists($image_3)) {
                    $file_extension = pathinfo($image_3, PATHINFO_EXTENSION);
                    $file_name = pathinfo($image_3, PATHINFO_FILENAME) . '_' . uniqid() . '.' . $file_extension;
                    $image_3 = $upload_directory . $file_name;
                }
            } else {
                $article = $this->articleModel->getArticleById($article_id);
                $image_3 = $article["image_3"];
            }

            move_uploaded_file($_FILES["image_url"]["tmp_name"], $image_url);
            move_uploaded_file($_FILES["image_1"]["tmp_name"], $image_1);
            move_uploaded_file($_FILES["image_2"]["tmp_name"], $image_2);
            move_uploaded_file($_FILES["image_3"]["tmp_name"], $image_3);

            $this->articleModel->saveArticle($name, $description, $category_id, $quantity, $price, $location, $image_url, $image_1, $image_2, $image_3, $article_id);
        }
        // header('Location: index.php?action=articles');
        header('Location: index.php?action=detailArticleAdmin&id=' . $article_id);
    }

    public function editUser()
    {
        $id = $_GET['id'];
        $user = $this->model->getUserById($id);
        require_once('views/user_edit_form.php');
    }

    public function sellArticle()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $article_id = $_POST['article_id'];
            $price = $_POST['price'];
            $for_sale = $_POST['for_sale'];
            $this->articleModel->sellArticle($for_sale, $price, $article_id);
        }
        header('Location: index.php?action=articles');
    }

    public function updateUser()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $this->model->updateUser($id, $username, $email);
        }
        header('Location: index.php');
    }

    public function deleteArticle()
    {
        $id = $_GET['id'];
        $this->articleModel->deleteArticle($id);
        header('Location: index.php?action=articles');
    }
}
