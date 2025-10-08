<?php
class Sell {
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

    public function getAllSells() {
        // $sql = "SELECT * FROM sell";
        $sql = "SELECT  sell.id, sell.price, sell.is_sold, sell.client_id as client_id, article.name, article.image_url, article.description, article.location, article.quantity, article.created_at FROM sell LEFT JOIN article ON sell.article_id = article.id ORDER BY sell.id DESC;";
        $result = $this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getSellsByPagination($calc_page, $num_results_on_page)
    {
        $stmt = $this->db->prepare("SELECT  sell.id, sell.price, sell.quantity, sell.is_sold, sell.client_id as client_id, article.name, article.image_url, article.description, article.location, article.created_at FROM sell LEFT JOIN article ON sell.article_id = article.id ORDER BY sell.id DESC  LIMIT ?,?;");
        $stmt->bind_param('ii', $calc_page, $num_results_on_page); // "i" signifie que le paramètre est un entier.
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getDetailSell($id) {
        // $sql = "SELECT * FROM sell";
        $stmt = $this->db->prepare("SELECT sell.id, sell.price, sell.is_sold, sell.client_id as client_id, sell.article_id, article.image_url, article.name as article_name, article.description FROM sell LEFT JOIN article ON sell.article_id = article.id WHERE sell.id = ?");
        $stmt->bind_param("i", $id); // "i" signifie que le paramètre est un entier.
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    public function selectCount() {
        $sql = "SELECT id FROM sell";
        $result = $this->db->query($sql);
        $rowcount=mysqli_num_rows($result);
        return $rowcount;
    }

    // Ajoute un nouvel utilisateur à la table "users" de la base de données.
    public function addSell($article_id, $quantity, $price) {
        // Prépare la requête SQL pour insérer un nouvel utilisateur.
        // Utilise des marqueurs de position "?" pour les valeurs à insérer.
        $stmt = $this->db->prepare("INSERT INTO sell (article_id, quantity, price) VALUES (?, ?, ?)");
        
        // Vérifie si la préparation de la requête a échoué et, dans ce cas, affiche l'erreur MySQL
        if ($stmt === false) {
            die("MySQL Error: " . $this->db->error);
        }
        // Lie les variables aux marqueurs de position dans la requête préparée.
        $stmt->bind_param("iii", $article_id, $quantity, $price); // "sss" signifie que les 3 paramètres sont des chaînes de caractères.
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
