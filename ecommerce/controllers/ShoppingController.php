<?php
require_once('models/UserModel.php');
require_once('models/User.php');
require_once('models/Role.php');
require_once('models/Article.php');
require_once('models/Category.php');
require_once('models/Sell.php');

class ShoppingController
{
    private $model;
    private $userModel;
    private $roleModel;
    private $articleModel;
    private $categoryModel;
    private $sellModel;

    public function __construct()
    {
        $this->model = new UserModel();
        $this->userModel = new User();
        $this->articleModel = new Article();
        $this->categoryModel = new Category();
        $this->sellModel = new Sell();
    }

    public function showAllArticles()
{
    // Nombre total d'articles à vendre
    $total_articles = $this->articleModel->selectCountSell();

    // Définir le nombre d'articles par page
    $num_results_on_page = 24;

    // Calculer le nombre total de pages
    $total_pages = ceil($total_articles / $num_results_on_page);

    // Obtenir la page actuelle depuis l'URL (par défaut = 1)
    $page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;

    // Sécuriser la valeur de page (éviter les débordements)
    if ($page < 1) {
        $page = 1;
    } elseif ($page > $total_pages) {
        $page = $total_pages;
    }

    // Calculer l'offset pour la requête SQL
    $calc_page = ($page - 1) * $num_results_on_page;

    // Récupérer les articles paginés
    $articles = $this->articleModel->getForSaleArticlesByPagination($calc_page, $num_results_on_page);

    // Récupérer les catégories
    $categories = $this->categoryModel->getAllCategoryForSale();

    // Récupérer les infos de l'utilisateur connecté
    $id = $_SESSION['soseplast_user_id'];
    $user = $this->userModel->getUserById($id);

    // Inclure la vue
    require_once('home.php');
}


    public function showDetailArticle()
    {
        $id = $_GET['id'];
        $article = $this->sellModel->getDetailSell($id);
        $categories = $this->categoryModel->getAllCategory();
        require_once('views/shopping/detail_article.php');
    }

    public function addUserForm()
    {
        require_once('views/user_form.php');
    }

    public function addUser()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $role_id = $_POST['role_id'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $this->UserModel->addUser($name, $email, $password, $role_id);
        }
        header('Location: ?action=utilisateurs');
    }

    public function editUser()
    {
        $id = $_GET['id'];
        $user = $this->model->getUserById($id);
        require_once('views/user_edit_form.php');
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

    public function deleteUser()
    {
        $id = $_GET['id'];
        $this->model->deleteUser($id);
        header('Location: index.php');
    }
}
