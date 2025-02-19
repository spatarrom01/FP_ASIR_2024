<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 12</title>
</head>


<header>
        <h1>Ejercicio 12</h1>
</header>


<h1>Cadena aleatoria</h1>
<br>
<?php

$cadena = "123456789ABC";
$random = str_shuffle($cadena);

echo "Cadena original: $cadena <br>";
echo "Cadena aleatoria: $random";
?>

</body>
</html>