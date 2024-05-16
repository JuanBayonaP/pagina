<?php
    include("navegacion.php");
    echo "<h1>ACTUALIZAR ESPECIALIDADES</h1>";
    Include("../controlador/ActualizarEspecialidad.php");
    echo'<form action="ActualizacionEspecialidades.php" method="post">
        <input type="hidden" id="CodigoActual" name="CodigoActual" value="'. $_GET["CodigoEspecialidad"].'">
        <label for="">Codigo de especialidad</label>
        <input type="number"name="CodigoEspecialidad"
        id="CodigoEspecialidad" value="'. $Registro["CodigoEspecialidad"].'"><br>
        <label for=""> Nombre de especialidad:</label>
        <input type="text"name="NombreEspecialidad"
        id="NombreEspecialidad" value="'. $Registro["NombreEspecialidad"].'"><br>
        
        <button type="submit">Actualizar Especialidad</button>
    </form>';
?>