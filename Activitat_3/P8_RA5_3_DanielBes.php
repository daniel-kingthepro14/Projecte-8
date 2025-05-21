<?php

<?php
// Demanem el número
echo "Introdueix un número entre l'1 i el 10: ";
$numero = trim(fgets(STDIN));

// Mostrar la taula de multiplicar si el número és vàlid
if ($numero >= 1 && $numero <= 10) {
    for ($i = 1; $i <= 10; $i++) {
        echo "$numero x $i = " . ($numero * $i) . "\n";
    }
} else {
    echo "Número no vàlid. Introdueix un número entre 1 i 10.\n";
}
?>


?>