<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$libros = [
    "libro1" => [
        "titulo" => "PHP para Principiantes",
        "autor" => "Carlos Ruiz",
        "precio" => 19.99,
        "categoria" => "Desarrollo web"
    ],
    "libro2" => [
        "titulo" => "JavaScript Avanzado",
        "autor" => "Laura García",
        "precio" => 25.99,
        "categoria" => "Desarrollo web"
    ],
    "libro3" => [
        "titulo" => "Algoritmos en Python",
        "autor" => "Miguel Fernández",
        "precio" => 29.99,
        "categoria" => "Algoritmos"
    ]
];
$filtrarLibros = array_filter($libros,function($libro){
    return $libro['categoria'] == "Desarrollo web";
});?>

<h2>Información de todos los libros</h2>
<table border="1">
    <tr>
        <th>Nombre</th>
        <th>Autor</th>
        <th>Precio</th>
        <th>Categoría</th>
    </tr>
    <?php foreach($libros as $libro) { ?>
        <tr>
        <td> <?= $libro['titulo'] ?> </td>
        <td> <?= $libro['autor'] ?> </td>
        <td> <?= $libro['precio'] ?> € </td>
        <td> <?= $libro['categoria'] ?> </td>
        </tr>
    <?php } ?>
</table>

<h2>Libros de la categoría 'Desarrollo web'</h2>
<ol>
<?php foreach($filtrarLibros as $libro1) { ?>
    <li> 
        <?= $libro1['titulo'] ?>
    </li>
    <?php } ?>
</ol>
</body>
</html>
