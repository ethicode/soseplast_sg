<?php
class Don {
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

    public function getDonsByPagination($calc_page, $num_results_on_page)
    {
        $stmt = $this->db->prepare("SELECT don.beneficiaire_id, don.article_id, don.is_delivered ,article.name, article.id, article.price, article.quantity, article.image_url, article.created_at FROM don LEFT JOIN article ON don.article_id = article.id ORDER BY article.id DESC  LIMIT ?,?;");
        $stmt->bind_param('ii', $calc_page, $num_results_on_page); // "i" signifie que le paramètre est un entier.
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getAllDon() {
        $sql = "SELECT don.id, don.beneficiaire_id, don.demande_id, don.article_id, don.created_at, don.value, article.id as articleId, article.name as article_name FROM don LEFT JOIN article on don.article_id=article.id";
        $result = $this->db->query($sql);

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function selectCount() {
        $sql = "SELECT id FROM don";
        $result = $this->db->query($sql);
        $rowcount=mysqli_num_rows($result);
        return $rowcount;
    }

    // Ajoute un nouvel utilisateur à la table "users" de la base de données.
    public function addDon($username, $email, $password) {
        // Prépare la requête SQL pour insérer un nouvel utilisateur.
        // Utilise des marqueurs de position "?" pour les valeurs à insérer.
        $stmt = $this->db->prepare("INSERT INTO don (name, description, quantity) VALUES (?, ?, ?)");
        
        // Vérifie si la préparation de la requête a échoué et, dans ce cas, affiche l'erreur MySQL
        if ($stmt === false) {
            die("MySQL Error: " . $this->db->error);
        }
        // Lie les variables aux marqueurs de position dans la requête préparée.
        $stmt->bind_param("sss", $username, $email, $password); // "sss" signifie que les 3 paramètres sont des chaînes de caractères.
        $stmt->execute();  // Exécute la requête préparée.
        $stmt->close(); // Ferme l'objet de requête préparée.
    }

    public function ajouterDonEnNumeraire($request_id, $value) {
        // Prépare la requête SQL pour insérer un nouvel utilisateur.
        // Utilise des marqueurs de position "?" pour les valeurs à insérer.
        $stmt = $this->db->prepare("INSERT INTO don (demande_id, value) VALUES (?, ?)");
        
        // Vérifie si la préparation de la requête a échoué et, dans ce cas, affiche l'erreur MySQL
        if ($stmt === false) {
            die("MySQL Error: " . $this->db->error);
        }
        // Lie les variables aux marqueurs de position dans la requête préparée.
        $stmt->bind_param("is", $request_id, $value); // "sss" signifie que les 3 paramètres sont des chaînes de caractères.
        $stmt->execute();  // Exécute la requête préparée.
        $stmt->close(); // Ferme l'objet de requête préparée.
    }


    public function ajouterDonEnNature($request_id, $article_id) {
        // Prépare la requête SQL pour insérer un nouvel utilisateur.
        // Utilise des marqueurs de position "?" pour les valeurs à insérer.
        $stmt = $this->db->prepare("INSERT INTO don (demande_id, value) VALUES (?, ?)");
        
        // Vérifie si la préparation de la requête a échoué et, dans ce cas, affiche l'erreur MySQL
        if ($stmt === false) {
            die("MySQL Error: " . $this->db->error);
        }
        // Lie les variables aux marqueurs de position dans la requête préparée.
        $stmt->bind_param("is", $request_id, $article_id); // "sss" signifie que les 3 paramètres sont des chaînes de caractères.
        $stmt->execute();  // Exécute la requête préparée.
        $stmt->close(); // Ferme l'objet de requête préparée.
    }

    public function updateDon($id, $username, $email) {
        $stmt = $this->db->prepare("UPDATE don SET username = ?, email = ? WHERE id = ?");
        $stmt->bind_param("ssi", $username, $email, $id);
        $stmt->execute();
        $stmt->close();
    }

    public function deleteDon($id) {
        // @param int $id L'ID de l'utilisateur à supprimer.
        $stmt = $this->db->prepare("DELETE FROM users WHERE id = ?");
        // Lie la variable $id au marqueur de position dans la requête préparée.
        // "i" signifie que le paramètre est un entier.
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
    }

    
    public function getDonById($id) {
        /*
        La fonction getUserById($id) est généralement utilisée lorsque vous avez besoin
        d'obtenir des informations sur un utilisateur spécifique identifié par son ID.
        Voici quelques cas d'utilisation typiques : Affichage de Profil, Contrôle d'Accès
        Édition de l'utilisateur 
         */   
        $stmt = $this->db->prepare("SELECT * FROM don WHERE id = ?");
        $stmt->bind_param("i", $id); // "i" signifie que le paramètre est un entier.
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }
}
?>
