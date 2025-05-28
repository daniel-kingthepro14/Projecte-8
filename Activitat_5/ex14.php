<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "biblioteca";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connexió fallida: " . $conn->connect_error);
}

// Recuperar clients
$sql = "SELECT * FROM clients";
$result = $conn->query($sql);

echo "<table border='1'><tr><th>ID</th><th>Nom</th><th>Email</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['id']}</td><td>{$row['nom']}</td><td>{$row['email']}</td></tr>";
}
echo "</table>";

$conn->close();
?>
