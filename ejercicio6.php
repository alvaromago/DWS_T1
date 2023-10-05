<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1</title>
</head>

<body>
    <?php
    $andalucia1 = array(
        "Sevilla",
        "Málaga",
        "Cádiz",
        "Almería",
        "Huelva",
        "Granada",
        "Jaén"
    );
    for ($i = 0; $i < count($andalucia1); $i++) {
        echo $andalucia1[$i] . "<br>";
    }
    $andalucia2 = [
        "Sevilla",
        "Málaga",
        "Cádiz",
        "Almería",
        "Huelva",
        "Granada",
        "Jaén"
    ];
    for ($i = 0; $i < count($andalucia2); $i++) {
        echo $andalucia1[$i] . "<br>";
    }
    $andalucia3[] = "Sevilla";
    $andalucia3[] = "Málaga";
    $andalucia3[] = "Cádiz";
    $andalucia3[] = "Almería";
    $andalucia3[] = "Huelva";
    $andalucia3[] = "Granada";
    $andalucia3[] = "Jaén";
    for ($i = 0; $i < count($andalucia3); $i++) {
        echo $andalucia1[$i] . "<br>";
    }
    ?>
</body>

</html>