<?php
include("bd.php");

$ConsultaE="select * from especialidad where CodigoEspecialidad='".$Registro
["CodigoEspecialidad"]."'";

$ResultadoE=False;
 try{
    $ResultadoE =mysqli_query($Conexion,$ConsultaE);
    }
    catch(Exception $e)
       {$Mensaje="No se pudo consultar las especialidad";
        //$error=$e->getMessage();
        print $e->getMessage();
        //print $Resultado;
       }
 
 if($ResultadoE == false ) {$Mensaje="No se pudo consultar la especialidad";
               //die($mysqli_error($Conexion));
            }
 else{ 
    
    $RegistroE=$ResultadoE->fetch_assoc();
    echo $RegistroE["NombreEspecialidad"];   
 }
?>