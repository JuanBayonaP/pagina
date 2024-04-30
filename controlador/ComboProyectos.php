<?php
 include("bd.php");

 $ConsultaPro="SELECT * FROM proyecto";

 $ResultadoPro=False;
 try{
    $ResultadoPro =mysqli_query($Conexion,$ConsultaPro);
    }
    catch(Exception $e)
       {$Mensaje="No se pudo consultar los proyectos";
        //$error=$e->getMessage();
        print $e->getMessage();
        //print $Resultado;
       }
 
 if($ResultadoPro == false ) {$Mensaje="No se pudo registrar el proyecto";
               //die($mysqli_error($Conexion));
            }
 else{ 
    echo'<select name= "ProyectoEstudiante" id="ProyectoEstudiante">';
    while($RegistroPro=$ResultadoPro->fetch_assoc()){
      if ($Registro["CodigoProyecto"]==$RegistroPro["CodigoProyecto"]) {
         echo '<option value="'.$RegistroPro["CodigoProyecto"].'" selected>'.$RegistroPro["NombreProyecto"].'</option>'; 
               }
      else {echo '<option value="'.$RegistroPro["CodigoProyecto"].'">'.$RegistroPro["NombreProyecto"].'</option>'; }
    }  // Fin del ciclo del listado de proyectos
    echo '</select>';
 }

 
 
 


?>