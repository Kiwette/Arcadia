<?php
class UserModel {
    private $pdo;
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }
    public function createUser($username, $password, $role) {
        $stmt = $this->pdo->prepare("INSERT INTO utilisateurs (username, password, role) VALUES (:username, :password, :role)");
 $stmt->execute(['username' => $username, 'password' => password_hash($password, PASSWORD_DEFAULT), 'role' => $role]);
    }
    public function getUser($username) {
        $stmt = $this->pdo->prepare("SELECT * FROM utilisateurs WHERE username = :username");
        $stmt->execute(['username' => $username]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
