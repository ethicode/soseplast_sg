<?php
class Role {
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

    public function getAllRoles() {
        $sql = "SELECT role.id, role.name, COUNT(user.id) AS users_count FROM role LEFT JOIN user ON role.id = user.role_id GROUP BY role.name;";
        // $sql = "SELECT * FROM role";
        $result = $this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function selectCount()
    {
        $sql = "SELECT id FROM role";
        $result = $this->db->query($sql);
        $rowcount = mysqli_num_rows($result);
        return $rowcount;
    }
}
?>
