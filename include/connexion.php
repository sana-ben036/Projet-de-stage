<?php
// Informations d'identification
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'stage_website');
// Connexion à la base de données MySQL
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
// Vérifier la connexion
//var_dump($conn);
if ($conn === false) {
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}