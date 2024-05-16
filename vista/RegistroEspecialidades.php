<?php
    include("navegacion.php");
    echo "<h1>REGISTRAR ESPECIALIDADES</h1>";
     Include("../controlador/RegistrarEspecialidad.php");
    echo'
    
    <form action="RegistroEspecialidades.php" method="post">
        <label for="CodigoEspecialidad">Codigo de Especialidad</label>
        <input type="number"name="CodigoEspecialidad"id="CodigoEspecialidad"><br>
        <label for="NombreEspecialidad">Nombre de la Especialidad:</label>
        <input type="text"name="NombreEspecialidad"id="NombreEspecialidad"><br>
        <button type="submit">Registrar Especialidad</button>
    </form>';
    include("Footer.php");