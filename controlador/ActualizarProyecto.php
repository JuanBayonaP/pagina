<?php
//echo_$_POST["ProyectoEstudiante"];

 include("bd.php");
if (!empty($_GET["CodigoProyecto"])){
    $Consulta = "select * from proyecto where CodigoProyecto = ".$_GET["CodigoProyecto"];
    $Resultado = False;
  try{
    $Resultado = mysqli_query($Conexion,$Consulta);}
    catch(Exception $e)
       {
        $Mensaje="No se pudo consultar el Proyecto con codigo";
        //.$_GET["CodigoEstudiante"];
        //$error=$e->getMessage();
        print $e->getMessage();
        //print $Resultado;
       }
 
 if($Resultado == false ) {$Mensaje="No se pudo consultar el 
  proyecto con codigo".$_GET["CodigoProyecto"];
               //die($mysqli_error($Conexion));
            }
 else{ $Mensaje="Se pudo consultar el proyecto con codigo";
  //$_GET["CodigoEstudiante"];
  $Registro=$Resultado->fetch_assoc();
}
   
}


else if (!empty($_POST["CodigoProyecto"]) && !empty($_POST["NombreProyecto"]) && !empty($_POST["Resumen"]) &&  !empty($_POST["FechaRegistro"])) {
  $CodigoProyecto = $_POST["CodigoProyecto"];
  $NombreProyecto = $_POST["NombreProyecto"];
  $Resumen = $_POST["Resumen"];
  $FechaRegistro = $_POST["FechaRegistro"];
  
  $Consulta= 'UPDATE proyecto SET CodigoProyecto = "'.$CodigoProyecto.'", NombreProyecto = "'.$NombreProyecto.'", Resumen = "'.$Resumen.'", FechaRegistro = "'.$FechaRegistro.'" WHERE proyecto.CodigoProyecto = '.$_POST["CodigoActual"];
  
  
    echo $Consulta;

  $Resultado = False;
  try{
    $Resultado = mysqli_query($Conexion,$Consulta);}
    catch(Exception $e)
       {
        $Mensaje="nose pudo actualizar el proyecto por error en los datos";
        //$error=$e->getMessage();
        print $e->getMessage();
        //print $Resultado;
       }
 
 if($Resultado == false ) {$Mensaje="No se pudo actualizar el proyecto";
               //die($mysqli_error($Conexion));
            }
 else{ $Mensaje="El proyecto se actualizó correctamente";
       header('Location: Proyectos.php');
}
   }//Fin del if
else{
    $Mensaje="El codigo,el nombre del proyecto,el resumen y la fecha es obligatorio";
    }
echo "<h3>".$Mensaje."</h3>";

//$EstudianteActualizando=$Resultado->fetch_assoc();
//echo $EstudianteActualizando["NombreEspecialidad"];
?>