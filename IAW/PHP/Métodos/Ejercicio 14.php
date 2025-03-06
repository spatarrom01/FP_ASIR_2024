<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 14</title>
</head>


<header>
        <h1>Ejercicio 14</h1>
</header>


<h1>Separar palabas de cadena</h1>
<br>
<?php

$cadena = "Hola buenos dias a todos.";
$sep = explode(" ",$cadena);

echo "Cadena original: $cadena <br><br>";
echo $sep[0] . "<br>";
echo $sep[1] . "<br>";
echo $sep[2] . "<br>";
echo $sep[3] . "<br>";
echo $sep[4] . "<br>";
?>

</body>
</html>