<?php
require_once('controllers/ShoppingController.php');
require_once('controllers/UserController.php');
require_once('controllers/ProductController.php');
require_once('controllers/DashboardController.php');
require_once('controllers/RequestController.php');
require_once('controllers/ArticleController.php');
require_once('controllers/CategoryController.php');
require_once('controllers/SellController.php');
require_once('models/UserModel.php');

// Créer une nouvelle instance du contrôleur
$shoppingController = new ShoppingController();
$userController = new UserController();
$productController = new ProductController();
$articleController = new ArticleController();
$dashboardController = new DashboardController();
$RequestController = new RequestController();
$categoryController = new CategoryController();
$sellController = new SellController();

// Vérifier l'action à effectuer
if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'shopping'; // Action par défaut
}

$role = "Administrateur";
// Appeler la méthode correspondante dans le contrôleur

switch ($action) {
    case 'shopping':
        $shoppingController->showAllArticles();
        break;
    case 'article':
        $shoppingController->showDetailArticle();
        break;
    case 'updatearticle':
        $articleController->showUpdateArticleForm();
        break;
    case 'savearticle':
        $articleController->saveArticle();
        break;
    case 'loginForm':
        $userController->loginForm();
    case 'login':
        $userController->login();
        break;
    case 'signinForm':
        $userController->signForm();
        break;

    case 'dashboard':
        $dashboardController->showDashboard();
        break;
    case 'articles':
        $articleController->showAllArticles();
        break;
    case 'searchArticle':
        $articleController->searchArticles();
        break;
    case 'addArticle':
        $articleController->addArticle();
        break;
    case 'sellArticle':
        $articleController->sellArticle();
        break;
    case 'addArticleForm':
        $articleController->addArticleForm();
        break;
    case 'demandes':
        $RequestController->showAllRequests();
        break;
    case 'utilisateurs':
        $userController->showUsers();
        break;
    case 'deleteArticle':
        $articleController->deleteArticle();
        break;
    case 'detailArticleAdmin':
        $articleController->showDetailArticle();
        break;
    case 'detailArticle':
        $articleController->showDetailArticle();
        break;
    case 'addUserForm':
        $userController->addUserForm();
        break;
    case 'forsale':
        $articleController->showForSaleArticles();
        break;
    case 'addSell':
        $sellController->addSell();
        break;
    case 'addUser':
        $userController->addUser();
        break;
    case 'categories':
        $categoryController->showCategories();
        break;
    case 'category':
        $categoryController->showArticlesByCategory();
        break;
    case 'addCategory':
        $categoryController->addCategory();
        break;
    case 'deleteCategory':
        $categoryController->deleteCategory();
        break;
    case 'editUser':
        $userController->editUser();
        break;
    case 'updateUser':
        $userController->updateUser();
        break;
    case 'deleteUser':
        $userController->deleteUser();
        break;
    default:
        echo "Action non valide";
        break;
}
