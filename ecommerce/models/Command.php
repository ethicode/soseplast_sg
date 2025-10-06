<?php
class Command
{
    private $db;

    public function __construct()
    {
        // Fichier de configuration de la base de données
        require_once('config/config_db.php');

        // Connection à la base de données
        $this->db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

        // Vérifier la connexion
        if ($this->db->connect_error) {
            die("Connection failed: " . $this->db->connect_error);
        }
        $this->db->set_charset("utf8mb4");
    }

    // public function getAllCommands()
    // {
    //     $sql = "SELECT article.name, article.id, article.location, article.quantity, article.image_url, article.created_at, category.name as category_name FROM article LEFT JOIN category ON article.category_id = category.id ORDER BY article.id DESC;";
    //     $result = $this->db->query($sql);
    //     return $result->fetch_all(MYSQLI_ASSOC);
    // }

    public function getAllCommands($calc_page, $num_results_on_page)
    {
        $stmt = $this->db->prepare("SELECT article.id as id_article, article.name, article.location, article.price, command.quantity, article.image_url, command.created_at, command.id, command.is_validated, user.name as username FROM command LEFT JOIN article ON command.article_id = article.id LEFT JOIN user on command.user_id = user.id ORDER BY command.id DESC  LIMIT ?,?;");
        $stmt->bind_param('ii', $calc_page, $num_results_on_page); 
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getCommandsLimit5()
    {
        $sql = "SELECT article.name, article.id, article.location, article.created_at, article.image_url, command.quantity FROM command LEFT JOIN article ON command.article_id = article.id ORDER BY command.id DESC LIMIT 5;";
        $result = $this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function mesCommandes($id)
    {
        $stmt = $this->db->prepare("SELECT article.id as id_article, article.name, article.location, article.price, command.quantity, article.image_url, command.created_at, command.id, command.is_validated, user.name as username FROM command LEFT JOIN article ON command.article_id = article.id LEFT JOIN user on command.user_id = user.id WHERE command.user_id = ? ORDER BY command.id DESC ;");
        $stmt->bind_param('i', $id); 
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    // public function getDetailArticle() {
    //     $sql = "SELECT article.name, article.id, article.location, article.quantity FROM article LEFT JOIN category ON article.category_id = category.id WHERE article.id=1;";
    //     $result = $this->db->query($sql);
    //     return $result->fetch_all(MYSQLI_ASSOC);
    // }

    public function selectCount()
    {
        $sql = "SELECT id FROM command";
        $result = $this->db->query($sql);
        $rowcount = mysqli_num_rows($result);
        return $rowcount;
    }

    public function getCountArticlesByCategory($id)
    {

        $stmt = $this->db->prepare("SELECT * FROM article  WHERE category_id = ?");
        $stmt->bind_param("i", $id); 
        $stmt->execute();
        $result = $stmt->get_result();
        $rowcount = mysqli_num_rows($result);
        return $rowcount;
    }

    public function searchCommands($search, $calc_page, $num_results_on_page)
    {
        $stmt = $this->db->prepare("SELECT article.name, article.id, article.location, article.quantity, article.image_url, article.created_at, category.name as category_name FROM article LEFT JOIN category ON article.category_id = category.id WHERE article.name LIKE '%$search%' ORDER BY article.id DESC  LIMIT ?,?;");
        $stmt->bind_param('ii', $calc_page, $num_results_on_page); 
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    // Ajoute un nouvel utilisateur à la table "users" de la base de données.
    public function addCommand($article_id, $user_id)
    {
        // Prépare la requête SQL pour insérer un nouvel utilisateur.
        // Utilise des marqueurs de position "?" pour les valeurs à insérer.
        $stmt = $this->db->prepare("INSERT INTO command (article_id, user_id) VALUES (?, ?)");

        // Vérifie si la préparation de la requête a échoué et, dans ce cas, affiche l'erreur MySQL
        if ($stmt === false) {
            die("MySQL Error: " . $this->db->error);
        }
        // Lie les variables aux marqueurs de position dans la requête préparée.
        $stmt->bind_param("ii", $article_id, $user_id); // "sss" signifie que les 7 paramètres sont des chaînes de caractères.
        $stmt->execute();  // Exécute la requête préparée.
        $stmt->close(); // Ferme l'objet de requête préparée.
    }

    // public function cancelMyCommand($article_id, $user_id)
    // {
    //     // @param int $id L'ID de l'utilisateur à supprimer.
    //     $stmt = $this->db->prepare("DELETE FROM command WHERE article_id = ? AND user_id= ? ");
    //     // Lie la variable $id au marqueur de position dans la requête préparée.
        
    //     $stmt->bind_param("ii", $article_id, $user_id);
    //     $stmt->execute();
    //     $stmt->close();
    // }

    public function saveValidationCommand($is_validated, $quantity, $command_id)
    {
        $stmt = $this->db->prepare("UPDATE command SET is_validated = ?, quantity = ? WHERE id = ?");
        $stmt->bind_param("iii", $is_validated, $quantity, $command_id);
        $stmt->execute();
        $stmt->close();
    }

    public function deleteCommand($article_id, $user_id)
    {
        $stmt = $this->db->prepare("DELETE FROM command WHERE article_id = ? AND user_id = ?");        
        $stmt->bind_param("ii", $article_id, $user_id);
        $stmt->execute();
        $stmt->close();
    }


    public function getCommandById($id)
    {
        $stmt = $this->db->prepare("SELECT article.name, article.id, article.description, article.image_url, article.location, article.quantity, article.category_id FROM article LEFT JOIN category ON article.category_id = category.id WHERE article.id = ?");

        $stmt->bind_param("i", $id); 
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    public function myCommands($user_id)
    {

        $stmt = $this->db->prepare("SELECT command.id, command.is_validated, article.point, article.name, article.id FROM command LEFT JOIN article ON command.article_id = article.id WHERE user_id = ?");
        $stmt->bind_param("i", $user_id); 
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getCommandByUserId($user_id, $article_id)
    {
        $stmt = $this->db->prepare("SELECT user_id FROM command WHERE user_id = ? AND article_id = ?");

        $stmt->bind_param("ii", $user_id, $article_id); 
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

     public function getCommandByArticleId($article_id)
    {
        $stmt = $this->db->prepare("SELECT user_id FROM command WHERE article_id = ?");

        $stmt->bind_param("i", $article_id); 
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }
}
