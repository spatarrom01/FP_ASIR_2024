<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 12</title>
</head>


<header>
        <h1>Ejercicio 12</h1>
</header>


<h1>Contar palabras de cadena</h1>
<br>
<?php

$cadena = "Hola, buenos dias a todos.";
$cont = str_word_count($cadena);

echo "Cadena original: $cadena <br>";
echo "La cadena tiene $cont palabras";
?>

</body>
</html>