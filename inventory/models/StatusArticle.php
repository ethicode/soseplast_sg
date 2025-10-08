<?php
class StatusArticle
{
    private $db;

    public function __construct()
    {
        // Fichier de configuration de la base de données
        require_once('../config/config_db.php');
        // Connection à la base de données
        $this->db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

        // Vérifier la connexion
        if ($this->db->connect_error) {
            die("Connection failed: " . $this->db->connect_error);
        }
        $this->db->set_charset("utf8mb4");
    }

    public function getAllStatusArticles()
    {
        $sql = "SELECT * FROM status_article ORDER BY id DESC;";
        $result = $this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
