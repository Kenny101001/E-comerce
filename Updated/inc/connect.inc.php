<?php
/*$servername = "mysql-ken.alwaysdata.net";
$username = "ken";
$password = "jerry2titeuf";
$database = "ken_grocery"; */

$servername = "localhost";
$username = "root";
$password = "";
$database = "grocery";

// Création de la connexion
$con = new mysqli($servername, $username, $password, $database);

// Vérifier la connexion
if ($con->connect_error) {
    die("La connexion a échoué : " . $con->connect_error);
} 
echo "Connexion réussie";

// Vous pouvez utiliser $conn pour exécuter vos requêtes SQL

// Fermer la connexion
$con->close();
?>
