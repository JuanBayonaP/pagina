<?php
include("bd.php");

$Consulta="select * from proyecto";

$Resultado=False;
 try{
    $Resultado =mysqli_query($Conexion,$Consulta);
    }
    catch(Exception $e)
       {$Mensaje="No se pudo consultar los proyectos";
        //$error=$e->getMessage();
        print $e->getMessage();
        //print $Resultado;
       }
 
 if($Resultado == false ) {$Mensaje="No se pudo registrar el proyecto";
               //die($mysqli_error($Conexion));
            }
 else{ 
    echo'<table border="1">
    <tr>
        <td>Codigo de proyecto</td>
        <td>Nombre del proyecto</td>
        <td>Resumen</td>
        <td>Fecha de registro</td>
        <td colspan="2">Acciones</td>
    </tr>';
    while($Registro=$Resultado->fetch_assoc()){
       echo'
       <tr>
           <td>'.$Registro["CodigoProyecto"].'</td>
           <td>'.$Registro["NombreProyecto"].'</td>
           <td>'.$Registro["Resumen"].'</td>
           <td>'.$Registro["FechaRegistro"].'</td>
           <td>Editar</td>
           <td>Eliminar</td>
       </tr>'; 
    } // Fin del ciclo del listado de proyectos
    echo '</table>';
 }




?>