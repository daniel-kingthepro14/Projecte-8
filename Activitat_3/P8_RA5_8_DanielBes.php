<?php
// Funció per calcular el factorial d'un número
function factorial($n) {
    // Comprovem que el número sigui positiu
    if ($n < 0) {
        return "Error: El número ha de ser positiu.";
    }

    $resultat = 1;
    
    // Bucle per calcular el factorial
    for ($i = 1; $i <= $n; $i++) {
        $resultat *= $i; // Multipliquem el resultat per cada número fins al n
    }

    return $resultat;
}

// Exemple d'ús de la funció
$numero = 5; // El número pel qual volem calcular el factorial
echo "El factorial de $numero és: " . factorial($numero) . "\n";
?>
