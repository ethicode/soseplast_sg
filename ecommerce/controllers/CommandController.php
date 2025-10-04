<?php
require_once('models/Command.php');
require_once('models/Category.php');
require_once('models/User.php');
require_once('models/Article.php');

class CommandController
{
    private $commandModel;
    private $categoryModel;
    private $modelUser;
    private $articleModel;

    public function __construct()
    {
        $this->modelUser = new userModel();
        $this->commandModel = new Command();
        $this->categoryModel = new Category();
        $this->articleModel = new Article();
    }

    public function addCommand()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $article_id = $_POST['article_id'];
            $user_id = $_POST['user_id'];
            $user = $this->modelUser->getUserById($user_id);
            $article = $this->articleModel->getArticleById($article_id);
            if($article['point'] > $user['point']){
                $_SESSION['error'] = "Vous n'avez pas assez de points pour commander cet article.";
                header('Location: index.php?action=detailArticle&id=' . $article_id);
                exit();
            }
            $this->commandModel->addCommand($article_id, $user_id);
        }
        // header('Location: index.php?action=commands');
        header('Location: index.php?action=detailArticle&id=' . $article_id);
    }

    public function showAllCommands()
    {
        $total_pages = $this->commandModel->selectCount();
        $page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;
        $num_results_on_page = 10;
        $calc_page = ($page - 1) * $num_results_on_page;


        $commandes = $this->commandModel->getAllCommands($calc_page, $num_results_on_page);
        $articleCount = $this->commandModel->selectCount();
        require_once('views/command/commandes.php');
    }


    public function SellCommands()
    {
        $total_pages = $this->commandModel->selectCount();
        $page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;
        $num_results_on_page = 12;
        $calc_page = ($page - 1) * $num_results_on_page;

        $articles = $this->commandModel->getForSaleCommandsByPagination($calc_page, $num_results_on_page);
        require_once('views/sale/sells_By_category.php');
    }

    public function SellCommandsByCategory()
    {

        $article_id = $_GET['id'];

        $total_pages = $this->commandModel->selectForSaleCount();
        $page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;
        $num_results_on_page = 12;
        $calc_page = ($page - 1) * $num_results_on_page;

        $articles = $this->commandModel->sellCommandsByCategory($article_id, $calc_page, $num_results_on_page);
        $categories = $this->categoryModel->getAllCategory();
        require_once('views/sale/sells_By_category.php');
    }

    public function searchCommands()
    {
        $search = $_GET['search'];
        $total_pages = $this->commandModel->selectCount();
        $page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;
        $num_results_on_page = 3;
        $calc_page = ($page - 1) * $num_results_on_page;


        $articles = $this->commandModel->searchCommands($search, $calc_page, $num_results_on_page);
        $categories = $this->modelCategory->getAllCategory();
        require_once('views/article/articles.php');
    }

    public function showDetailCommand()
    {
        $id = $_GET['id'];
        $article = $this->commandModel->getCommandById($id);
        require_once('views/article/detail_article.php');
    }

    public function showUpdateCommandForm()
    {
        $id = $_GET['id'];
        $article = $this->commandModel->getCommandById($id);
        $categories = $this->modelCategory->getAllCategory();
        require_once('views/article/edit_article_form.php');
    }

    public function getCommandByUserId()
    {
        $id = $_GET['id'];
        $command = $this->commandModel->getCommandByUserId($id);
        require_once('views/article/edit_article_form.php');
    }

    public function addCommandForm() {}

    public function showForSaleCommands()
    {
        $total_pages = $this->commandModel->selectForSaleCount();
        $page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;
        $num_results_on_page = 3;
        $calc_page = ($page - 1) * $num_results_on_page;


        $articles = $this->commandModel->getForSaleCommandsByPagination($calc_page, $num_results_on_page);
        $categories = $this->modelCategory->getAllCategory();
        $articleCount = $this->commandModel->selectCount();
        require_once('views/sale/sells.php');
    }

    public function mesCommandes()
    {
        $user_id = $_SESSION["soseplast_user_id"];
        $commandes = $this->commandModel->mesCommandes($user_id);
        $categories = $this->categoryModel->getAllCategoryForSale();
        require_once('mes-commandes.php');
    }

    public function saveValidationCommand()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $is_validated = $_POST['is_validated'];
            $command_id = $_POST['command_id'];
            $quantity = $_POST['quantity'];

            $this->commandModel->saveValidationCommand($is_validated, $quantity, $command_id);
        }
        header('Location: index.php?action=commandes');
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

    public function deleteCommand()
    {

        $user_id = null;
        if (isset($_SESSION["soseplast_user_id"])) {
            $user_id = $_SESSION["soseplast_user_id"];
        }

        $article_id = $_GET['id'];
        $this->commandModel->deleteCommand($article_id, $user_id);
        header('Location: index.php?action=detailArticle&id=' . $article_id);
    }
}
