<?php
class User
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

    public function getAllUsers()
    {
        $sql = "SELECT * FROM user";
        $result = $this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getUsersByPagination($calc_page, $num_results_on_page)
    {
        $stmt = $this->db->prepare("SELECT user.id, user.point, user.email, user.name, user.is_enabled, role.name AS role_name FROM user left join role on user.role_id=role.id ORDER BY user.id DESC  LIMIT ?,?;");
        $stmt->bind_param('ii', $calc_page, $num_results_on_page); // "i" signifie que le paramètre est un entier.
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getAllUsersLimit5()
    {
        $sql = "SELECT user.id, user.name, user.is_enabled, role.name AS role_name FROM user left join role on user.role_id=role.id LIMIT 5";
        $result = $this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function selectCount()
    {
        $sql = "SELECT id FROM user";
        $result = $this->db->query($sql);
        $rowcount = mysqli_num_rows($result);
        return $rowcount;
    }

    // Ajoute un nouvel utilisateur à la table "user" de la base de données.
    public function addUser($name, $email, $password, $role_id)
    {
        // Prépare la requête SQL pour insérer un nouvel utilisateur.
        // Utilise des marqueurs de position "?" pour les valeurs à insérer.
        $stmt = $this->db->prepare("INSERT INTO user (name, email, password, role_id) VALUES (?, ?, ?, ?)");

        // Vérifie si la préparation de la requête a échoué et, dans ce cas, affiche l'erreur MySQL
        if ($stmt === false) {
            die("MySQL Error: " . $this->db->error);
        }
        // Lie les variables aux marqueurs de position dans la requête préparée.
        $stmt->bind_param("ssss", $name, $email, $password, $role_id); // "sss" signifie que les 4 paramètres sont des chaînes de caractères.
        $stmt->execute();  // Exécute la requête préparée.
        $stmt->close(); // Ferme l'objet de requête préparée.
    }

    public function desactivatedUser($id, $is_enabled)
    {
        $stmt = $this->db->prepare("UPDATE user SET is_enabled = ? WHERE id = ?");
        $stmt->bind_param("ii", $is_enabled, $id);
        $stmt->execute();
        $stmt->close();
    }

    public function updateuser($id, $username, $email)
    {
        $stmt = $this->db->prepare("UPDATE user SET name = ?, email = ? WHERE id = ?");
        $stmt->bind_param("ssi", $username, $email, $id);
        $stmt->execute();
        $stmt->close();
    }

    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();
    }

    public function getUserByEmail($email)
    {
        /*
        La fonction getUserByEmail($email) est généralement utilisée lorsque vous avez besoin
        d'obtenir des informations sur un utilisateur spécifique identifié par son Email.
        Voici quelques cas d'utilisation typiques : Affichage de Profil, Contrôle d'Accès
        Édition de l'utilisateur 
         */
        $stmt = $this->db->prepare("SELECT user.id, user.name, user.email, user.password, role.name as role_name FROM user LEFT JOIN role on user.role_id=role.id WHERE email = ?");
        $stmt->bind_param("s", $email); // "s" signifie que le paramètre est un entier.
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    public function deleteUser($id)
    {
        // @param int $id L'ID de l'utilisateur à supprimer.
        $stmt = $this->db->prepare("DELETE FROM user WHERE id = ?");
        // Lie la variable $id au marqueur de position dans la requête préparée.
        // "i" signifie que le paramètre est un entier.
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
    }


    public function getUserById($id)
    {
        /*
        La fonction getProductById($id) est généralement utilisée lorsque vous avez besoin
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

    // public function login($query, $data, $path)
    // {

    //     $stmt = $this->db->prepare("SELECT * FROM product WHERE id = ?");
    //     if ($stmt === false) {
    //         die("MySQL Error: " . $this->db->error);
    //     }


    //     $login_user = $this->db->prepare($query);
    //     $login_user->execute();
    //     $fetch = $login_user->fetch(PDO::FETCH_ASSOC);

    //     if ($login_user->rowCount() > 0) {
    //         echo $fetch['password'];
    //         if (password_verify($data['password'], $fetch['password'])) {
    //             session_start();
    //             $_SESSION['matricule'] = $fetch['matricule'];
    //             $_SESSION['username'] = $fetch['username'];
    //             $_SESSION['role'] = $fetch['name'];
    //             $_SESSION['incident_user_id'] = $fetch['id'];

    //             header("location:" . $path . "");
    //         } else {
    //             echo "<script> alert('Erreur mot de passe') </script>";
    //         }
    //     }
    // }
}
