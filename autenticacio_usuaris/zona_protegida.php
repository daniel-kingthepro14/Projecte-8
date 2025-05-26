<?php
session_start();

if (!isset($_SESSION['usuari_id'])) {
    header("Location: login.html");
    exit;
}
echo "Benvingut, " . htmlspecialchars($_SESSION['usuari_nom']) . "!<br>";
echo '<a href="logout.php">Tanca sessió</a>';
?>
