<?php
include("profesor.php");

$profesor1 = new Profesor();
$profesor1->setNombre("Fernando");
$profesor1->setTelefono(("666666666"));
$profesor1->setEmail("frodriguez@grupostudium.com");
$profesor1->setDni("99999999G");
$profesor1->setAsignatura("DWS");
$profesor1->setSueldo(1000);

$profesor2 = new Profesor();
$profesor2->setNombre("Pablo");
$profesor2->setTelefono(("777777777"));
$profesor2->setEmail("pgonzalez@grupostudium.com");
$profesor2->setDni("11111111G");
$profesor2->setAsignatura("DIW");
$profesor2->setSueldo(900);

$array1 = $profesor1->getAtributos();
$array2 = $profesor2->getAtributos();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de herencia en PHP</title>
</head>

<body>
    <h1>Profesores</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>Dni</th>
                <th>Asignatura</th>
                <th>Sueldo</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <?php echo $array1['nombre']; ?>
                </td>
                <td>
                    <?php echo $array1['telefono']; ?>
                </td>
                <td>
                    <?php echo $array1['email']; ?>
                </td>
                <td>
                    <?php echo $array1['dni']; ?>
                </td>
                <td>
                    <?php echo $array1['asignatura']; ?>
                </td>
                <td>
                    <?php echo $array1['sueldo']; ?> €
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo $array2['nombre']; ?>
                </td>
                <td>
                    <?php echo $array2['telefono']; ?>
                </td>
                <td>
                    <?php echo $array2['email']; ?>
                </td>
                <td>
                    <?php echo $array2['dni']; ?>
                </td>
                <td>
                    <?php echo $array2['asignatura']; ?>
                </td>
                <td>
                    <?php echo $array2['sueldo']; ?> €
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>