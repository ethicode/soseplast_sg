<?php
require_once('controllers/ShoppingController.php');
require_once('controllers/UserController.php');
require_once('controllers/ProductController.php');
require_once('controllers/DashboardController.php');
require_once('controllers/RequestController.php');
require_once('controllers/ArticleController.php');
require_once('controllers/CategoryController.php');
require_once('controllers/SellController.php');
require_once('controllers/CommandController.php');
require_once('controllers/DonController.php');
require_once('models/UserModel.php');
require_once('controllers/RequestController.php');

// Créer une nouvelle instance du contrôleur
$shoppingController = new ShoppingController();
$userController = new UserController();
$productController = new ProductController();
$articleController = new ArticleController();
$dashboardController = new DashboardController();
$RequestController = new RequestController();
$categoryController = new CategoryController();
$sellController = new SellController();
$commandController = new CommandController();
$donController = new DonController();
$requestController = new RequestController();

// Vérifier l'action à effectuer
if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'shopping'; // Action par défaut
}


// if (isset($_SESSION['role'])) {
//     $role = $_SESSION['role'];
// } else {
//     $role = "Utilisateur";
// }

session_start();
$role = isset($_SESSION['role']) ? $_SESSION['role'] : "Utilisateur";
// Appeler la méthode correspondante dans le contrôleur

switch ([$action, $role]) {
    case 'shopping':
        $shoppingController->showAllArticles();
        break;
    case ['article', 'Administrateur']:
        $shoppingController->showDetailArticle();
        break;
    case ['updatearticle', 'Administrateur']:
        $articleController->showUpdateArticleForm();
        break;
    case ['savearticle', 'Administrateur']:
        $articleController->saveArticle();
        break;
    case ['loginForm', 'Administrateur']:
    case ['loginForm', 'Utilisateur']:
        $userController->loginForm();
        break;
    case ['registerForm', 'Administrateur']:
    case ['registerForm', 'Utilisateur']:
        $userController->loginForm();
        break;
    case ['login', 'Administrateur']:
    case ['login', 'Utilisateur']:
        $userController->login();
        break;
    case ['register', 'Administrateur']:
    case ['register', 'Utilisateur']:
        $userController->register();
        break;
    case ['signinForm', 'Utilisateur']:
        $userController->signForm();
        break;
    case ['monCompte', 'Administrateur']:
    case ['monCompte', 'Utilisateur']:
        $userController->myAccount();
        break;

    case ['dashboard', 'Administrateur']:
        $dashboardController->showDashboard();
        break;
    case ['articles', 'Administrateur']:
    // case ['articles', 'Utilisateur']:
        $articleController->showAllArticles();
        break;
    case ['searchArticle', 'Administrateur']:
        $articleController->searchArticles();
        break;
    case ['addArticle', 'Administrateur']:
        $articleController->addArticle();
        break;
    case ['sellArticle', 'Administrateur']:
        $articleController->sellArticle();
        break;
    case ['sellArticlesByCategory', 'Administrateur']:
    case ['sellArticlesByCategory', 'Utilisateur']:
    case ['sellArticlesByCategory', 'Collaborateur']:
        $articleController->SellArticlesByCategory();
        break;
    case ['addArticleForm', 'Administrateur']:
        $articleController->addArticleForm();
        break;
    case ['commandes', 'Administrateur']:
        $commandController->showAllCommands();
        break;
    case ['updateValidationCommand', 'Administrateur']:
        $commandController->saveValidationCommand();
        break;
    case ['addCommand', 'Administrateur']:
    case ['addCommand', 'Utilisateur']:
    case ['addCommand', 'Collaborateur']:
        $commandController->addCommand();
        break;
    case ['mes-commandes', 'Administrateur']:
    case ['mes-commandes', 'Collaborateur']:
        $commandController->mesCommandes();
            break;
    case ['deleteCommand', 'Administrateur']:
    case ['deleteCommand', 'Utilisateur']:
    case ['deleteCommand', 'Collaborateur']:
        $commandController->deleteCommand();
        break;
    case ['demandes', 'Administrateur']:
        $RequestController->showAllRequests();
        break;
    case ['utilisateurs', 'Administrateur']:
        $userController->showUsers();
        break;
    case ['logout', 'Administrateur']:
    case ['logout', 'Utilisateur']:
        $userController->logout();
        break;
    case ['deleteArticle', 'Administrateur']:
        $articleController->deleteArticle();
        break;
    case ['detailArticleAdmin', 'Administrateur']:
        $articleController->showDetailArticleForAdmin();
        break;
    case ['detailArticle', 'Administrateur']:
    case ['detailArticle', 'Utilisateur']:
    case ['detailArticle', 'Collaborateur']:
        $articleController->showDetailArticle();
        break;
    case 'addUserForm':
        $userController->addUserForm();
        break;
    case ['envente', 'Administrateur']:
        $articleController->showForSaleArticles();
        break;
    case 'addSell':
        $sellController->addSell();
        break;
    case ['addUser', 'Administrateur']:
    case ['addUser', 'Utilisateur']:
        $userController->addUser();
        break;
    case ['categories', 'Administrateur']:
        $categoryController->showCategories();
        break;
    case ['categoryAdmin', 'Administrateur']:
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
    case ['detailDemande', 'Administrateur']:
    case ['detailDemande', 'Utilisateur']:
        $requestController->detailRequest();
        break;

    case ['validationDemande', 'Administrateur']:
    case ['validationDemande', 'Utilisateur']:
        $requestController->validationRequest();
        break;

    case ['dons', 'Administrateur']:
    // case ['dons', 'Utilisateur']:
        $donController->showAllDons();
        break;
    case ['faireUnDon', 'Administrateur']:
    case ['faireUnDon', 'Utilisateur']:
        $donController->showAddDonForm();
        break;
    case ['ajouterUnDonEnNumeraire', 'Administrateur']:
    case ['ajouterUnDonEnNumeraire', 'Utilisateur']:
        $donController->ajouterDonEnNumeraire();
        break;
    case ['ajouterUnDonEnNature', 'Administrateur']:
    case ['ajouterUnDonEnNature', 'Utilisateur']:
        $donController->ajouterDonEnNumeraire();
        break;
    default:
        $shoppingController->showAllArticles();
        break;
}
