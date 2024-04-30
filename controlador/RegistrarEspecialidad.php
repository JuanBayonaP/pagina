<?php
if (!empty($_POST["CodigoEspecialidad"]) &&  !empty($_POST["NombreEspecialidad"])) {
    $CodigoEspecialidad = $_POST["CodigoEspecialidad"];
    $NombreEspecialidad = $_POST["NombreEspecialidad"];
    

 include("bd.php");
 $Consulta="INSERT INTO  especialidad  (CodigoEspecialidad, NombreEspecialidad)
  VALUES ('".$CodigoEspecialidad."','".$NombreEspecialidad."');";
  $Resultado=False;
  try{
    $Resultado =mysqli_query($Conexion,$Consulta);}
    catch(Exception $e)
       {
        $Mensaje="No se pudo registrar la especialidad por error en los datos";
        //$error=$e->getMessage();
        //print $e->getMessage();
        //print $Resultado;
       }
 
 if($Resultado == false ) {$Mensaje="No se pudo registrar la especialidad";
               //die($mysqli_error($Conexion));
            }
 else{ $Mensaje="La especialidad se registró correctamente";}
   }//Fin del if
else{
    $Mensaje="El codigo y el nombre de la especialidad es obligatorio";
    }
echo $Mensaje;
?>