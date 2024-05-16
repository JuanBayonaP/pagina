<?php
    include("navegacion.php");
    echo "<h1>ACTUALIZAR ESTUDIANTES<h1>";
     Include("../controlador/ActualizarEstudiante.php"); 
    echo'<form action="ActualizacionEstudiantes.php" method="post">
        <input type="hidden" id="CodigoActual" name="CodigoActual" value="'.$_GET["CodigoEstudiante"].'">
        <label for="">Codigo de estudiante</label>
        <input type="number"name="CodigoEstudiante"
        id="CodigoEstudiante" value="'.$Registro["CodigoEstudiante"].'"><br>
        <label for="">Primer nombre de estudiante:</label>
        <input type="text"name="PrimerNombre"
        id="PrimerNombreestudiante" value="'. $Registro["PrimerNombre"].'"><br>
        <label for="" >Segundo nombre de estudiante:</label>
        <input type="text"name="SegundoNombre" id="SegundoNombre" value="'.$Registro["SegundoNombre"].'"><br>
        <label for="">Primer apellido de estudiante:</label>
        <input type="text"name="PrimerApellido"
        id="PrimerApellido"value="'. $Registro["PrimerApellido"].'"><br>
        <label for="">Segundo apellido de estudiante</label>
        <input type="text"name="SegundoApellido"
        id="SegundoApellido"value="'. $Registro["SegundoApellido"].'"><br>
        <label for="">Curso de estudiante</label>
        <input type="number"name="Curso"
        id="Curso"value="'. $Registro["Curso"].'"><br>
        <label for="">Especialidad de estudiante</label>';
        include ("../controlador/ComboEspecialidades.php");
        echo '
        <br>
            <label for="ProyectoEstudiante">Proyecto</label>';
            include("../controlador/ComboProyectos.php");
            echo '
            <br>
            

        <label for="">Fecha de Nacimiento de estudiante</label>
        '. $Registro["FechaNacimiento"].'
        <input type="date"name="FechaNacimiento" id="FechaNacimiento"value="'. $Registro["FechaNacimiento"].'"><br>
        <button type="submit">Actualizar Estudiante</button>
    </form>';
    include("Footer.php");
    ?>
