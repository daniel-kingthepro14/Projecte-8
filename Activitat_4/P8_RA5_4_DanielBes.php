<?php
$correu = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correu = $_POST["correu"] ?? '';

    // Validar si el correu té un format vàlid
    if (!filter_var($correu, FILTER_VALIDATE_EMAIL)) {
        $error = "El correu electrònic no és vàlid.";
    } else {
        echo "<h1>Correu vàlid!</h1>";
        echo "<p>El correu introduït és: $correu</p>";
    }
}
?>

<?php if ($error): ?>
    <p style="color: red;"><?php echo $error; ?></p>
<?php endif; ?>

<form method="post">
    <label for="correu">Correu electrònic:</label>
    <input type="email" id="correu" name="correu" value="<?php echo $correu; ?>" required><br><br>
    <button type="submit">Enviar</button>
</form>
