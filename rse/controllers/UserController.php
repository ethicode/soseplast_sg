<?php
require_once('models/User.php');
require_once('models/Role.php');
require_once('models/Request.php');

$isConnected = isset($_SESSION['soseplast_user_id']) ? true : false;

class UserController
{
    private $userModel;
    private $roleModel;
    private $requestModel;

    public function __construct()
    {
        $this->userModel = new User();
        $this->roleModel = new Role();
        $this->requestModel = new Request();
    }

    public function showUsers()
    {
        $total_pages = $this->userModel->selectCount();
        $page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;
        $num_results_on_page = 3;
        $calc_page = ($page - 1) * $num_results_on_page;

        $users = $this->userModel->getUsersByPagination($calc_page, $num_results_on_page);
        $roles = $this->roleModel->getAllRoles();
        $roleCount = $this->roleModel->selectCount();
        require_once('views/users/users.php');
    }

    public function logout()
    {
        // header("location: index.php");
        $this->userModel->logout();
        header("location: index.php?");
    }

    public function loginForm()
    {
        $isConnected = isset($_SESSION['soseplast_user_id']) ? true : false;
        if ($isConnected) {
            header("location: index.php?action=moncompte");
        } else {
            require_once('views/users/login_form.php');
        }
    }

    public function registerForm()
    {
        require_once('views/users/register_form.php');
    }

    public function login()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $user = $this->userModel->getUserByEmail($email);
        if ($user) {
            if (password_verify($password, $user["password"])) {
                session_start();
                $_SESSION['name'] = $user['name'];
                $_SESSION['role'] = $user['role_name'];
                $_SESSION['soseplast_user_id'] = $user['id'];
                if (isset($_SESSION['role']) && $_SESSION['role'] === 'Administrateur') {
                    // L'utilisateur est un administrateur, vous pouvez lui permettre d'accéder à la page de l'admin
                    header("location: index.php?action=dashboard");
                }
                header("location: index.php");
            } else {
                header("location: index.php?action=loginForm");
            }
        }

        $email = $_POST['email'];
        $password = $_POST['password'];
        require_once('views/users/login_form.php');
    }

    public function signForm()
    {
        require_once('views/users/sign_form.php');
    }

    public function myAccount()
    {
        if (isset($_SESSION['soseplast_user_id'])) {
            $id = $_SESSION['soseplast_user_id'];
            $requests = $this->requestModel->getMyRequest($id);
            $user = $this->userModel->getUserById($id);
            require_once('views/users/my_account.php');
        } else {
            $_SESSION['redirect_url'] = $_SERVER['REQUEST_URI'];
            header("location: index.php?action=loginForm");
        }
    }

    public function addUserForm()
    {
        require_once('views/users_form.php');
    }

    public function addUser()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $role_id = $_POST['role_id'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $this->userModel->addUser($name, $email, $password, $role_id);
        }
        header('Location: ?action=utilisateurs');
    }

    public function editUser()
    {
        $id = $_GET['id'];
        $user = $this->model->getUserById($id);
        require_once('views/users_edit_form.php');
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
        $this->userModel->deleteUser($id);
        header('Location: index.php?action=utilisateurs');
    }
}
