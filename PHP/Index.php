
<?php
require 'config.php';
require 'UserController.php';
require 'ServiceController.php';
$userController = new UserController($pdo);
$serviceController = new ServiceController($pdo);
// Pour les routes simples
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
// Pour enregistrer un utilisateur
f ($_POST['action'] == 'register') {
$userController->register($_POST['username'], $_POST['password'], $_POST ['role’]);
   }
}
// Obtenir les services
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
if ($_GET['action'] == 'list_services') {
$services = $serviceController->listServices();
echo json_encode($services);
    }
}
?>


