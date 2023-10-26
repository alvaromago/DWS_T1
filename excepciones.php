<?php
setcookie("asignatura", "DWS");
try {
    $a = 8;
    $b = 0;
    $resultado = dividir($a, $b);
    echo "El resultado de dividir $a entre $b es $resultado";
} catch (Exception $e) {
    echo "<p>Se ha producido una excepción. " . $e->getMessage() . "</p>";
    echo "<p>Línea: " . $e->getLine() . "</p>";
    echo "<p>Código: " . $e->getCode() . "</p>";
}

echo "<p>Y seguimos ejecutando...</p>";

function dividir($dividiendo, $divisor)
{
    if ($divisor == 0) {
        throw new Exception("No se puede dividir por 0");
    } else {
        return $dividiendo / $divisor;
    }
}
