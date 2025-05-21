<?php
// Funció per calcular el preu amb l'IVA aplicat
function calcularIVA($preu, $percentatgeIVA) {
    $IVA = ($preu * $percentatgeIVA) / 100; // Calculem l'IVA
    return $preu + $IVA; // Retornem el preu amb l'IVA
}

// Exemple d'ús de la funció
$preu = 100; // Preu sense IVA
$percentatgeIVA = 21; // Percentatge d'IVA (per exemple, 21%)

$preuAmbIVA = calcularIVA($preu, $percentatgeIVA);

echo "El preu amb un IVA de $percentatgeIVA% és: $preuAmbIVA\n";
?>
