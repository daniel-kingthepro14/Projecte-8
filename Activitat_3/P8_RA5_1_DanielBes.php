<?php

<?php
// Demanem l'edat de la persona
echo "Quina edat tens? ";
$edat = trim(fgets(STDIN));

// Comprovem si és major d'edat o no
if ($edat >= 18) {
    echo "Ets major d'edat.\n";
} else {
    echo "No eres major d'edat.\n";
}
?>


?>