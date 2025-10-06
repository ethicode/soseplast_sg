<?php
class Request {
    private $db;

    public function __construct() {
        // Fichier de configuration de la base de données
        require_once('config/config_db.php');
        
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

    public function getRequestsByPagination($calc_page, $num_results_on_page)
    {
        $stmt = $this->db->prepare("SELECT request.id, request.title, request.description, request.created_at, user.name FROM request LEFT JOIN user on request.user_id=user.id ORDER BY request.id DESC  LIMIT ?,?;");
        $stmt->bind_param('ii', $calc_page, $num_results_on_page); // "i" signifie que le paramètre est un entier.
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getAllRequestLimit5() {
        $sql = "SELECT request.id, request.title, request.description, request.created_at, user.name FROM request LEFT JOIN user on request.user_id=user.id ORDER BY request.id DESC LIMIT 5";
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

    public function updateCategory($id, $username, $email) {
        $stmt = $this->db->prepare("UPDATE category SET username = ?, email = ? WHERE id = ?");
        $stmt->bind_param("ssi", $username, $email, $id);
        $stmt->execute();
        $stmt->close();
    }

    public function deleteRequest($id) {
        // @param int $id L'ID de l'utilisateur à supprimer.
        $stmt = $this->db->prepare("DELETE FROM users WHERE id = ?");
        // Lie la variable $id au marqueur de position dans la requête préparée.
        // "i" signifie que le paramètre est un entier.
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
    }

    
    public function getRequestById($id) {
        /*
        La fonction getUserById($id) est généralement utilisée lorsque vous avez besoin
        d'obtenir des informations sur un utilisateur spécifique identifié par son ID.
        Voici quelques cas d'utilisation typiques : Affichage de Profil, Contrôle d'Accès
        Édition de l'utilisateur 
         */   
        $stmt = $this->db->prepare("SELECT * FROM category WHERE id = ?");
        $stmt->bind_param("i", $id); // "i" signifie que le paramètre est un entier.
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }
}
?>
