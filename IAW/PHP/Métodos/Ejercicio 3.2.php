<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3.2</title>
</head>


<header>
        <h1>Ejercicio 3.2</h1>
</header>


<h1>Potencia</h1>
<form action="" method="GET">
        <label for="num">Número 1:</label>
        <input type="number" name="num" id="num"><br><br>

        <label for="potencia">Potencia:</label>
        <input type="number" name="potencia" id="potencia"><br><br>

        <input type="submit" value="Calcular"><br>
    </form>
<br>
<?php

    $num = $_GET['num'] ?? 0;
    $potencia = $_GET['potencia'] ?? 0;

    function potencia($num, $potencia) {
        return pow($num, $potencia);
    }

    echo "El resultado es " . potencia($num, $potencia);

?>

</body>
</html>