<?php
class Category {
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
        $this->db->set_charset("utf8mb4");
    }

    public function getAllCategory() {
        // $sql = "SELECT category.id, category.name, article.for_sale, COUNT(article.id) AS articles_count FROM category LEFT JOIN article ON category.id = article.category_id GROUP BY category.name WHERE article.for_sale = 1;";
        $sql = "SELECT category.id, category.name, article.for_sale, COUNT(article.id) AS articles_count 
        FROM category 
        LEFT JOIN article ON category.id = article.category_id 
        GROUP BY category.id;";

        $result = $this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getAllCategoryForSale() {
        // $sql = "SELECT category.id, category.name, article.for_sale, COUNT(article.id) AS articles_count FROM category LEFT JOIN article ON category.id = article.category_id GROUP BY category.name WHERE article.for_sale = 1;";
        $sql = "SELECT category.id, category.name, article.for_sale, COUNT(article.id) AS articles_count 
        FROM category 
        LEFT JOIN article ON category.id = article.category_id 
        WHERE article.for_sale = 1 
        GROUP BY category.id, category.name, article.for_sale;";

        $result = $this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function selectCount() {
        $sql = "SELECT id FROM category";
        $result = $this->db->query($sql);
        $rowcount=mysqli_num_rows($result);
        return $rowcount;
    }

    // Ajoute un nouvel categorie à la table "category" de la base de données.
    public function addCategory($name) {
        // Prépare la requête SQL pour insérer un nouvel categorie.
        // Utilise des marqueurs de position "?" pour les valeurs à insérer.
        $stmt = $this->db->prepare("INSERT INTO category (name) VALUES (?)");
        
        // Vérifie si la préparation de la requête a échoué et, dans ce cas, affiche l'erreur MySQL
        if ($stmt === false) {
            die("MySQL Error: " . $this->db->error);
        }
        // Lie les variables aux marqueurs de position dans la requête préparée.
        $stmt->bind_param("s", $name); // "sss" signifie que les 1 paramètres sont des chaînes de caractères.
        $stmt->execute();  // Exécute la requête préparée.
        $stmt->close(); // Ferme l'objet de requête préparée.
    }

    public function updateCategory($id, $username, $email) {
        $stmt = $this->db->prepare("UPDATE category SET username = ?, email = ? WHERE id = ?");
        $stmt->bind_param("ssi", $username, $email, $id);
        $stmt->execute();
        $stmt->close();
    }

    public function deleteCategory($id) {
        // @param int $id L'ID de la categorie à supprimer.
        $stmt = $this->db->prepare("DELETE FROM category WHERE id = ?");
        // Lie la variable $id au marqueur de position dans la requête préparée.
        // "i" signifie que le paramètre est un entier.
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
    }

    
    public function getCategoryByIdbyPagination($calc_page, $num_results_on_page, $id) {
        /*
        La fonction getUserById($id) est généralement utilisée lorsque vous avez besoin
        d'obtenir des informations sur un categorie spécifique identifié par son ID.
        Voici quelques cas d'utilisation typiques : Affichage de Profil, Contrôle d'Accès
        Édition de l'categorie 
         */   
        $stmt = $this->db->prepare("SELECT article.name, article.id, article.location, article.quantity, article.image_url, article.created_at, category.name as category_name FROM article LEFT JOIN category ON article.category_id = category.id   WHERE article.category_id = ? ORDER BY article.id DESC  LIMIT ?,?;");
        $stmt->bind_param("iii", $id, $calc_page, $num_results_on_page); // "i" signifie que le paramètre est un entier.
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getCategoryById($id)
    {
        /*
        La fonction getProductById($id) est généralement utilisée lorsque vous avez besoin
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
