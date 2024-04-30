<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Estudiantes</title>
</head>
<body>
    <h1>Registro de Estudiantes</h1>
    <?php Include("../controlador/RegistrarEstudiantes.php");?>
    <form action="RegistroEstudiante.php" method="post">
        <label for="">Codigo de estudiante</label>
        <input type="number"name="CodigoEstudiante"id="CodigoEstudiante"><br>
        <label for="">Primer nombre de estudiante:</label>
        <input type="text"name="PrimerNombreestudiante"id="PrimerNombreestudiante"><br>
        <label for="" >Segundo nombre de estudiante:</label>
        <input type="text"name="SegundoNombreestudiante"id="SegundoNombreestudiante"><br>
        <label for="">Primer apellido de estudiante:</label>
        <input type="text"name="PrimerApellidoestudiante"id="PrimerApellidoestudiante"><br>
        <label for="">Segundo apellido de estudiante</label>
        <input type="text"name="SegundoApellidoestudiante"id="SegundoApellidoestudiante"><br>
        <label for="">Curso de estudiante</label>
        <input type="number"name="Cursoestudiante"id="Cursoestudiante"><br>
        <label for="">Especialidad de estudiante</label>
        <?php include ("../controlador/ComboEspecialidades.php"); ?>
        <br>
            <label for="ProyectoEstudiante">Proyecto</label>
            <?php include("../controlador/ComboProyectos.php"); ?>
            <br>
            

        <label for="">Fecha de Nacimiento de estudiante</label>
        <input type="date"name="FechaNacimiento"id="FechaNacimiento"><br>
        <button type="submit">Registrar Estudiante</button>
    </form>
</body>
</html>