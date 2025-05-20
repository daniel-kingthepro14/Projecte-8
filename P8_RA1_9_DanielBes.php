<?php

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taula de Presentació</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>

    <h2>Taula de Presentació</h2>

    <table>
        <tr>
            <td>Nom:</td>
            <td><?php echo "Joan"; ?></td>
        </tr>
        <tr>
            <td>Edat:</td>
            <td><?php echo "25"; ?></td>
        </tr>
        <tr>
            <td>Ciutat:</td>
            <td><?php echo "Barcelona"; ?></td>
        </tr>
    </table>

</body>
</html>


?>