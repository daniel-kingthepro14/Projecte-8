<?php
$usuaris = [
    ["nom" => "Joan", "correu" => "joan@example.com", "edat" => 20],
    ["nom" => "Maria", "correu" => "maria@example.com", "edat" => 17],
    ["nom" => "Pere", "correu" => "pere@example.com", "edat" => 22]
];

function majorDEdat($edat) { return $edat >= 18 ? 'Sí' : 'No'; }
?>

<!DOCTYPE html>
<html>
<head><title>Usuaris</title></head>
<body>
    <table border="1">
        <tr><th>Nom</th><th>Correu</th><th>Edat</th><th>Major d'edat?</th></tr>
        <?php foreach ($usuaris as $u): ?>
            <tr><td><?= $u['nom'] ?></td><td><?= $u['correu'] ?></td><td><?= $u['edat'] ?></td><td><?= majorDEdat($u['edat']) ?></td></tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
