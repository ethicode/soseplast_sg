<?php
require_once('controllers/UserController.php');
require_once('controllers/RequestController.php');

// Créer une nouvelle instance du contrôleur
$userController = new UserController();
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
    case ['loginForm', 'Administrateur']:
    case ['loginForm', 'Utilisateur']:
        $userController->loginForm();
        break;
    case ['login', 'Administrateur']:
    case ['login', 'Utilisateur']:
        $userController->login();
        break;
    case ['registerForm', 'Administrateur']:
    case ['registerForm', 'Utilisateur']:
        $userController->registerForm();
        break;

    case ['moncompte', 'Administrateur']:
    case ['moncompte', 'Utilisateur']:
        $userController->myAccount();
        break;
    case ['demande', 'Administrateur']:
    case ['demande', 'Utilisateur']:
        $requestController->detailRequest();
        break;
    case ['faireUneDemande', 'Administrateur']:
    case ['faireUneDemande', 'Utilisateur']:
        $requestController->addRequestForm();
        break;
    case ['saveRequest', 'Administrateur']:
    case ['saveRequest', 'Utilisateur']:
        $requestController->saveRequest();
        break;
    default:
        $userController->loginForm();
        break;
}
