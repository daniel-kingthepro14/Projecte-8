<?php

<?php
    // Definir el nom i la imatge
    $nom = "Joan Pérez";
    $imatge_url = "https://www.example.com/imatge.jpg";  // Substitueix amb la teva URL d'imatge
    $data_actual = date("d/m/Y");  // Obtindrà la data actual
    $missatge_benvinguda = "Benvingut a la teva targeta personal!";
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Targeta Personal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .targeta {
            background-color: white;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 300px;
        }
        .targeta img {
            width: 100%;
            border-radius: 50%;
        }
        .nom {
            font-size: 24px;
            font-weight: bold;
            margin: 10px 0;
        }
        .data, .missatge {
            font-size: 16px;
            color: #555;
        }
        .missatge {
            margin-top: 20px;
            font-style: italic;
        }
    </style>
</head>
<body>

    <div class="targeta">
        <!-- Imatge de perfil -->
        <img src="<?php echo $imatge_url; ?>" alt="Imatge de Perfil">

        <!-- Nom -->
        <div class="nom"><?php echo $nom; ?></div>

        <!-- Data actual -->
        <div class="data">Data actual: <?php echo $data_actual; ?></div>

        <!-- Missatge personalitzat -->
        <div class="missatge"><?php echo $missatge_benvinguda; ?></div>
    </div>

</body>
</html>


?>