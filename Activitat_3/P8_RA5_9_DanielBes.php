<?php
// Array amb les notes de l'alumne
$notes = [6, 7, 5, 8, 4];

// Calcular la mitjana
$sumatori = array_sum($notes); // Suma de totes les notes
$quantitatNotes = count($notes); // Nombre de notes
$mitjana = $sumatori / $quantitatNotes; // Càlcul de la mitjana

// Mostrar la mitjana i determinar si està aprovat
echo "La mitjana de les notes és: " . round($mitjana, 2) . "\n"; // Mostrem la mitjana arrodonida a 2 decimals

if ($mitjana >= 5) {
