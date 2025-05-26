<?php
# Es crea una sessio i es conecta a la BBDD
session_start();
include 'connectar.php';

$email = $_POST['email'];
$contrasenya = $_POST['contrasenya'];

$stmt = $conn->prepare("SELECT id, nom, contrasenya FROM usuaris WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$resultat = $stmt->get_result();

if ($resultat->num_rows === 1) {
    $usuari = $resultat->fetch_assoc();

    if (password_verify($contrasenya, $usuari['contrasenya'])) {
        $_SESSION['usuari_id'] = $usuari['id'];
        $_SESSION['usuari_nom'] = $usuari['nom'];
        header("Location: zona_protegida.php");
        exit;
    } else {
        echo "Contrasenya incorrecta.";
    }
} else {
    echo "Usuari no trobat.";
}
?>
