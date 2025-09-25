<?php
require_once('./../controllers/UserController.php');
require_once('./../controllers/ProductController.php');
require_once('./../controllers/DashboardController.php');
require_once('./../controllers/RequestController.php');
require_once('./../controllers/ArticleController.php');
require_once('./../controllers/CategoryController.php');
require_once('./../controllers/SellController.php');
require_once('./../models/UserModel.php');

// Créer une nouvelle instance du contrôleur
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
    $action = 'dashboard'; // Action par défaut
}

// Appeler la méthode correspondante dans le contrôleur
switch ($action) {
    case 'login':
        $dashboardController->showDashboard();
        break;
    case 'signin':
        $dashboardController->showDashboard();
        break;

    case 'dashboard':
        $dashboardController->showDashboard();
        break;
    case 'articles':
        $articleController->showAllArticles();
        break;
    case 'demandes':
        $RequestController->showAllRequests();
        break;
    case 'utilisateurs':
        $userController->showUsers();
        break;
    case 'detailArticle':
        $articleController->showDetailArticle();
        break;
    case 'addUserForm':
        $userController->addUserForm();
        break;
    case 'sells':
        $sellController->showAllSells();
        break;
    case 'addSell':
        $sellController->addSell();
        break;
    case 'addUser':
        $userController->addUser();
        break;
    case 'addCategory':
        $categoryController->addCategory();
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
?>
