<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"] ?? '';
    $correu = $_POST["correu"] ?? '';
    $missatge = $_POST["missatge"] ?? '';
    $errors = [];

    if (!$nom) $errors[] = "El camp 'Nom' és obligatori.";
    if (!$correu) $errors[] = "El camp 'Correu electrònic' és obligatori.";
    if (!$missatge) $errors[] = "El camp 'Missatge' és obligatori.";

    if (empty($errors)) {
        echo "<h1>Formulari enviat amb èxit!</h1>";
        echo "<p><strong>Nom:</strong> $nom</p><p><strong>Correu electrònic:</strong> $correu</p><p><strong>Missatge:</strong> $missatge</p>";
    }
}
?>

<?php if (!empty($errors)): ?>
    <ul style="color: red;">
        <?php foreach ($errors as $error): ?>
            <li><?php echo $error; ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<form method="post">
    <label>Nom: <input type="text" name="nom" value="<?php echo $nom; ?>"></label><br>
    <label>Correu electrònic: <input type="email"
