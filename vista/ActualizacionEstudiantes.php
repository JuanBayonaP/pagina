<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualización de estudiantes</title>
</head>
<body>
    <h1>Actualización de estudiantes</h1>
    <?php Include("../controlador/ActualizarEstudiante.php");?>
    <form action="ActualizacionEstudiantes.php" method="post">
        <input type="hidden" id="CodigoActual" name="CodigoActual" value="<?php echo $_GET["CodigoEstudiante"];?>">
        <label for="">Codigo de estudiante</label>
        <input type="number"name="CodigoEstudiante"
        id="CodigoEstudiante" value="<?php echo $Registro["CodigoEstudiante"]; ?>"><br>
        <label for="">Primer nombre de estudiante:</label>
        <input type="text"name="PrimerNombre"
        id="PrimerNombreestudiante" value="<?php echo $Registro["PrimerNombre"]; ?>"><br>
        <label for="" >Segundo nombre de estudiante:</label>
        <input type="text"name="SegundoNombre" id="SegundoNombre" value="<?php echo $Registro["SegundoNombre"]; ?>"><br>
        <label for="">Primer apellido de estudiante:</label>
        <input type="text"name="PrimerApellido"
        id="PrimerApellido"value="<?php echo $Registro["PrimerApellido"]; ?>"><br>
        <label for="">Segundo apellido de estudiante</label>
        <input type="text"name="SegundoApellido"
        id="SegundoApellido"value="<?php echo $Registro["SegundoApellido"]; ?>"><br>
        <label for="">Curso de estudiante</label>
        <input type="number"name="Curso"
        id="Curso"value="<?php echo $Registro["Curso"]; ?>"><br>
        <label for="">Especialidad de estudiante</label>
        <?php include ("../controlador/ComboEspecialidades.php"); ?>
        <br>
            <label for="ProyectoEstudiante">Proyecto</label>
            <?php include("../controlador/ComboProyectos.php"); ?>
            <br>
            

        <label for="">Fecha de Nacimiento de estudiante</label>
        <?php echo $Registro["FechaNacimiento"] ?>
        <input type="date"name="FechaNacimiento" id="FechaNacimiento"value="<?php echo $Registro["FechaNacimiento"] ?>"><br>
        <button type="submit">Actualizar Estudiante</button>
    </form>
</body>
</html>