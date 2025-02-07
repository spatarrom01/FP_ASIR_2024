<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 24</title>
</head>


<header>
        <h1>Ejercicio 24</h1>
</header>


<h1>Ingresa un número:</h1>
        <form action="" method="GET">
        <label for="num">Número:</label>
        <input type="number" name="num" id="num" required><br><br>

        <input type="submit" value="Calcular"><br>
    </form>

<br>

<?php

    $num = $_GET['num'] ?? 0;

    switch ($num) {
        case 1: echo "Lunes";
        break;

        case 2: echo "Martes";
        break;

        case 3: echo "Miércoles";
        break;

        case 4: echo "Jueves";
        break;

        case 5: echo "Viernes";
        break;

        case 6: echo "Sábado";
        break;
        
        case 7: echo "Domingo";
        break;

        case 8: echo "Ya no hay más dias";
        break;

        case 9: echo "que ya no hay más";
        break;

        case 10: echo "estas bien??";
        break;

        case 11: echo "necesitas ayuda??";
        break;

        case 12: echo "todo bien en casa??";
        break;

        case 13: echo "pero tu eres tonto??";
        break;

        case 14: echo "<a href='https://www.lopezibor.com/servicios/hospitalizacion/';>Servicio de Hospitalización Psiquiátrica Madrid</a>";
        break;


    }


    ?>

    </body>
    </html>