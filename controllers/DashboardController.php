<?php
require_once('models/Product.php');
require_once('models/User.php');
require_once('models/Category.php');
require_once('models/Article.php');
require_once('models/Request.php');
require_once('models/Command.php');

class DashboardController {
    private $model;
    private $modelUser;
    private $modelProduct;
    private $modelCategory;
    private $articleModel;
    private $requestModel;
    private $commandModel;

    public function __construct() {
        $this->model = new UserModel();
        $this->modelUser = new User();
        $this->modelProduct = new Product();
        $this->modelCategory = new Category();
        $this->articleModel = new Article();
        $this->requestModel = new Request();
        $this->commandModel = new Command();
    }

    public function showDashboard() {

        // if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
        //     // Enregistrez l'URL actuelle pour redirection après connexion
        //     $_SESSION['redirect_url'] = $_SERVER['REQUEST_URI'];
        //     header('Location: login.php');
        //     exit;
        // }

        $requests = $this->requestModel->getAllRequestLimit5();
        $request_count = $this->requestModel->selectCount();
        $countUsers = $this->modelUser->selectCount();
        $users = $this->modelUser->getAllUsersLimit5();
        $articles = $this->articleModel->getAllArticlesLimit5();
        $articleCount = $this->articleModel->selectCount();
        $commandCount = $this->commandModel->selectCount();
        $categories = $this->modelCategory->getAllCategory();
        $commands = $this->commandModel->getCommandsLimit5();
        require_once('views/dashboard.php');
    }

    public function showUsers() {
        $users = $this->model->getAllUsers();
        require_once('views/user_view.php');
    }

    public function addUserForm() {
        require_once('views/user_form.php');
    }

    public function addUser() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $this->model->addUser($username, $email, $password);
        }
        header('Location: index.php');
    }

    public function editUser() {
        $id = $_GET['id'];
        $user = $this->model->getUserById($id);
        require_once('views/user_edit_form.php');
    }

    public function updateUser() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $this->model->updateUser($id, $username, $email);
        }
        header('Location: index.php');
    }

    public function deleteUser() {
        $id = $_GET['id'];
        $this->model->deleteUser($id);
        header('Location: index.php');
    }
}
?>
