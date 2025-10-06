<?php
require_once('models/Request.php');
require_once('models/User.php');
require_once('models/Article.php');
require_once('models/Don.php');

class RequestController {
    private $requestModel;
    private $userModel;
    private $articleModel;
    private $donModel;

    public function __construct() { 
        $this->requestModel = new Request();
        $this->userModel = new User();
        $this->articleModel = new Article();
        $this->donModel = new Don();
    }

    public function showAllRequests() {
        $total_pages = $this->requestModel->selectCount();
        $page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;
        $num_results_on_page = 10;
        $calc_page = ($page - 1) * $num_results_on_page;

        $requests = $this->requestModel->getRequestsByPagination($calc_page, $num_results_on_page);
        $request_count = $this->requestModel->selectCount();
        require_once('views/request/requests.php');
    }

    public function detailRequest() {
        $id = $_GET['id'];
        $dons = $this->donModel->getAllDon();
        $request = $this->requestModel->getRequestById($id);
        $user = $this->userModel->getUserById($request["user_id"]);
        $articles = $this->articleModel->getAllArticles();
        require_once('views/request/detail_request.php');
    }

    public function validationRequest() {
        $request_id = $_POST['request_id'];
        $is_validated = $_POST['is_validated'];
        $this->requestModel->validationRequest($is_validated, $request_id);

        header('Location: ?action=demandes');
    }
}
?>
