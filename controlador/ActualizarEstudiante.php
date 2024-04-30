<?php
//echo_$_POST["ProyectoEstudiante"];

 include("bd.php");
if (!empty($_GET["CodigoEstudiante"])){
    $Consulta = "select * from estudiante where CodigoEstudiante = ".$_GET["CodigoEstudiante"];
    $Resultado = False;
  try{
    $Resultado = mysqli_query($Conexion,$Consulta);}
    catch(Exception $e)
       {
        $Mensaje="No se pudo consultar el estudiante con codigo";
        //.$_GET["CodigoEstudiante"];
        //$error=$e->getMessage();
        print $e->getMessage();
        //print $Resultado;
       }
 
 if($Resultado == false ) {$Mensaje="No se pudo consultar el 
  estudiante con codigo".$_GET["CodigoEstudiante"];
               //die($mysqli_error($Conexion));
            }
 else{ $Mensaje="Se pudo consultar el estudiante con codigo";
  //$_GET["CodigoEstudiante"];
  $Registro=$Resultado->fetch_assoc();
}
   
}


else if (!empty($_POST["CodigoEstudiante"]) && !empty($_POST["PrimerApellido"]) && !empty($_POST["Curso"]) &&  !empty($_POST["Especialidadestudiante"]) && !empty($_POST["ProyectoEstudiante"])) {
  $CodigoEstudiante = $_POST["CodigoEstudiante"];
  $PrimerNombreestudiante = $_POST["PrimerNombre"];
  $SegundoNombreestudiante = $_POST["SegundoNombre"];
  $PrimerApellidoestudiante = $_POST["PrimerApellido"];
  $SegundoApellidoestudiante = $_POST["SegundoApellido"];
  $Cursoestudiante = $_POST["Curso"];
  $Especialidadestudiante = $_POST["Especialidadestudiante"];
  $ProyectoEstudiante = $_POST["ProyectoEstudiante"];
  $FechaNacimiento= $_POST["FechaNacimiento"];
  
  $Consulta='UPDATE estudiante SET CodigoEstudiante = "'.$CodigoEstudiante.'", PrimerNombre = "'.$PrimerNombreestudiante.'", SegundoNombre =" '.$SegundoNombreestudiante.'", PrimerApellido ="'.$PrimerApellidoestudiante.'", SegundoApellido ="'.$SegundoApellidoestudiante.'", Curso ="'.$Cursoestudiante.'", CodigoEspecialidad ='.$Especialidadestudiante.', CodigoProyecto ='.$ProyectoEstudiante.', FechaNacimiento = "'.$FechaNacimiento.'" WHERE estudiante.CodigoEstudiante = '.$_POST["CodigoActual"];
  
  
    echo $Consulta;

  $Resultado = False;
  try{
    $Resultado = mysqli_query($Conexion,$Consulta);}
    catch(Exception $e)
       {
        $Mensaje="nose pudo actualizar el estudiante por error en los datos";
        //$error=$e->getMessage();
        print $e->getMessage();
        //print $Resultado;
       }
 
 if($Resultado == false ) {$Mensaje="No se pudo actualizar el estudiante";
               //die($mysqli_error($Conexion));
            }
 else{ $Mensaje="El estudiante se actualizó correctamente";
       header('Location: Estudiantes.php');
}
   }//Fin del if
else{
    $Mensaje="El codigo, Primer nombre, Primer Apellido, Curso, Especialidad y el nombre del estudiante  es obligatorio";
    }
echo "<h3>".$Mensaje."</h3>";

//$EstudianteActualizando=$Resultado->fetch_assoc();
//echo $EstudianteActualizando["NombreEspecialidad"];
?>