<?php
$conn = new mysqli("localhost", "root", "", "biblioteca");
if ($conn->connect_error) die("Error: " . $conn->connect_error);

$titol = $_POST["titol"];
$autor = $_POST["autor"];
$any = $_POST["any"];

$sql = "INSERT INTO llibres (titol, autor, any) VALUES ('$titol', '$autor', '$any')";
if ($conn->query($sql) === TRUE) {
    echo "Llibre afegit correctament!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>