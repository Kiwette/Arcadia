
<?php
class ServiceModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }
    public function createService($nom, $description) {
        $stmt = $this->pdo->prepare("INSERT INTO services (nom, description) VALUES (:nom, :description)");
        $stmt->execute(['nom' => $nom, 'description' => $description]);
    }
    public function getServices() {
        $stmt = $this->pdo->query("SELECT * FROM services");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>

  