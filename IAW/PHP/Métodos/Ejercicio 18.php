<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 18</title>
</head>


<header>
        <h1>Ejercicio 18</h1>
</header>


<h1>Redondeo hacia abajo</h1>
<form action="" method="GET">

        <label for="num">Número:</label>
        <input type="decimal" name="num" id="num"><br><br>

        <input type="submit" value="Calcular"><br>
    </form>
<br>
<?php

    $num = $_GET['num'] ?? 0;
    $redondeo = floor($num);

    echo "El redondeo es $redondeo";

?>

</body>
</html>