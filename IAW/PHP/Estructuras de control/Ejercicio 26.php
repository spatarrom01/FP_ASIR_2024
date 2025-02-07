<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 26</title>
</head>


<header>
        <h1>Ejercicio 26</h1>
</header>


<h1>Calculadora simple</h1>
        <form action="" method="GET">
        <label for="n1">Número 1:</label>
        <input type="number" name="n1" id="n1" required><br><br>

        <label for="n2">Número 2:</label>
        <input type="number" name="n2" id="n2" required><br><br>

        <label for="op">Elige la operación:</label>
        <select name="op" id="op">
            <option value="Sumar">Sumar</option>
            <option value="Restar">Restar</option>
            <option value="Multiplicar">Multiplicar</option>
            <option value="Dividir">Dividir</option>
        </select>

        <input type="submit" value="Calcular"><br>
    </form>

<br>

<?php

    $n1 = $_GET['n1'] ?? 0;
    $n2 = $_GET['n2'] ?? 0;
    $op = $_GET['op'] ?? 0;


    switch ($op) {
        case "Sumar": 
            $suma = $n1 + $n2;
            echo "El resultado es $suma";
        break;

        case "Restar":
            $resta = $n1 - $n2;
            echo "El resultado es $resta";
        break;

        case "Multiplicar": 
            $mult = $n1 * $n2;
            echo "El resultado es $mult";
        break;

        case "Dividir":
            if ($n2 !=0) {
                $div = $n1 / $n2;
                echo "El resultado es $div";
            } else {
                echo "La operación no es válida.";
            }
            
        break;
    }

    ?>

    </body>
    </html>