<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 17</title>
</head>


<header>
        <h1>Ejercicio 17</h1>
</header>


<h1>Máximo o mínimo</h1>
<form action="" method="GET">

        <label for="num1">Número 1:</label>
        <input type="number" name="num1" id="num1"><br>

        <label for="num2">Número 2:</label>
        <input type="number" name="num2" id="num2"><br>

        <label for="num3">Número 3:</label>
        <input type="number" name="num3" id="num3"><br>

        <input type="submit" value="Calcular"><br>
    </form>
<br>
<?php

    $num1 = $_GET['num1'] ?? 0;
    $num2 = $_GET['num2'] ?? 0;
    $num3 = $_GET['num3'] ?? 0;

    $max = max($num1,$num2,$num3);
    $min = min($num1,$num2,$num3);

    echo "El máximo es $max <br>";
    echo "El mínimo es $min";

?>

</body>
</html>