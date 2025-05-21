<?php
// Crear un array associatiu amb noms i edats
$alumnes = [
    "Joan" => 20,
    "Maria" => 17,
    "Pere" => 19,
    "Anna" => 15,
    "David" => 22
];

// Bucle per mostrar els alumnes amb edat >= 18
foreach ($alumnes as $nom => $edat) {
    if ($edat >= 18) {
        echo "$nom té $edat anys.\n";
    }
}
?>
