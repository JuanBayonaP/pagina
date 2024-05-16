
<?php
    include("navegacion.php");
    echo "<h1>REGISTRAR ESTUDIANTES<h1>";
    Include("../controlador/RegistrarEstudiantes.php");
    echo'
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
        <label for="">Especialidad de estudiante</label>';
        include ("../controlador/ComboEspecialidades.php"); 
        echo' <br>
            <label for="ProyectoEstudiante">Proyecto</label>';
             include("../controlador/ComboProyectos.php"); 
        echo'    <br>
            

        <label for="">Fecha de Nacimiento de estudiante</label>
        <input type="date"name="FechaNacimiento"id="FechaNacimiento"><br>
        <button type="submit">Registrar Estudiante</button>
    </form>';

include("Footer.php");