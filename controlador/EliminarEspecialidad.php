<?php

//echo $_GET["CodigoEspecialidad"];
if(!empty($_GET["CodigoEspecialidad"])){
include("bd.php");
$CodigoEspecialidad = $_GET["CodigoEspecialidad"];
$ConsultaDEL="DELETE FROM especialidad WHERE especialidad.CodigoEspecialidad = ".$CodigoEspecialidad;

//echo $ConsultaDel;

$ResultadoDEL=False;
 try{
    $ResultadoDEL =mysqli_query($Conexion,$ConsultaDEL);
    }
    catch(Exception $e)
       {$Mensaje="No se pudo eliminar la especialidad con codigo:".$CodigoEspecialidad;
        //$error=$e->getMessage();
        print $e->getMessage();
        //print $Resultado;
       }
 
 if($ResultadoDEL == false ) {$Mensaje="No se pudo eliminar el especialidad con codigo".$CodigoEspecialidad;
               //die($mysqli_error($Conexion));
            }
 else{ $Mensaje="se pudo eliminar la especialidad con codigo".$CodigoEspecialidad;
   }
echo $Mensaje;
} //Fin si externo
?>