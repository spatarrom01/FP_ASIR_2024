<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 25</title>
</head>


<header>
        <h1>Ejercicio 25</h1>
</header>


<h1>Ingresa un número de un solo dígito:</h1>
        <form action="" method="GET">
        <label for="num">Número:</label>
        <input type="number" name="num" id="num" required><br><br>

        <input type="submit" value="Calcular"><br>
    </form>

<br>

<?php

    $num = $_GET['num'] ?? 0;

    switch ($num) {
        case 1: echo "Corresponde a la letra A";
        break;

        case 2: echo "Corresponde a la letra B";
        break;

        case 3: echo "Corresponde a la letra C";
        break;

        case 4: echo "Corresponde a la letra D";
        break;

        case 5: echo "Corresponde a la letra E";
        break;

        case 6: echo "Corresponde a la letra F";
        break;
        
        case 7: echo "Corresponde a la letra G";
        break;

        case 8: echo "Corresponde a la letra H";
        break;

        case 9: echo "Corresponde a la letra I";
        break;

        default: echo "No has introducido un número de un solo dígito.";
        break;


    }


    ?>

    </body>
    </html>