<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1</title>
</head>

<body>
    <?php
    $notas_dws = [
        'Alvaro' => 10,
        'Claudia' => 10,
        'Miguel' => 8,
        'Eva' => 7,
        'Lucia' => 3
    ];
    echo "Mis notas son: " . $notas_dws['Alvaro'] . "<br>";
    $suma = array_sum($notas_dws);
    $longitud = count($notas_dws);
    $media = $suma / $longitud;
    echo "La media es " . $media;
    ?>
</body>

</html>