<?php
require_once('models/UserModel.php');
require_once('models/Product.php');
require_once('models/Category.php');
require_once('models/Request.php');
require_once('models/Sell.php');

class SellController {
    private $model;
    private $modelProduct;
    private $modelCategory;
    private $requestModel;
    private $sellModel;

    public function __construct() {
        $this->model = new UserModel();
        $this->modelProduct = new Product();
        $this->modelCategory = new Category();
        $this->requestModel = new Request();
        $this->sellModel = new Sell();
    }

    public function showAllSells() {
        $total_pages = $this->sellModel->selectCount();
        $page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;
        $num_results_on_page = 3;
        $calc_page = ($page - 1) * $num_results_on_page;

        $requests = $this->requestModel->getAllRequest();
        $sells = $this->sellModel->getSellsByPagination($calc_page, $num_results_on_page);
        require_once('views/sell/sells.php');
    }

    public function showUsers() {
        $users = $this->model->getAllUsers();
        require_once('views/user_view.php');
    }

    public function addUserForm() {
        require_once('views/user_form.php');
    }

    public function addSell() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $article_id = $_POST['article_id'];
            $quantity = $_POST['quantity'];
            $price = $_POST['price'];
            $this->sellModel->addSell($article_id, $quantity, $price);
        }
        header('Location: index.php?action=articles');
    }

    public function editUser() {
        $id = $_GET['id'];
        $user = $this->model->getUserById($id);
        require_once('views/user_edit_form.php');
    }

    public function sellArticle() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $article_id = $_POST['article_id'];
            $quantity = $_POST['quantity'];
            $price = $_POST['price'];
            $this->sellModel->addSell($article_id, $quantity, $price);
        }
        header('Location: index.php?action=sells');
    }

    public function deleteUser() {
        $id = $_GET['id'];
        $this->model->deleteUser($id);
        header('Location: index.php');
    }
}
?>
