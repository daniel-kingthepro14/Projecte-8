<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['nom']) && isset($_GET['edat'])) {
    $nom = htmlspecialchars($_GET['nom']);
    $edat = htmlspecialchars($_GET['edat']);
    echo "<h1>Benvingut, $nom!</h1>";
    echo "<p>Tens $edat anys.</p>";
} else {
?>
    <form method="get" action="">
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" required><br><br>

        <label for="edat">Edat:</label>
        <input type="number" id="edat" name="edat" required><br><br>

        <button type="submit">Enviar</button>
    </form>
<?php
}
?>
