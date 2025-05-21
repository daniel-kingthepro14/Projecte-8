<?php
// Inicialització de les variables
$nom = $email = $assumpte = $missatge = "";
$errors = [];

// Validació i processament del formulari
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtenir valors dels camps
    $nom = $_POST["nom"] ?? '';
    $email = $_POST["email"] ?? '';
    $assumpte = $_POST["assumpte"] ?? '';
    $missatge = $_POST["missatge"] ?? '';

    // Validar que els camps no estiguin buits
    if (empty($nom)) $errors[] = "El camp 'Nom' és obligatori.";
    if (empty($email)) $errors[] = "El camp 'Correu electrònic' és obligatori.";
    if (empty($assumpte)) $errors[] = "El camp 'Assumpte' és obligatori.";
    if (empty($missatge)) $errors[] = "El camp 'Missatge' és obligatori.";

    // Validar el correu electrònic
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "El correu electrònic no és vàlid.";
    }

    // Si no hi ha errors, mostrar la confirmació
    if (empty($errors)) {
        // Mostrar confirmació
        echo "<h2>Formulari enviat amb èxit!</h2>";
        echo "<p><strong>Nom:</strong> $nom</p>";
        echo "<p><strong>Correu electrònic:</strong> $email</p>";
        echo "<p><strong>Assumpte:</strong> $assumpte</p>";
        echo "<p><strong>Missatge:</strong> $missatge</p>";
        exit; // Finalitzar aquí per evitar que el formulari es mostri després de la confirmació
    }
}
?>

<!-- Mostrar errors -->
<?php if ($errors): ?>
    <ul style="color: red;">
        <?php foreach ($errors as $error) echo "<li>$error</li>"; ?>
    </ul>
<?php endif; ?>

<!-- Formulari -->
<form method="post">
    <label for="nom">Nom:</label>
    <input type="text" id="nom" name="nom" value="<?php echo htmlspecialchars($nom); ?>"><br><br>

    <label for="email">Correu electrònic:</label>
    <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>"><br><br>

    <label for="assumpte">Assumpte:</label>
    <input type="text" id="assumpte" name="assumpte" value="<?php echo htmlspecialchars($assumpte); ?>"><br><br>

    <label for="missatge">Missatge:</label><br>
    <textarea id="missatge" name="missatge" rows="4" cols="50"><?php echo htmlspecialchars($missatge); ?></textarea><br><br>

    <button type="submit">Enviar</button>
</form>
