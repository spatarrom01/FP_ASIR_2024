<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 9</title>
</head>


<header>
        <h1>Ejercicio 9</h1>
</header>


<body>
<?php
    $numero = 3;
    echo "TABLA DE MULTIPLICAR DEL $numero <br><br>";
    for ($i = 1; $i <= 10; $i++) {
    echo "$numero * $i = " . ($numero * $i) . "<br>";
    }
?>
</body>