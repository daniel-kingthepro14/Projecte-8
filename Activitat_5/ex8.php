<?php
$conn = new mysqli("localhost", "root", "", "biblioteca");
if ($conn->connect_error) die("Error de connexió");

if (isset($_GET['keyword'])) {
    $keyword = $conn->real_escape_string($_GET['keyword']);
    $result = $conn->query("SELECT * FROM llibres WHERE titol LIKE '%$keyword%' ORDER BY any DESC");

    while ($row = $result->fetch_assoc()) 
        echo "<tr><td>{$row['id']}</td><td>{$row['titol']}</td><td>{$row['autor']}</td><td>{$row['any']}</td></tr>";
}
$conn->close();
include 'ex8.html';
?>

