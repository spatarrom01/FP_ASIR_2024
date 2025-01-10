<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 30</title>
</head>


<header>
        <h1>Ejercicio 30</h1>
</header>


<body>
    <?php
        $sueldohora = 12;
        $horas = 52;
        $horasminimas = 40;
        $horasextras = ($horas - $horasminimas) * ($sueldohora * 1.5);
        $sueldo = ($horasminimas * $sueldohora) + $horasextras;
        
        echo "Sueldo por hora: $sueldohora € <br>";
        echo "Horas realizadas: $horas <br>";
        echo "Horas mínimas: $horasminimas <br>";
        echo "Sueldo de horas extra: $horasextras € <br>";
        echo "Sueldo final: $sueldo €";
    ?>
</body>