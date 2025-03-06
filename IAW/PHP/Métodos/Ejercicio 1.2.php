<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1.2</title>
</head>


<header>
        <h1>Ejercicio 1.2</h1>
</header>


<h1>Suma de dos números</h1>
<form action="" method="GET">

        <label for="num">Número 1:</label>
        <input type="decimal" name="num1" id="num1"><br><br>

        <label for="num">Número 2:</label>
        <input type="decimal" name="num2" id="num2"><br><br>

        <input type="submit" value="Calcular"><br>
    </form>
<br>
<?php

    $num1 = $_GET['num1'] ?? 0;
    $num2 = $_GET['num2'] ?? 0;

    function suma($num1, $num2) {
        return $num1 + $num2;
    }

    echo "El resultado es ". suma($num1,$num2);


?>

</body>
</html>