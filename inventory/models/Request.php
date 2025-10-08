<?php
class Request {
    private $db;

    public function __construct() {
        // Fichier de configuration de la base de données
        require_once('../config/config_db.php');
        
        // Connection à la base de données
        $this->db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
        
        // Vérifier la connexion
        if ($this->db->connect_error) {
            die("Connection failed: " . $this->db->connect_error);
        }
    }

    public function getAllRequest() {
        $sql = "SELECT request.id, request.title, request.description, request.created_at, user.name FROM request LEFT JOIN user on request.user_id=user.id";
        $result = $this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getMyRequest($id) {
        $stmt = $this->db->prepare("SELECT * FROM request WHERE user_id = ?");
        $stmt->bind_param('i', $id); // "i" signifie que le paramètre est un entier.
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getRequestsByPagination($calc_page, $num_results_on_page)
    {
        $stmt = $this->db->prepare("SELECT request.id, request.uuid, request.text_2, request.user_id, request.text_1, request.created_at, request.is_validated, user.name FROM request LEFT JOIN user on request.user_id=user.id ORDER BY request.id DESC;");
        // $stmt->bind_param('ii', $calc_page, $num_results_on_page); // "i" signifie que le paramètre est un entier.
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getAllRequestLimit5() {
        $sql = "SELECT request.id, request.uuid, request.text_1, request.created_at, user.name FROM request LEFT JOIN user on request.user_id=user.id ORDER BY request.id DESC LIMIT 5";
        $result = $this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function selectCount() {
        $sql = "SELECT id FROM request";
        $result = $this->db->query($sql);
        $rowcount=mysqli_num_rows($result);
        return $rowcount;
    }

    // Ajoute un nouvel utilisateur à la table "users" de la base de données.
    public function addRequest($username, $email, $password) {
        // Prépare la requête SQL pour insérer un nouvel utilisateur.
        // Utilise des marqueurs de position "?" pour les valeurs à insérer.
        $stmt = $this->db->prepare("INSERT INTO category (name, description, quantity) VALUES (?, ?, ?)");
        
        // Vérifie si la préparation de la requête a échoué et, dans ce cas, affiche l'erreur MySQL
        if ($stmt === false) {
            die("MySQL Error: " . $this->db->error);
        }
        // Lie les variables aux marqueurs de position dans la requête préparée.
        $stmt->bind_param("sss", $username, $email, $password); // "sss" signifie que les 3 paramètres sont des chaînes de caractères.
        $stmt->execute();  // Exécute la requête préparée.
        $stmt->close(); // Ferme l'objet de requête préparée.
    }

    public function validationRequest($is_validated, $request_id) {
        $stmt = $this->db->prepare("UPDATE request SET is_validated = ? WHERE id = ?");
        $stmt->bind_param("ii", $is_validated, $request_id);
        $stmt->execute();
        $stmt->close();
    }

    public function deleteRequest($id) {
        $stmt = $this->db->prepare("DELETE FROM users WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
    }

    
    public function getRequestById($id) {
        $stmt = $this->db->prepare("SELECT request.uuid, request.id, request.user_id, request.is_validated, request.text_1, request.text_2, request.text_3, user.email as user_email FROM request inner join user on request.user_id = user.id WHERE request.id = ?");
        $stmt->bind_param("i", $id); // "i" signifie que le paramètre est un entier.
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }
}
?>
