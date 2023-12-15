<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lanzamiento de Moneda</title>
</head>
<body>

<?php
// Función para simular el lanzamiento de una moneda
function lanzarMoneda() {
    // Generar un número aleatorio (0 o 1)
    $resultado = rand(0, 1);

    // Devolver 'cara' si el resultado es 0, 'cruz' si el resultado es 1
    return ($resultado === 0) ? 'cara' : 'cruz';
}

// Obtener el resultado del lanzamiento
$lanzamiento = lanzarMoneda();

// Mostrar la imagen correspondiente
echo "<h1>Resultado del lanzamiento: $lanzamiento</h1>";
echo "<img src='$lanzamiento.png' alt='$lanzamiento'>";
?>

</body>
</html>
