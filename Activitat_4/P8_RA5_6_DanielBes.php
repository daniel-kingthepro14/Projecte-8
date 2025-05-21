<?php
$ciutat = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ciutat = $_POST["ciutat"];
}
?>

<form method="post">
    <label for="ciutat">Tria la teva ciutat d'origen:</label>
    <select name="ciutat" id="ciutat" required>
        <option value="Barcelona" <?php echo ($ciutat == "Barcelona") ? 'selected' : ''; ?>>Barcelona</option>
        <option value="Madrid" <?php echo ($ciutat == "Madrid") ? 'selected' : ''; ?>>Madrid</option>
        <option value="València" <?php echo ($ciutat == "València") ? 'selected' : ''; ?>>València</option>
        <option value="Sevilla" <?php echo ($ciutat == "Sevilla") ? 'selected' : ''; ?>>Sevilla</option>
    </select><br><br>
    <button type="submit">Enviar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h2>Ciutat seleccionada: $ciutat</h2>";
}
?>
