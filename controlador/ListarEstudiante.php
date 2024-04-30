<?php
include("bd.php");

$Consulta="select * from estudiante";

$Resultado=False;
 try{
    $Resultado =mysqli_query($Conexion,$Consulta);
    }
    catch(Exception $e)
       {$Mensaje="No se pudo consultar los datos";
        //$error=$e->getMessage();
        print $e->getMessage();
        //print $Resultado;
       }
 
 if($Resultado == false ) {$Mensaje="No se pudo registrar el estudiante";
               //die($mysqli_error($Conexion));
            }
 else{ 
    echo'<table border="1">
    <tr>
        <td>CodigoEstudiante</td>
        <td>PrimerNombre</td>
        <td>SegundoNombre</td>
        <td>PrimerApellido</td>
        <td>SegundoApellido</td>
        <td>Curso</td>
        <td>Especialidad</td>
        <td>CodigoProyecto</td>
        <td>FechaNacimiento</td>
        <td colspan="2">Acciones</td>
    </tr>';
    while($Registro=$Resultado->fetch_assoc()){
       echo'
       <tr>
           <td>'.$Registro["CodigoEstudiante"].'</td>
           <td>'.$Registro["PrimerNombre"].'</td>
           <td>'.$Registro["SegundoNombre"].'</td>
           <td>'.$Registro["PrimerApellido"].'</td>
           <td>'.$Registro["SegundoApellido"].'</td>
           <td>'.$Registro["Curso"].'</td>
           <td>';
           include("NombreEspecialidad.php");
           echo '</td>
           <td>';
           include("NombreProyecto.php");
           echo '</td>
           <td>'.$Registro["FechaNacimiento"].'</td>
           <td><a href="ActualizacionEstudiantes.php?CodigoEstudiante='.$Registro["CodigoEstudiante"].'">Editar</td>
           <td><a href="Estudiantes.php?CodigoEstudiante='.$Registro["CodigoEstudiante"].'">Eliminar</a></td>
       </tr>'; 
    } // Fin del ciclo del listado de proyectos
    echo '</table>';
 }
?>