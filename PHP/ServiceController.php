<?php
require 'ServiceModel.php';
class ServiceController {
    private $model;
    public function __construct($pdo) {
        $this->model = new ServiceModel($pdo);
    }
    public function addService($nom, $description) {
        $this->model->createService($nom, $description);
        // Redirige ou affiche un message de succès
        
 }
 public function listServices() {
     return $this->model->getServices();
 }
}
?>
}
?>