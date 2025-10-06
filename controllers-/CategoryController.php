<?php
require_once('models/UserModel.php');
require_once('models/Product.php');
require_once('models/Category.php');
require_once('models/User.php');
require_once('models/Article.php');

class CategoryController
{
    private $modelUser;
    private $modelProduct;
    private $articleModel;
    private $categoryModel;

    public function __construct()
    {
        $this->modelUser = new User();
        $this->modelProduct = new Product();
        $this->articleModel = new Article();
        $this->categoryModel = new Category();
    }

    public function showCategories()
    {
        $categories = $this->categoryModel->getAllCategory();
        require_once('views/category/categories.php');
    }

    public function showArticlesByCategory()
    {
        $id = $_GET['id'];

        $total_pages = $this->articleModel->getCountArticlesByCategory($id);
        // $total_pages = $this->articleModel->selectCount();
        $page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;
        $num_results_on_page = 3;
        $calc_page = ($page - 1) * $num_results_on_page;

        $articles = $this->categoryModel->getCategoryByIdbyPagination($calc_page, $num_results_on_page, $id);
        $categories = $this->categoryModel->getAllCategory();
        $category = $this->categoryModel->getCategoryById($id);
        $articleCount = $this->articleModel->selectCount();
        require_once('views/category/category.php');
    }

    public function showUsers()
    {
        $users = $this->categoryModel->getAllCategory();
        require_once('views/user_view.php');
    }

    public function addUserForm()
    {
        require_once('views/user_form.php');
    }

    public function addCategory()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $this->categoryModel->addCategory($name);
        }
        header('Location: index.php?action=categories');
    }

    public function editCategory()
    {
        $id = $_GET['id'];
        $category = $this->categoryModel->getCategoryById($id);
        require_once('views/user_edit_form.php');
    }

    public function updateCategory()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $this->categoryModel->updateCategory($id, $username, $email);
        }
        header('Location: index.php');
    }

    public function deleteCategory()
    {
        $id = $_GET['id'];
        $this->categoryModel->deleteCategory($id);
        header('Location: index.php?action=categories');
    }
}
