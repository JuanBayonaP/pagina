<?php
include("bd.php");

$Consulta="select * from especialidad";

$Resultado=False;
 try{
    $Resultado =mysqli_query($Conexion,$Consulta);
    }
    catch(Exception $e)
       {$Mensaje="No se pudo consultar las especialidades";
        //$error=$e->getMessage();
        print $e->getMessage();
        //print $Resultado;
       }
 
 if($Resultado == false ) {$Mensaje="No se pudo registrar la especialidad";
               //die($mysqli_error($Conexion));
            }
 else{ 
    echo'<table border="1">
    <tr>
        <td>CodigoEspecialidad</td>
        <td>NombreEspecialidad</td>
        <td colspan="2">Acciones</td>
    </tr>';
    while($Registro=$Resultado->fetch_assoc()){
       echo'
       <tr>
           <td>'.$Registro["CodigoEspecialidad"].'</td>
           <td>'.$Registro["NombreEspecialidad"].'</td>
           <td><a href="ActualizacionEspecialidades.php?CodigoEspecialidad='.$Registro["CodigoEspecialidad"].'">Editar</td>
           <td><a href="#" onclick="Preguntar('.$Registro ["CodigoEspecialidad"].')">Eliminar</a></td>
       </tr>'; 
    } // Fin del ciclo del listado de proyectos
    echo '</table>';
 }
?>
<script type="text/javascript">
   function Preguntar(CodigoEspecialidad)
   {
      if (confirm("¿Está seguro de eliminar la especialidad? con codigo"+CodigoEspecialidad+"?"))
      {
         window.location.href = "Especialidades.php?CodigoEspecialidad="+CodigoEspecialidad;
      }
   }
</script>