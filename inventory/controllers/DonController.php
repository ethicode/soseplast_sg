<?php
require_once('models/UserModel.php');
require_once('models/Don.php');
require_once('models/Article.php');
require_once('models/Request.php');

class DonController
{
    private $donModel;
    private $modelCategory;
    private $userModel;
    private $articleModel;
    private $requestModel;

    public function __construct()
    {
        $this->donModel = new Don();
        $this->userModel = new User();
        $this->requestModel = new Request();
        $this->articleModel = new Article();
    }

    public function showAllDons()
    {
        $total_pages = $this->donModel->selectCount();
        $page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;
        $num_results_on_page = 8;
        $calc_page = ($page - 1) * $num_results_on_page;


        $dons = $this->donModel->getAllDon();
        // $categories = $this->modelCategory->getAllCategory();
        $articles = $this->articleModel->getAllArticles();
        require_once('views/don/dons.php');
    }

    public function showDetailDon()
    {
        $id = $_GET['id'];
        $user = $this->userModel->getUserById($id);
        $article = $this->donModel->getDonById($id);
        $categories = $this->modelCategory->getAllCategory();
        require_once('views/article/detail_article.php');
    }

    public function showAddDonForm()
    {
        // $id = $_GET['id'];
        // $request = $this->requestModel->getRequestById($id);
        // $user = $this->userModel->getUserById($request["user_id"]);
        // $articles = $this->articleModel->getAllArticles();
        require_once('views/don/add_don_form.php');
    }


    public function ajouterDonEnNumeraire()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $value = $_POST['value'];
            $request_id = $_POST['request_id'];
            $this->donModel->ajouterDonEnNumeraire($request_id, $value);
        }
        header('Location: index.php?action=detailDemande&id='.$request_id);
    }

    public function addDon()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $upload_directory = "./public/images/";
            $image_url = $_FILES["image_url"]["name"];
            $image_1 = $_FILES["image_1"]["name"];
            $image_2 = $_FILES["image_2"]["name"];
            $image_3 = $_FILES["image_3"]["name"];

            if (file_exists($image_url)) {
                $image_url = $upload_directory . basename($_FILES["image_url"]["name"]);
                $file_extension = pathinfo($image_url, PATHINFO_EXTENSION);
                $file_name = pathinfo($image_url, PATHINFO_FILENAME) . '_' . uniqid() . '.' . $file_extension;
                $image_url = $upload_directory . $file_name;
            }
            if (file_exists($image_1)) {
                $image_1 = $upload_directory . basename($_FILES["image_1"]["name"]);
                $file_extension = pathinfo($image_1, PATHINFO_EXTENSION);
                $file_name = pathinfo($image_1, PATHINFO_FILENAME) . '_' . uniqid() . '.' . $file_extension;
                $image_1 = $upload_directory . $file_name;
            }
            if (file_exists($image_2)) {
                $file_extension = pathinfo($image_2, PATHINFO_EXTENSION);
                $file_name = pathinfo($image_2, PATHINFO_FILENAME) . '_' . uniqid() . '.' . $file_extension;
                $image_2 = $upload_directory . $file_name;
                $image_2 = $upload_directory . basename($_FILES["image_2"]["name"]);
            }
            if (file_exists($image_3)) {
                $file_extension = pathinfo($image_3, PATHINFO_EXTENSION);
                $file_name = pathinfo($image_3, PATHINFO_FILENAME) . '_' . uniqid() . '.' . $file_extension;
                $image_3 = $upload_directory . $file_name;
                $image_3 = $upload_directory . basename($_FILES["image_3"]["name"]);
            }
            move_uploaded_file($_FILES["image_url"]["tmp_name"], $image_url);
            move_uploaded_file($_FILES["image_1"]["tmp_name"], $image_1);
            move_uploaded_file($_FILES["image_2"]["tmp_name"], $image_2);
            move_uploaded_file($_FILES["image_3"]["tmp_name"], $image_3);

            $name = $_POST['name'];
            $description = $_POST['description'];
            $category_id = $_POST['category'];
            $quantity = $_POST['quantity'];
            $location = $_POST['location'];
            $this->donModel->addDon($name, $description, $category_id, $quantity, $location, $image_url, $image_1, $image_2, $image_3);
        }
        header('Location: index.php?action=articles');
    }

    public function saveDon()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $article_id = $_POST['article_id'];
            $name = $_POST['name'];
            $description = $_POST['description'];
            $category_id = $_POST['category_id'];
            $quantity = $_POST['quantity'];
            $price = $_POST['price'];
            $location = $_POST['location'];

            $upload_directory = "./public/images/";
            $image_url = $upload_directory . basename($_FILES["image_url"]["name"]);
            $image_1 = $upload_directory . basename($_FILES["image_1"]["name"]);
            $image_2 = $upload_directory . basename($_FILES["image_2"]["name"]);
            $image_3 = $upload_directory . basename($_FILES["image_3"]["name"]);

            if (isset($_FILES['image_url']) && $_FILES['image_url']['error'] == 0) {
                if (file_exists($image_url)) {
                    $file_extension = pathinfo($image_url, PATHINFO_EXTENSION);
                    $file_name = pathinfo($image_url, PATHINFO_FILENAME) . '_' . uniqid() . '.' . $file_extension;
                    $image_url = $upload_directory . $file_name;
                }
            } else {
                $article = $this->donModel->getDonById($article_id);
                $image_url = $article["image_url"];
            }

            if (isset($_FILES['image_1']) && $_FILES['image_1']['error'] == 0) {
                if (file_exists($image_1)) {
                    $file_extension = pathinfo($image_1, PATHINFO_EXTENSION);
                    $file_name = pathinfo($image_1, PATHINFO_FILENAME) . '_' . uniqid() . '.' . $file_extension;
                    $image_1 = $upload_directory . $file_name;
                }
            } else {
                $article = $this->donModel->getDonById($article_id);
                $image_1 = $article["image_1"];
            }

            if (isset($_FILES['image_2']) && $_FILES['image_2']['error'] == 0) {
                if (file_exists($image_2)) {
                    $file_extension = pathinfo($image_2, PATHINFO_EXTENSION);
                    $file_name = pathinfo($image_2, PATHINFO_FILENAME) . '_' . uniqid() . '.' . $file_extension;
                    $image_2 = $upload_directory . $file_name;
                }
            } else {
                $article = $this->donModel->getDonById($article_id);
                $image_2 = $article["image_2"];
            }

            if (isset($_FILES['image_3']) && $_FILES['image_3']['error'] == 0) {
                if (file_exists($image_3)) {
                    $file_extension = pathinfo($image_3, PATHINFO_EXTENSION);
                    $file_name = pathinfo($image_3, PATHINFO_FILENAME) . '_' . uniqid() . '.' . $file_extension;
                    $image_3 = $upload_directory . $file_name;
                }
            } else {
                $article = $this->donModel->getDonById($article_id);
                $image_3 = $article["image_3"];
            }

            move_uploaded_file($_FILES["image_url"]["tmp_name"], $image_url);
            move_uploaded_file($_FILES["image_1"]["tmp_name"], $image_1);
            move_uploaded_file($_FILES["image_2"]["tmp_name"], $image_2);
            move_uploaded_file($_FILES["image_3"]["tmp_name"], $image_3);

            $this->donModel->addDon($name, $description, $category_id, $quantity, $price, $location, $image_url, $image_1, $image_2, $image_3, $article_id);
        }
        header('Location: index.php?action=articles');
    }

    public function deleteDon()
    {
        $id = $_GET['id'];
        $this->donModel->deleteDon($id);
        header('Location: index.php?action=articles');
    }
}
