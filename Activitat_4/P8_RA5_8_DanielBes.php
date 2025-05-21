<?php
$nom = $correu = $missatge = "";
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"] ?? '';
    $correu = $_POST["correu"] ?? '';
    $missatge = $_POST["missatge"] ?? '';

    if (!$nom) $errors[] = "El camp 'Nom' és obligatori.";
    if (!$correu) $errors[] = "El camp 'Correu electrònic' és obligatori.";
    if (!$missatge) $errors[] = "El camp 'Missatge' és obligatori.";

    if (empty($errors)) {
        echo "<h2>Formulari enviat amb èxit!</h2>";
        echo "<p><strong>Nom:</strong> $nom</p><p><strong>Correu:</strong> $correu</p><p><strong>Missatge:</strong> $missatge</p>";
    }
}
?>

<?php if ($errors): ?>
    <ul style="color: red;">
        <?php foreach ($errors as $error) echo "<li>$error</li>"; ?>
    </ul>
<?php endif; ?>

<form method="post">
    <label>Nom: <input type="text" name="nom" value="<?php echo $nom; ?>"></label><br>
    <label>Correu: <input type="email" name="correu" value="<?php echo $correu; ?>"></label><br>
    <label>Missatge: <textarea name="missatge"><?php echo $missatge; ?></textarea></label><br>
    <button type="submit">Enviar</button>
</form>
