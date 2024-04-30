<?php
if (!empty($_POST["Codigo"]) &&  !empty($_POST["NombreProyecto"]) && !empty($_POST["Resumen"]) &&  !empty($_POST["FechaRegistro"])) {
    $Codigo = $_POST["Codigo"];
    $NombreProyecto = $_POST["NombreProyecto"];
    $Resumen = $_POST["Resumen"];
    $FechaRegistro = $_POST["FechaRegistro"];



 include("bd.php");
 $Consulta="INSERT INTO  proyecto  (CodigoProyecto, NombreProyecto, Resumen, FechaRegistro)
  VALUES ('".$Codigo."','".$NombreProyecto."','".$Resumen."','".$FechaRegistro."');";
  $Resultado=False;
  try{
    $Resultado =mysqli_query($Conexion,$Consulta);}
    catch(Exception $e)
       {
        $Mensaje="No se pudo registrar el codigo por error en los datos";
        $error=$e->getMessage();
        print $e->getMessage();
        print $Resultado;
       }
 
 if($Resultado == false ) {$Mensaje="No se pudo registrar El proyecto";
               //die($mysqli_error($Conexion));
            }
 else{ $Mensaje="El proyecto se registró correctamente";}
    }//Fin del if
else{
    $Mensaje="El codigo y el nombre de la Proyecto es obligatorio";
    }
echo $Mensaje;
?>