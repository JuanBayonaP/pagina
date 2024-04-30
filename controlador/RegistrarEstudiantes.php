<?php
if (!empty($_POST["CodigoEstudiante"]) && !empty($_POST["PrimerApellidoestudiante"]) && !empty($_POST["Cursoestudiante"]) &&  !empty($_POST["Especialidadestudiante"]) && !empty($_POST["ProyectoEstudiante"])) {
    $CodigoEstudiante = $_POST["CodigoEstudiante"];
    $PrimerNombreestudiante = $_POST["PrimerNombreestudiante"];
    $SegundoNombreestudiante = $_POST["SegundoNombreestudiante"];
    $PrimerApellidoestudiante = $_POST["PrimerApellidoestudiante"];
    $SegundoApellidoestudiante = $_POST["SegundoApellidoestudiante"];
    $Cursoestudiante = $_POST["Cursoestudiante"];
    $Especialidadestudiante = $_POST["Especialidadestudiante"];
    $ProyectoEstudiante = $_POST["ProyectoEstudiante"];
    $FechaNacimiento= $_POST["FechaNacimiento"];
    

    include("bd.php");
    $Consulta="INSERT INTO estudiante (CodigoEstudiante ,PrimerNombre, SegundoNombre , PrimerApellido, SegundoApellido, Curso , CodigoEspecialidad , CodigoProyecto ,FechaNacimiento)
    VALUES ('".$CodigoEstudiante."', '".$PrimerNombreestudiante."', '".$SegundoNombreestudiante."', '".$PrimerApellidoestudiante."', '".$SegundoApellidoestudiante."', '".$Cursoestudiante."', '".$Especialidadestudiante."', '".$ProyectoEstudiante."', '".$FechaNacimiento."')";
  
    //echo $Consulta;

  
  try{
    $Resultado = mysqli_query($Conexion,$Consulta);}
    catch(Exception $e)
       {
        $Mensaje="No se pudo registrar el estudiante por error en los datos";
        //$error=$e->getMessage();
        print $e->getMessage();
        //print $Resultado;
       }
 
 if($Resultado == false ) {$Mensaje="No se pudo registrar el estudiante";
               //die($mysqli_error($Conexion));
            }
 else{ $Mensaje="El estudiante se registró correctamente";}
   }//Fin del if
else{
    $Mensaje="El codigo, Primer nombre, Primer Apellido, Curso, Especialidad y el nombre del estudiante  es obligatorio";
    }
echo "<h3>".$Mensaje."</h3>";
?>