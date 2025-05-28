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
        echo "<script>alert('Llibre actualitzat correctament!');</script>";
    } else {
        echo "<script>alert('No s'ha trobat el llibre!');</script>";
    }

    $stmt->close();
} else {
    echo "<script>alert('Tots els camps són obligatoris!');</script>";
}

$conn->close();
?>
