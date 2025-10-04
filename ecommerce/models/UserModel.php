<?php
class UserModel {
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

    public function getAllUsers() {
        $sql = "SELECT user.id, user.name, user.is_enabled, role.name AS role_name FROM user left join role on user.role_id=role.id";
        $result = $this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    // Ajoute un nouvel utilisateur à la table "user" de la base de données.
    public function addUser($username, $email, $password) {
        // Prépare la requête SQL pour insérer un nouvel utilisateur.
        // Utilise des marqueurs de position "?" pour les valeurs à insérer.
        $stmt = $this->db->prepare("INSERT INTO user (username, email, password) VALUES (?, ?, ?)");
        
        // Vérifie si la préparation de la requête a échoué et, dans ce cas, affiche l'erreur MySQL
        if ($stmt === false) {
            die("MySQL Error: " . $this->db->error);
        }
        // Lie les variables aux marqueurs de position dans la requête préparée.
        $stmt->bind_param("sss", $username, $email, $password); // "sss" signifie que les 3 paramètres sont des chaînes de caractères.
        $stmt->execute();  // Exécute la requête préparée.
        $stmt->close(); // Ferme l'objet de requête préparée.
    }

    public function updateUser($id, $username, $email) {
        $stmt = $this->db->prepare("UPDATE users SET username = ?, email = ? WHERE id = ?");
        $stmt->bind_param("ssi", $username, $email, $id);
        $stmt->execute();
        $stmt->close();
    }

    public function deleteUser($id) {
        // @param int $id L'ID de l'utilisateur à supprimer.
        $stmt = $this->db->prepare("DELETE FROM user WHERE id = ?");
        // Lie la variable $id au marqueur de position dans la requête préparée.
        // "i" signifie que le paramètre est un entier.
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
    }

    
    public function getUserById($id) {
        /*
        La fonction getUserById($id) est généralement utilisée lorsque vous avez besoin
        d'obtenir des informations sur un utilisateur spécifique identifié par son ID.
        Voici quelques cas d'utilisation typiques : Affichage de Profil, Contrôle d'Accès
        Édition de l'utilisateur 
         */   
        $stmt = $this->db->prepare("SELECT * FROM user WHERE id = ?");
        $stmt->bind_param("i", $id); // "i" signifie que le paramètre est un entier.
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }
}
?>
