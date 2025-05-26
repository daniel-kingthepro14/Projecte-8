<?php
// connectar.php

$host = 'db';
$usuari = 'root';
$contrasenya = 'root';
$bd = 'autenticacio';

$conn = new mysqli($host, $usuari, $contrasenya, $bd);
if ($conn->connect_error) {
    die("Error de connexió: " . $conn->connect_error);
}

// Inserció d’un usuari nou amb hash de contrasenya
/*$nom = "Joan";
$email = "joan@example.com";
$contrasenya_hash = password_hash("1234", PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO usuaris (nom, email, contrasenya) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $nom, $email, $contrasenya_hash);
$stmt->execute();
$stmt->close();
$conn->close();*/
?>
