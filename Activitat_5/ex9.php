<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "biblioteca";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connexió fallida: " . $conn->connect_error);
}

if (!empty($_POST["id"]) && !empty($_POST["titol"]) && !empty($_POST["autor"]) && !empty($_POST["any"])) {
    $stmt = $conn->prepare("UPDATE llibres SET titol=?, autor=?, any=? WHERE id=?");
    $stmt->bind_param("ssii", $_POST["titol"], $_POST["autor"], $_POST["any"], $_POST["id"]);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "Llibre actualitzat correctament!";
    } else {
        echo "No s'ha trobat el llibre!";
    }

    $stmt->close();
} else {
    echo "Tots els camps són obligatoris!";
}

$conn->close();
?>
