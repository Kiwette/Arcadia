<?php
$dsn = 'mysql:host=localhost;dbname=zoo_arcadia';
$username = 'root';
$password = '';

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>
<?php

// Paramètres de connexion à la base de données
$servername = "localhost"; 
$username = "LNDHZ"; 
$password = "adminarcadia"; 
$dbname = "arcadia_php"; 

// Création de la connexion
$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Erreur de connexion à la base de données : " . $conn->connect_error);
}

$conn->set_charset("utf8");
?>
