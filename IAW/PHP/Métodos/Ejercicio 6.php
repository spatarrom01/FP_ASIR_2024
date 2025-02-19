<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 6</title>
</head>


<header>
        <h1>Ejercicio 6</h1>
</header>


<h1>Variable nula o definida</h1>
<br>
<?php

    $var1 = "ola";
    $var2;

    if (isset($var1)) {
        echo "La variable 1 está definida. <br>";
    } else {
        echo "La variable 1 es nula. <br>";
    }

    if (isset($var2)) {
        echo "La variable 2 esta definida. <br>";
    } else {
        echo "La variable 2 es nula. <br>";
    }
?>

</body>
</html>