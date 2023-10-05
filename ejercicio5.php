<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1</title>
</head>

<body>
    <?php
    $lado1 = rand(1, 12);
    echo "Primer lado: $lado1 <br>";
    $lado2 = rand(1, 12);
    echo "Segundo lado: $lado2 <br>";

    $area = $lado1 * $lado2;
    $perimetro = 2 * ($lado1 + $lado2);

    echo "El área del rectángulo es: $area <br>";
    echo "El perímetro del rectángulo es: $perimetro <br>";
    ?>
</body>

</html>