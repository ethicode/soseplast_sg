<?php
class Article
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

    public function getAllArticles()
    {
        $sql = "SELECT article.name, article.id, article.point, article.location, article.for_sale, article.price, article.quantity, article.image_url, article.created_at, status_article.name as status_article_name, category.name as category_name FROM article LEFT JOIN category ON article.category_id = category.id LEFT JOIN status_article on article.status_id = status_article.id ORDER BY article.id DESC;";
        $result = $this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getArticlesByPagination($calc_page, $num_results_on_page)
    {
        $stmt = $this->db->prepare("SELECT article.name, article.id, article.location, article.for_sale, article.price, article.quantity, article.image_url, article.created_at, category.name as category_name FROM article LEFT JOIN category ON article.category_id = category.id ORDER BY article.id DESC  LIMIT ?,?;");
        $stmt->bind_param('ii', $calc_page, $num_results_on_page); // "i" signifie que le paramètre est un entier.
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getForSaleArticlesByPagination()
    {
        // $stmt = $this->db->prepare("SELECT article.name, article.id, article.description, article.location, article.for_sale, article.price, article.quantity, article.image_url, article.created_at, category.name as category_name FROM article LEFT JOIN category ON article.category_id = category.id WHERE article.for_sale = true ORDER BY article.id DESC ;");
         $sql = "SELECT article.name, article.id, article.description, article.location, article.for_sale, article.price, article.quantity, article.image_url, article.created_at, category.name as category_name FROM article LEFT JOIN category ON article.category_id = category.id WHERE article.for_sale = true ORDER BY article.id DESC ;";
        $result = $this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getAllArticlesToSell()
    {
        $sql = "SELECT  sell.id, sell.price, sell.id, sell.is_sold, sell.client_id as client_id, article.name, article.description, article.location, article.quantity, article.created_at FROM sell LEFT JOIN article ON sell.article_id = article.id ORDER BY sell.id DESC;";
        $result = $this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getAllArticlesLimit5()
    {
        $sql = "SELECT article.name, article.id, article.location, article.quantity, article.created_at, article.image_url FROM article LEFT JOIN category ON article.category_id = category.id ORDER BY article.id DESC LIMIT 5;";
        $result = $this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    // public function getDetailArticle() {
    //     $sql = "SELECT article.name, article.id, article.location, article.quantity FROM article LEFT JOIN category ON article.category_id = category.id WHERE article.id=1;";
    //     $result = $this->db->query($sql);
    //     return $result->fetch_all(MYSQLI_ASSOC);
    // }

    public function selectCount()
    {
        $sql = "SELECT COUNT(*) as total FROM article WHERE for_sale = true";
        if ($result = $this->db->query($sql)) {
            $row = $result->fetch_assoc();
            return (int) $row['total'];
        } else {
            // Log ou gestion de l'erreur SQL
            return 0;
        }
    }


    public function selectCountSell()
    {
        $sql = "SELECT id FROM article WHERE for_sale = 1";
        $result = $this->db->query($sql);
        $rowcount = mysqli_num_rows($result);
        return $rowcount;
    }

    public function selectSellsArticleCount()
    {
        $sql = "SELECT id FROM article WHERE for_sale = 1";
        $result = $this->db->query($sql);
        $rowcount = mysqli_num_rows($result);
        return $rowcount;
    }

    public function selectForSaleCount()
    {
        $sql = "SELECT id FROM article WHERE for_sale = true";
        $result = $this->db->query($sql);
        $rowcount = mysqli_num_rows($result);
        return $rowcount;
    }

    public function getCountArticlesByCategory($id)
    {

        $stmt = $this->db->prepare("SELECT * FROM article  WHERE category_id = ?");
        $stmt->bind_param("i", $id); // "i" signifie que le paramètre est un entier.
        $stmt->execute();
        $result = $stmt->get_result();
        $rowcount = mysqli_num_rows($result);
        return $rowcount;
    }

    public function searchArticles($search)
    {
        $sql = "SELECT article.name, article.id, article.for_sale , article.location, article.quantity, article.image_url, article.created_at, category.name as category_name FROM article LEFT JOIN category ON article.category_id = category.id WHERE article.name LIKE '%$search%' ORDER BY article.id DESC";
        $result = $this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function sellArticlesByCategory($category_id, $calc_page, $num_results_on_page)
    {
        $stmt = $this->db->prepare("SELECT article.name, article.id, article.description, article.price, article.location, article.image_url, article.image_1, article.image_2, article.image_3, article.location, article.quantity, article.category_id FROM article LEFT JOIN category ON article.category_id = category.id WHERE article.category_id = ?  AND article.for_sale = 1 ORDER BY article.id DESC  LIMIT ?,?;");

        $stmt->bind_param("iii", $category_id, $calc_page, $num_results_on_page); // "i" signifie que le paramètre est un entier.
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function addArticle($name, $description, $category_id, $point, $for_sale, $quantity, $location, $image_url, $image_1, $image_2, $image_3)
    {
        $stmt = $this->db->prepare("INSERT INTO article (name, description, category_id, point, for_sale, quantity, location, image_url, image_1, image_2, image_3) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        if ($stmt === false) {
            die("MySQL Error: " . $this->db->error);
        }
        $stmt->bind_param("ssiiissssss", $name, $description, $category_id, $point, $for_sale, $quantity, $location, $image_url, $image_1, $image_2, $image_3); // "sss" signifie que les 7 paramètres sont des chaînes de caractères.
        $stmt->execute(); 
        $stmt->close(); 
    }

    public function saveArticle($name, $description, $category_id, $status__id, $for_sale, $point, $quantity, $location, $image_url, $image_1, $image_2, $image_3, $article_id)
    {
        $stmt = $this->db->prepare("UPDATE article SET name = ?, description = ?, category_id = ?, status_id = ?, for_sale = ?, point = ?, quantity = ?, location = ?, image_url = ?, image_1 = ?, image_2 = ?, image_3 = ? WHERE id = ?");
        $stmt->bind_param("ssiiiissssssi", $name, $description, $category_id, $status__id, $for_sale, $point, $quantity, $location, $image_url, $image_1, $image_2, $image_3, $article_id);
        $stmt->execute();
        $stmt->close();
    }

    public function sellArticle($for_sale, $price, $article_id)
    {
        $stmt = $this->db->prepare("UPDATE article SET for_sale = ?, price = ? WHERE id = ?");
        $stmt->bind_param("iii", $for_sale, $price, $article_id);
        $stmt->execute();
        $stmt->close();
    }

    public function deleteArticle($id)
    {
        // @param int $id L'ID de l'utilisateur à supprimer.
        $stmt = $this->db->prepare("DELETE FROM article WHERE id = ?");
        // Lie la variable $id au marqueur de position dans la requête préparée.
        // "i" signifie que le paramètre est un entier.
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
    }


    public function getArticleById($id)
    {
        // /*
        // La fonction getUserById($id) est généralement utilisée lorsque vous avez besoin
        // d'obtenir des informations sur un utilisateur spécifique identifié par son ID.
        // Voici quelques cas d'utilisation typiques : Affichage de Profil, Contrôle d'Accès
        // Édition de l'utilisateur 
        //  */
        $stmt = $this->db->prepare("SELECT article.name, article.point, article.for_sale, article.id, article.description, article.price, article.location, article.image_url, article.image_1, article.image_2, article.image_3, article.location, article.quantity, article.category_id, category.name as category_name FROM article LEFT JOIN category ON article.category_id = category.id WHERE article.id = ?");

        $stmt->bind_param("i", $id); // "i" signifie que le paramètre est un entier.
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }
}
