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
    private $UserModel;
    private $roleModel;
    private $articleModel;
    private $categoryModel;
    private $sellModel;

    public function __construct()
    {
        $this->model = new UserModel();
        $this->UserModel = new User();
        $this->articleModel = new Article();
        $this->categoryModel = new Category();
        $this->sellModel = new Sell();
    }

    public function showAllArticles()
    {

        $total_pages = $this->articleModel->selectCount();
        $page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;
        $num_results_on_page = 12;
        $calc_page = ($page - 1) * $num_results_on_page;

        $articles = $this->articleModel->getForSaleArticlesByPagination($calc_page, $num_results_on_page);
        $categories = $this->categoryModel->getAllCategory();
        require_once('views/shopping/home.php');
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
