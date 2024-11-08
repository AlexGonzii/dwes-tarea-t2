<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include_once('clases/Miembro.php');
    include_once('clases/Alumno.php');
    include_once('clases/Profesor.php');
    include_once('clases/Asignatura.php');

    $alumnos = Alumno::crearAlumnosDeMuestra();
    $asignaturas = Asignatura::crearAsignaturasDeMuestra();
    $profesores = Profesor::crearProfesoresDeMuestra();
    
    $alumnos[0]->matricularEnAsignatura($asignaturas[0]);
    $alumnos[1]->matricularEnAsignatura($asignaturas[0]);
    $alumnos[1]->matricularEnAsignatura($asignaturas[1]);
    $alumnos[2]->matricularEnAsignatura($asignaturas[0]);
    $alumnos[2]->matricularEnAsignatura($asignaturas[2]);
    $alumnos[3]->matricularEnAsignatura($asignaturas[0]);
    $alumnos[4]->matricularEnAsignatura($asignaturas[0]);
    $alumnos[4]->matricularEnAsignatura($asignaturas[1]);
    $alumnos[4]->matricularEnAsignatura($asignaturas[2]);
    $alumnos[5]->matricularEnAsignatura($asignaturas[0]);
    $alumnos[6]->matricularEnAsignatura($asignaturas[1]);
    $alumnos[6]->matricularEnAsignatura($asignaturas[1]);
    $alumnos[7]->matricularEnAsignatura($asignaturas[2]);
    $alumnos[8]->matricularEnAsignatura($asignaturas[1]);
    $alumnos[9]->matricularEnAsignatura($asignaturas[0]);
?>
<h2>Alumnos</h2>
<ul>
<?php foreach($alumnos as $alumno): ?>
    <li><?= $alumno ?></li>
    <?php endforeach; ?>
</ul>
<h2>Profesores</h2>
<ul>
<?php foreach($profesores as $profesor): ?>
    <li><?= $profesor ?></li>
    <?php endforeach; ?>
</ul>
<h2>Asignaturas</h2>
<ul>
<?php foreach($asignaturas as $asignatura): ?>
    <li><?= $asignatura ?></li>
    <?php endforeach; ?>
</ul>
<h2>Alumnos <= 23</h2>
<?php $filtrarEdad = array_filter($alumnos,function($alumno){
    return $alumno->getEdad() <= 23;
});?>
<ul>
<?php foreach($filtrarEdad as $alumno): ?>
    <li><?= $alumno ?></li>
    <?php endforeach; ?>
</ul>
<h2>Alumnos con al menos dos asignaturas</h2>
<?php $filtrarAsig = array_filter($alumnos,function($alumno){
    return count($alumno->getAsignaturas()) >= 2;
});?>
<ul>
<?php foreach($filtrarAsig as $alumno): ?>
    <li><?= $alumno ?></li>
    <?php endforeach; ?>
</ul>
<h2>Asignaturas con algún alumno matriculado</h2>
<?php $asignaturasConAlumnos = array_filter($asignaturas, function($asignatura) use ($alumnos) {
    foreach ($alumnos as $alumno) {
        if (in_array($asignatura, $alumno->getAsignaturas())) {
            return true;
        }
    }
    return false;
});?>
<ul>
<?php foreach ($asignaturasConAlumnos as $asignatura): ?>
    <li><?= $asignatura ?></li>
    <?php endforeach; ?>
</ul>
</body>
</html>