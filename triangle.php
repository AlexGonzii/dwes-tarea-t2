<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Triángulo</title>
    <style>
        /* Establecer la fuente predeterminada como monospace */
        body {
            font-family: monospace;
        }
    </style>
</head>
<body>
<?php
        include ('clases/TriangleGenerator.php');
        $triangulo = generateTriangle(7);
        echo ($triangulo); 
?>
</body>
</html>