<?php
$_nombre = $_POST['nombre'];

$sumando1 = $_GET['sumando1'];
$sumando2 = $_GET['sumando2'];
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Formularios en PHP</title>
</head>

<body>
    <h1>Valoración del formulario</h1>

    <p>El nombre introducido es: <?php echo $_nombre; ?></p>
    <p><a href="./formulario.html">Volver al formulario</a></p>
    <hr>
    <p>La suma de <?php echo $sumando1; ?> y <?php echo $sumando2; ?> es: <?php echo sumar($sumando1, $sumando2) ?></p>
</body>

</html>

<?php
function sumar($a, $b)
{
    return $a + $b;
}
?>