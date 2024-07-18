<?php
require 'UserModel.php';
class UserController {
    private $model;
    public function __construct($pdo) {
        $this->model = new UserModel($pdo);
    }
    public function register($username, $password, $role) {
        $this->model->createUser($username, $password, $role);
        // Redirige ou affiche un message de succès
    }
    public function login($username, $password) {

?>
 $user = $this->model->getUser($username);
        if ($user && password_verify($password, $user['password'])) {
            // Démarrer la session et enregistrer les informations utilisateur
        } else {
            // Afficher un message d'erreur
        }