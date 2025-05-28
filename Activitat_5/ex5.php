<?php
$conn = new mysqli("localhost", "root", "", "biblioteca");
if ($conn->connect_error) die("Error: " . $conn->connect_error);

if (!empty($_POST["titol"]) && !empty($_POST["autor"]) && !empty($_POST["any"])) {
    $stmt = $conn->prepare("INSERT INTO llibres (titol, autor, any) VALUES (?, ?, ?)");
    $stmt->bind_param("ssi", $_POST["titol"], $_POST["autor"], $_POST["any"]);

    if ($stmt->execute()) {
        echo "Llibre afegit correctament!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Error: Tots els camps són obligatoris!";
}

$conn->close();
?>
