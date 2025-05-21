<?php

<?php
// Demanem el número a l'usuari
echo "Introdueix un número: ";
$numero = trim(fgets(STDIN));

// Comprovem si és parell o senar
if ($numero % 2 == 0) {
    echo "El número $numero és parell.\n";
} else {
    echo "El número $numero és senar.\n";
}
?>


?>