<?php
require_once('models/UserModel.php');
require_once('models/User.php');
require_once('models/Role.php');

class RoleController
{
    private $model;
    private $UserModel;
    private $roleModel;

    public function __construct()
    {
        $this->roleModel = new Role();
    }

    public function showUsers()
    {
        $total_pages = $this->UserModel->selectCount();
        $page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;
        $num_results_on_page = 3;
        $calc_page = ($page - 1) * $num_results_on_page;

        $users = $this->UserModel->getUsersByPagination($calc_page, $num_results_on_page);
        $roles = $this->roleModel->getAllRoles();
        require_once('views/user/users.php');
    }

    public function loginForm()
    {
        require_once('views/user/login_form.php');
    }

    public function login()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $user = $this->UserModel->getUserByEmail($email);
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
        require_once('views/user/login_form.php');
    }

    public function signForm()
    {
        require_once('views/user/sign_form.php');
    }

    public function addUserForm()
    {
        require_once('views/user_form.php');
    }

    public function addUser()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $role_id = $_POST['role_id'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $this->UserModel->addUser($name, $email, $password, $role_id);
        }
        header('Location: ?action=utilisateurs');
    }

    public function editUser()
    {
        $id = $_GET['id'];
        $user = $this->model->getUserById($id);
        require_once('views/user_edit_form.php');
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
        $this->model->deleteUser($id);
        header('Location: index.php?action=utilisateurs');
    }
}
