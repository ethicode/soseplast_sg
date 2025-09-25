<?php
require_once('models/Request.php');
require_once('models/User.php');

class RequestController
{
    private $requestModel;
    private $userModel;

    public function __construct()
    {
        $this->userModel = new User();
        $this->requestModel = new Request();
    }

    public function showAllRequests()
    {
        $total_pages = $this->requestModel->selectCount();
        $page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;
        $num_results_on_page = 10;
        $calc_page = ($page - 1) * $num_results_on_page;

        $requests = $this->requestModel->getRequestsByPagination($calc_page, $num_results_on_page);
        $request_count = $this->requestModel->selectCount();
        require_once('views/request/requests.php');
    }

    public function detailRequest()
    {
        $uuid = $_GET["uuid"];
        $request = $this->requestModel->getDetailRequest($uuid);
        require_once('views/requests/detail_request.php');
    }

    public function addRequestForm()
    {
        $id = $_SESSION['soseplast_user_id'];
        $user = $this->userModel->getUserById($id);
        require_once('views/requests/add_request_form.php');
    }

    public function saveRequest()
    {
        function generate_uuid_v4_unique()
        {
            $timestamp = base_convert(time(), 10, 36);
            $random = base_convert(mt_rand(0, 999), 10, 36);
            return $timestamp . $random;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $upload_directory = "./public/fichiers/";
            $fichier = $_FILES["fichier"]["name"];

            if (file_exists($fichier)) {
                $fichier = $upload_directory . basename($_FILES["fichier"]["name"]);
                $file_extension = pathinfo($fichier, PATHINFO_EXTENSION);
                $file_name = pathinfo($fichier, PATHINFO_FILENAME) . '_' . uniqid() . '.' . $file_extension;
                $fichier = $upload_directory . $file_name;
            }
            move_uploaded_file($_FILES["fichier"]["tmp_name"], $fichier);

            $uuid = generate_uuid_v4_unique();
            $text_1 = $_POST['text_1'];
            $text_2 = $_POST['text_2'];
            $text_3 = $_POST['text_3'];
            $user_id = $_POST['user_id'];
            $this->requestModel->saveRequest($uuid, $text_1, $text_2, $text_3, $user_id, $fichier);
        }
        header('Location: index.php?action=moncompte');
    }
}
