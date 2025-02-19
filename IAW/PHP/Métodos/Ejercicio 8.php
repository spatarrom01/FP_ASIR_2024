<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 8</title>
</head>


<header>
        <h1>Ejercicio 8</h1>
</header>


<h1>Longitud de cadena</h1>
<br>
<?php

    $cadena = "Esto es una cadena de prueba.";
    $longitud = mb_strlen($cadena);

    echo "Cadena: $cadena <br>";
    echo "La longitud de la cadena es $longitud";

?>

</body>
</html>