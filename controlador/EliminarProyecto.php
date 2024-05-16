<?php
if(!empty($_GET["CodigoProyecto"])){
include("bd.php");
$CodigoProyecto = $_GET["CodigoProyecto"];
$Consultapro="DELETE FROM proyecto WHERE proyecto.CodigoProyecto = ".$CodigoProyecto;

//echo $ConsultaDel;

$Resultadopro=False;
 try{
    $Resultadopro =mysqli_query($Conexion,$Consultapro);
    }
    catch(Exception $e)
       {$Mensaje="No se pudo eliminar el proyecto con codigo:".$CodigoProyecto;
        //$error=$e->getMessage();
        print $e->getMessage();
        //print $Resultado;
       }
 
 if($Resultadopro == false ) {$Mensaje="No se pudo eliminar el proyecto con codigo".$CodigoProyecto;
               //die($mysqli_error($Conexion));
            }
 else{ $Mensaje="se pudo eliminar el proyecto con codigo".$CodigoProyecto;
   }
echo $Mensaje;
} //Fin si externo
?>