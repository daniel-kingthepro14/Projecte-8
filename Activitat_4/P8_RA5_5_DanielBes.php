<?php
$aficions = isset($_POST['aficions']) ? $_POST['aficions'] : [];
?>

<form method="post">
    <label>Aficions:</label><br>
    <input type="checkbox" name="aficions[]" value="Esport" <?php echo in_array("Esport", $aficions) ? 'checked' : ''; ?>> Esport<br>
    <input type="checkbox" name="aficions[]" value="Llibres" <?php echo in_array("Llibres", $aficions) ? 'checked' : ''; ?>> Llibres<br>
    <input type="checkbox" name="aficions[]" value="Música" <?php echo in_array("Música", $aficions) ? 'checked' : ''; ?>> Música<br>
    <input type="checkbox" name="aficions[]" value="Viatges" <?php echo in_array("Viatges", $aficions) ? 'checked' : ''; ?>> Viatges<br>
    <button type="submit">Enviar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($aficions)) {
    echo "<h2>Aficions seleccionades:</h2>";
    echo "<ul>";
    foreach ($aficions as $aficio) {
        echo "<li>$aficio</li>";
    }
    echo "</ul>";
} elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<p style='color: red;'>No has seleccionat cap afició.</p>";
}
?>
