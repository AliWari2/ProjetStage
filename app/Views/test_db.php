<?php
$hostname = 'localhost'; // Habituellement localhost, modifiez si nécessaire
$username = 'root';      // Votre nom d'utilisateur pour MySQL
$password = 'root';      // Votre mot de passe pour MySQL
$database = 'M\'hira';   // Le nom de votre base de données

// Créer une connexion
$conn = new mysqli($hostname, $username, $password, $database);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connexion échouée: " . $conn->connect_error);
} else {
    echo "Connexion réussie à la base de données!";
}

// Fermer la connexion
$conn->close();
?>
