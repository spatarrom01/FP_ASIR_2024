<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 7</title>
</head>


<header>
        <h1>Ejercicio 7</h1>
</header>


<h1>Mayúsculas o min</h1>
<br>
<?php

    $may = "esto va a ser en mayúsculas";
    $may = mb_convert_case($may, MB_CASE_UPPER, "UTF-8");

    $min = "ESTO VA A SER EN MINÚSCULAS";
    $min = mb_convert_case($min, MB_CASE_LOWER, "UTF-8");

    echo "$may <br>";
    echo "$min";

?>

</body>
</html>