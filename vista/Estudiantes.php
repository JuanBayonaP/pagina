<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Listado de Estudiante</h3>
    <a href="RegistroEstudiante.php">Registrar Estudiantes</a>
    <br>
    <?php
    include("../controlador/EliminarEstudiante.php");
    include("../controlador/ListarEstudiante.php");
    ?>
</body>
</html>