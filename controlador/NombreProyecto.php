<?php
include("bd.php");

$ConsultaP="select * from proyecto where CodigoProyecto='".$Registro
["CodigoProyecto"]."'";

$ResultadoP=False;
 try{
    $ResultadoP =mysqli_query($Conexion,$ConsultaP);
    }
    catch(Exception $e)
       {$Mensaje="No se pudo consultar el proyecto";
        //$error=$e->getMessage();
        print $e->getMessage();
        //print $Resultado;
       }
 
 if($ResultadoP == false ) {$Mensaje="No se pudo consultar el proyecto";
               //die($mysqli_error($Conexion));
            }
 else{ 
    
    $RegistroP=$ResultadoP->fetch_assoc();
    echo $RegistroP["NombreProyecto"];   
 }
?>