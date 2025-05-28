<?php
$conn = new mysqli("localhost", "root", "", "biblioteca");
if ($conn->connect_error) die("Error: " . $conn->connect_error);

if (!empty($_GET["autor"])) {
    $stmt = $conn->prepare("SELECT id, titol, autor, any FROM llibres WHERE autor LIKE ?");
    $autor = "%" . $_GET["autor"] . "%";
    $stmt->bind_param("s", $autor);
    $stmt->execute();
    
    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>{$row['id']}</td><td>{$row['titol']}</td><td>{$row['autor']}</td><td>{$row['any']}</td></tr>";
    }

    $stmt->close();
}

$conn->close();
?>
