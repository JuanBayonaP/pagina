<?php
//echo_$_POST["ProyectoEstudiante"];

 include("bd.php");
if (!empty($_GET["CodigoEspecialidad"])){
    $Consulta = "select * from especialidad where CodigoEspecialidad = ".$_GET["CodigoEspecialidad"];
    $Resultado = False;
  try{
    $Resultado = mysqli_query($Conexion,$Consulta);}
    catch(Exception $e)
       {
        $Mensaje="No se pudo consultar la especialidad con codigo";
        //.$_GET["CodigoEstudiante"];
        //$error=$e->getMessage();
        print $e->getMessage();
        //print $Resultado;
       }
 
 if($Resultado == false ) {$Mensaje="No se pudo consultar la 
  especialidad con codigo".$_GET["CodigoEspecialidad"];
               //die($mysqli_error($Conexion));
            }
 else{ $Mensaje="Se pudo consultar la especialidad con codigo";
  //$_GET["CodigoEspecialidad"];
  $Registro=$Resultado->fetch_assoc();
}
   
}


else if (!empty($_POST["CodigoEspecialidad"]) && !empty($_POST["NombreEspecialidad"])) {
  $CodigoEspecialidad = $_POST["CodigoEspecialidad"];
  $NombreEspecialidad = $_POST["NombreEspecialidad"];
  
  $Consulta='UPDATE especialidad SET CodigoEspecialidad = "'.$CodigoEspecialidad.'", NombreEspecialidad = "'.$NombreEspecialidad.'" WHERE especialidad.CodigoEspecialidad = '.$_POST["CodigoActual"];
  
  
    echo $Consulta;

  $Resultado = False;
  try{
    $Resultado = mysqli_query($Conexion,$Consulta);}
    catch(Exception $e)
       {
        $Mensaje="nose pudo actualizar la especialidad por error en los datos";
        //$error=$e->getMessage();
        print $e->getMessage();
        //print $Resultado;
       }
 
 if($Resultado == false ) {$Mensaje="No se pudo actualizar la especialidad";
               //die($mysqli_error($Conexion));
            }
 else{ $Mensaje="La especialidad se actualizó correctamente";
       header('Location: Especialidades.php');
}
   }//Fin del if
else{
    $Mensaje="El codigo y el nombre de la especialidad es obligatorio  es obligatorio";
    }
echo "<h3>".$Mensaje."</h3>";

//$EstudianteActualizando=$Resultado->fetch_assoc();
//echo $EstudianteActualizando["NombreEspecialidad"];
?>