<?php
$comentari = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $comentari = $_POST["comentari"] ?? '';
    // Sanititzar les dades per evitar injeccions de codi HTML
    $comentari = htmlspecialchars($comentari, ENT_QUOTES, 'UTF-8');
}
?>

<form method="post">
    <label for="comentari">Deixa un comentari:</label><br>
    <textarea id="comentari" name="comentari" rows="4" cols="50"><?php echo htmlspecialchars($comentari); ?></textarea><br><br>
    <button type="submit">Enviar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($comentari)) {
    echo "<h2>Comentari enviat:</h2>";
    echo "<p>$comentari</p>";
}
?>
