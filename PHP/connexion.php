<?php 

$servername="localhost";

$username = "root";

$password ="";

try{
$bdd=new PDO("mysql:host=$servername;dbname=arcadia_php",$username,$passwor);
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Connexion réussie!";

}
catch (PDOException $e){
    echo "Erreur: ".$e->getMessage();


}

?>