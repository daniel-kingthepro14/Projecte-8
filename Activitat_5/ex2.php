<?php

$conn = new mysqli("localhost", "root", "", "biblioteca");

if ($conn->connect_error) die("Error: " . $conn->connect_error);

$result = $conn->query("SELECT ID, Titol, autor, any FROM llibres");

while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['id']}</td><td>{$row['titol']}</td><td>{$row['autor']}</td><td>{$row['any']}</td></tr>";
}

$conn->close();

include 'ex1.html.php';>

?>