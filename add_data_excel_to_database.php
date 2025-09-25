<?php
require 'vendor/autoload.php'; // Assurez-vous que PHPExcel est installé via Composer

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "soseplast_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}

// Charger le fichier Excel
$inputFileName = 'LISTE_EQUIPEMENT.xlsx';
$spreadsheet = IOFactory::load($inputFileName);
$worksheet = $spreadsheet->getActiveSheet();

// Parcourir chaque ligne et colonne
foreach ($worksheet->getRowIterator() as $row) {
    $cellIterator = $row->getCellIterator();
    $cellIterator->setIterateOnlyExistingCells(false);

    $data = [];
    foreach ($cellIterator as $cell) {
        $data[] = $cell->getValue();
    }

    // Insérer les données dans la base de données
    $sql = "INSERT INTO article (name, description) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $data[5], $data[1]); // Ajustez les types et le nombre de colonnes selon vos besoins
    $stmt->execute();
}

$stmt->close();
$conn->close();

echo "Données insérées avec succès !";
?>