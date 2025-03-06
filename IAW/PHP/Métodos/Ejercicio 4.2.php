<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 4.2</title>
</head>


<header>
        <h1>Ejercicio 4.2</h1>
</header>


<h1>Calculadora simple</h1>
        <form action="" method="GET">
        <label for="n1">Número 1:</label>
        <input type="decimal" name="n1" id="n1" required><br><br>

        <label for="n2">Número 2:</label>
        <input type="decimal" name="n2" id="n2" required><br><br>

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

    function operacion($n1, $n2, $op) {
        switch ($op) {
            case "Sumar": 
                return $n1 + $n2;
            break;

            case "Restar":
                return $n1 - $n2;
            break;

            case "Multiplicar": 
                return $n1 * $n2;
            break;

            case "Dividir":
                if ($n2 !=0) {
                    return $n1 / $n2;
                } else {
                    echo "La operación no es válida.";
                }
                
            break;
        }
    }

    $resultado = operacion($n1, $n2, $op);

    echo "El resultado es $resultado";

    ?>

    </body>
    </html>