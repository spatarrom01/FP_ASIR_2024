<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 10</title>
</head>


<header>
        <h1>Ejercicio 10</h1>
</header>


<h1>Longitud de cadena</h1>
<br>
<?php

$frase  = "Hola mundo.";
$palabra = array("Hola");
$reemplazo = array("Adios");

$newphrase = str_replace($palabra, $reemplazo,$frase);

echo "Frase original: $frase <br>";
echo "Frase reemplazada: $newphrase";
?>

</body>
</html>