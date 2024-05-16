<?php
    include("navegacion.php");
    echo "<h1>REGISTRAR PROYECTOS</h1>";
    Include("../controlador/RegistrarProyecto.php");
    echo '
    <form action="RegistroProyectos.php" method="post">
        <label for="">Codigo de Proyecto:</label>
        <input type="number"name="Codigo"id="Codigo"><br>
        <label for="" >Nombre de Proyecto:</label>
        <input type="text"name="NombreProyecto"id="NombreProyecto"><br>
        <label for="">Resumen:</label>
        <textarea name="Resumen"id="Resumen" rows="5" cols="20"></textarea><br>
        <label for="">Fecha de Resgistro</label>
        <input type="date"name="FechaRegistro"id="FechaRegistro"><br>
        <button type="submit">Registrar Proyecto</button>
    </form>';

    include("Footer.php");
    
?>