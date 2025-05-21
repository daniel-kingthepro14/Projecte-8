<?php
$genere = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $genere = $_POST["genere"];
}
?>

<form method="post">
    <label for="genere">Selecciona el teu gènere:</label><br>
    <input type="radio" id="home" name="genere" value="Home" <?php echo ($genere == "Home") ? 'checked' : ''; ?>> Home<br>
    <input type="radio" id="dona" name="genere" value="Dona" <?php echo ($genere == "Dona") ? 'checked' : ''; ?>> Dona<br>
    <input type="radio" id="altres" name="genere" value="Altres" <?php echo ($genere == "Altres") ? 'checked' : ''; ?>> Altres<br><br>
    <button type="submit">Enviar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($genere) {
        echo "<h2>Gènere seleccionat: $genere</h2>";
    } else {
        echo "<p style='color: red;'>Has de seleccionar un gènere.</p>";
    }
}
?>
