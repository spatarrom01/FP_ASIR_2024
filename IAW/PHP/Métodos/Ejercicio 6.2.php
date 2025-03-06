<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 6.2</title>
</head>


<header>
        <h1>Ejercicio 6.2</h1>
</header>


<h1>Jornal diario</h1>
        <form action="" method="GET">
        <label for="horas">Número de horas:</label>
        <input type="decimal" name="horas" id="horas" required><br><br>

        <label for="turno">Elige el turno:</label>
        <select name="turno" id="turno">
            <option value="diurno">Diurno</option>
            <option value="nocturno">Nocturno</option>
            <option value="f.diurno">Festivo diurno</option>
            <option value="f.nocturno">Festivo nocturno</option>
        </select>

        <input type="submit" value="Calcular"><br>
    </form>

<br>

<?php

    $horas = $_GET['horas'] ?? 0;
    $turno = $_GET['turno'] ?? 0;

    function jornal($horas, $turno) {
        switch ($turno) {
            case "diurno": 
                return $horas * 10;
            break;

            case "nocturno":
                return $horas * 13.5;
            break;

            case "f.diurno": 
                return ($horas * 10) * 1.1;
            break;

            case "f.nocturno": 
                return ($horas * 13.5) * 1.15;
            break;
        }
    }

    $resultado = jornal($horas, $turno);

    echo "El resultado son $resultado euros";

?>

    </body>
    </html>