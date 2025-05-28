<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "biblioteca";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connexió fallida: " . $conn->connect_error);
}

$sql = "SELECT * FROM llibres ORDER BY any DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['titol']}</td>
                <td>{$row['autor']}</td>
                <td>{$row['any']}</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='4'>No hi ha llibres</td></tr>";
}

$conn->close();
include 'ex7.html';
?>
