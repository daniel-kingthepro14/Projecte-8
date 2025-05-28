<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "biblioteca";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connexió fallida: " . $conn->connect_error);
}

$stmt = $conn->prepare("DELETE FROM llibres WHERE id=?");
$stmt->bind_param("i", $_POST["id"]);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    echo "Llibre eliminat correctament!";
} else {
    echo "No s'ha trobat el llibre!";
}

$stmt->close();
$conn->close();
?>
