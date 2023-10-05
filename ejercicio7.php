<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1</title>
</head>

<body>
    <?php
    $diaSemana = [
        "Lunes",
        "Martes",
        "Miércoles",
        "Jueves",
        "Viernes",
        "Sábado",
        "Domingo"
    ];
    $busqueda = "Miércoles";
    $posicion = array_search($busqueda, $diaSemana);
    echo $posicion . "<br>";
    $diaSemana[2] = "Junio";
    echo $diaSemana[2];
    ?>
</body>

</html>