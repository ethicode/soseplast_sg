<?php
session_start();
require_once 'models/User.php';

header('Content-Type: application/json');

if (isset($_SESSION['soseplast_user_id'])) {
    $userModel = new User();
    $id = $_SESSION['soseplast_user_id'];
    $user = $userModel->getUserById($id);

    if ($user) {
        echo json_encode([
            'success' => true,
            'points' => $user['point']
        ]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Utilisateur introuvable']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Utilisateur non connecté']);
}
