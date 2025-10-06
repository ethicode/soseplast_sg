<?php
require_once('models/UserModel.php');
require_once('models/Product.php');
require_once('models/Category.php');

class ProductController {
    private $model;
    private $modelProduct;
    private $modelCategory;

    public function __construct() {
        $this->model = new UserModel();
        $this->modelProduct = new Product();
        $this->modelCategory = new Category();
    }

    public function showAllProducts() {
        $products = $this->modelProduct->getAllProduct();
        $categories = $this->modelCategory->getAllCategory();
        require_once('views/dashboard.php');
    }

    public function showProducts() {        
        $products = $this->modelProduct->getAllProduct();
        $category = $this->modelCategory->getAllCategory();
        require_once('views/product/products.php');
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
