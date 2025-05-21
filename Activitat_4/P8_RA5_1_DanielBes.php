<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars($_POST['nom']);
    echo "<h1>Benvingut, $nom!</h1>";
} else {
?>
    <form method="post" action="">
        <label for="nom">Introdueix el teu nom:</label>
        <input type="text" id="nom" name="nom" required>
        <button type="submit">Enviar</button>
    </form>
<?php
}
?>
