<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 5.2</title>
</head>


<header>
        <h1>Ejercicio 5.2</h1>
</header>


<h1>Conversión de monedas</h1>
        <form action="" method="GET">
        <label for="euros">Cantidad:</label>
        <input type="decimal" name="dinero" id="dinero" required><br><br>

        <label for="moneda">Elige la moneda:</label>
        <select name="moneda" id="moneda">
            <option value="libra">Libra</option>
            <option value="dolar">Dolar</option>
            <option value="yenes">Yenes</option>
        </select>

        <input type="submit" value="Calcular"><br>
    </form>

<br>

<?php

    $dinero = $_GET['dinero'] ?? 0;
    $moneda = $_GET['moneda'] ?? 0;

    function conversionMoneda($dinero, $moneda) {
        switch ($moneda) {
            case "libra": 
                return $dinero * 1.22;
            break;

            case "dolar":
                return $dinero * 0.75;
            break;

            case "yenes": 
                return $dinero * 0.009;
            break;
        }
    }

    $resultado = conversionMoneda($dinero, $moneda);

    echo "El resultado son $resultado euros";

    ?>

    </body>
    </html>