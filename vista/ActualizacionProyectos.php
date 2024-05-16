<?php
    include("navegacion.php");
    echo "<h1>ACTUALIZAR PROYECTOS</h1>";
    Include("../controlador/ActualizarProyecto.php");
    echo'<form action="ActualizacionProyectos.php" method="post">
        <input type="hidden" id="CodigoActual" name="CodigoActual" value="'.$_GET["CodigoProyecto"].'">
        <label for="">Codigo de proyecto</label>
        <input type="number"name="CodigoProyecto"
        id="CodigoProyecto" value="'. $Registro["CodigoProyecto"].'"><br>
        <label for="">Nombre del proyecto</label>
        <input type="text"name="NombreProyecto"
        id="NombreProyecto" value="'. $Registro["NombreProyecto"].'"><br>
        <label for="" >Resumen del proyecto</label>
        <input type="text"name="Resumen" id="Resumen" value="'. $Registro["Resumen"].'"><br>
        <label for="">Fecha</label>
        <input type="text"name="FechaRegistro"
        id="FechaRegistro"value="'. $Registro["FechaRegistro"].'"><br>   
        <button type="submit">Actualizar proyecto</button>
    </form>';
?>