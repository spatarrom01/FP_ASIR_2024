<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 26</title>
</head>


<header>
        <h1>Ejercicio 26</h1>
</header>


<body>
    <?php
        $empleado1 = 1400;
        $empleado2 = 1200;
        $empleado3 = 1050;

        $incremento1 = ($empleado1 * 13) / 100;
        $incremento2 = ($empleado2 * 26) / 100;
        $incremento3 = ($empleado3 * 39) / 100;

        $sueldo1 = $empleado1 + $incremento1;
        $sueldo2 = $empleado2 + $incremento2;
        $sueldo3 = $empleado3 + $incremento3;

        echo "Sueldo de empleado1: $empleado1. Incentivo: 13%. <br>";
        echo "Sueldo de empleado2: $empleado2. Incentivo: 26%. <br>";
        echo "Sueldo de empleado3: $empleado3. Incentivo: 39%. <br><br>";

        echo "Incremento de empleado1: $incremento1. <br>";
        echo "Incremento de empleado2: $incremento2. <br>";
        echo "Incremento de empleado3: $incremento3. <br><br>";

        echo "Sueldo final de empleado1: $sueldo1. <br>";
        echo "Sueldo final de empleado1: $sueldo2. <br>";
        echo "Sueldo final de empleado1: $sueldo3.";

    ?>
</body>