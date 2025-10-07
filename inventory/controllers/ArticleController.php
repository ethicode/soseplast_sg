<?php
require_once('models/UserModel.php');
require_once('models/Product.php');
require_once('models/Article.php');
require_once('models/Category.php');
require_once('models/User.php');
require_once('models/Command.php');
require_once('models/StatusArticle.php');

class ArticleController
{
    private $model;
    private $modelCategory;
    private $categoryModel;
    private $articleModel;
    private $userModel;
    private $commandModel;
    private $statusArticleModel;

    public function __construct()
    {
        $this->model = new UserModel();
        $this->userModel = new User();
        $this->modelCategory = new Category();
        $this->categoryModel = new Category();
        $this->articleModel = new Article();
        $this->commandModel = new Command();
        $this->statusArticleModel = new StatusArticle();
    }

    public function showAllArticles()
    {
        $total_pages = $this->articleModel->selectCount();
        $page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;
        $num_results_on_page = 8;
        $calc_page = ($page - 1) * $num_results_on_page;


        // $articles = $this->articleModel->getArticlesByPagination($calc_page, $num_results_on_page);
        $articles = $this->articleModel->getAllArticles();
        $categories = $this->modelCategory->getAllCategory();
        $articleCount = $this->articleModel->selectCount();
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
        $categories = $this->categoryModel->getAllCategoryForSale();
        require_once('views/sale/sells_By_category.php');
    }

    public function searchArticles()
    {
        $search = $_GET['search'];
        $articles = $this->articleModel->searchArticles($search);
        $categories = $this->modelCategory->getAllCategory();
        require_once('views/search/search_articles.php');
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
        }

        $article = $this->articleModel->getArticleById($id);
        $categories = $this->categoryModel->getAllCategoryForSale();
        require_once('views/collaborator/detail_article.php');
    }

    public function showUpdateArticleForm()
    {
        $id = $_GET['id'];
        $article = $this->articleModel->getArticleById($id);
        $categories = $this->modelCategory->getAllCategory();
        $status_articles = $this->statusArticleModel->getAllStatusArticles();
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


        $articles = $this->articleModel->getForSaleArticlesByPagination();
        $categories = $this->modelCategory->getAllCategory();
        $articleCount = $this->articleModel->selectCount();
        require_once('views/sale/sells.php');
    }

    public function addArticle()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $upload_directory = "./public/images/";

        // Définir le chemin de destination des images après upload
        $image_url = $upload_directory . basename($_FILES["image_url"]["name"]);
        $image_1 = $upload_directory . basename($_FILES["image_1"]["name"]);
        $image_2 = $upload_directory . basename($_FILES["image_2"]["name"]);
        $image_3 = $upload_directory . basename($_FILES["image_3"]["name"]);

        // Générer un nom unique pour les fichiers afin d'éviter les conflits de noms
        $image_url = $this->generateUniqueFileName($image_url);
        $image_1 = $this->generateUniqueFileName($image_1);
        $image_2 = $this->generateUniqueFileName($image_2);
        $image_3 = $this->generateUniqueFileName($image_3);

        // Déplacer les fichiers téléchargés dans le répertoire 'public/images/'
        move_uploaded_file($_FILES["image_url"]["tmp_name"], $image_url);
        move_uploaded_file($_FILES["image_1"]["tmp_name"], $image_1);
        move_uploaded_file($_FILES["image_2"]["tmp_name"], $image_2);
        move_uploaded_file($_FILES["image_3"]["tmp_name"], $image_3);

        // Récupérer les autres informations de l'article
        $name = $_POST['name'];
        $description = $_POST['description'];
        $category_id = $_POST['category'];
        $quantity = $_POST['quantity'];
        $location = $_POST['location'];
        $point = $_POST['point'];
        $for_sale = isset($_POST['for_sale']) ? 1 : 0;

        // Appeler le modèle pour ajouter l'article
        $this->articleModel->addArticle($name, $description, $category_id, $point, $for_sale, $quantity, $location, $image_url, $image_1, $image_2, $image_3);
    }
    // Rediriger vers la liste des articles
    header('Location: index.php?action=articles');
}

// Fonction pour générer un nom unique pour le fichier
private function generateUniqueFileName($filePath)
{
    // Vérifier si le fichier existe déjà et générer un nom unique
    if (file_exists($filePath)) {
        $file_extension = pathinfo($filePath, PATHINFO_EXTENSION);
        $file_name = pathinfo($filePath, PATHINFO_FILENAME) . '_' . uniqid() . '.' . $file_extension;
        return dirname($filePath) . '/' . $file_name;
    }
    return $filePath;
}


    public function saveArticle()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $article_id = $_POST['article_id'];
            $name = $_POST['name'];
            $description = $_POST['description'];
            $category_id = $_POST['category_id'];
            $point = $_POST['point'];
            $quantity = $_POST['quantity'];
            $location = $_POST['location'];
            $status_id = $_POST['status_article_id'];
            $for_sale = isset($_POST['for_sale']) ? 1 : 0;

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

            $this->articleModel->saveArticle($name, $description, $category_id, $status_id, $for_sale, $point, $quantity, $location, $image_url, $image_1, $image_2, $image_3, $article_id);
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
