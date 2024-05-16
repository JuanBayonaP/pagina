<?php
echo '
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="/Bayona_php1/CSS/estilo.css">
</head>
<body>

<ul>
<li><a href="/Bayona_php1">Inicio</a></li>
<li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Especialidad</a>
    <div class="dropdown-content">
      <a href="/Bayona_php1/vista/Especialidades.php">Listar Especialidad</a>
      <a href="/Bayona_php1/vista/RegistroEspecialidades.php">Registrar Especialidad</a>
    </div>
  </li>

  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Estudiante</a>
    <div class="dropdown-content">
      <a href="/Bayona_php1/vista/Estudiantes.php">Listar Estudiante</a>
      <a href="/Bayona_php1/vista/RegistroEstudiante.php">Registrar Estudiante</a>
    </div>
  </li>

  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Proyecto</a>
    <div class="dropdown-content">
      <a href="/Bayona_php1/vista/Proyectos.php">Listar Proyecto</a>
      <a href="/Bayona_php1/vista/RegistroProyectos.php">Registrar Proyecto</a>
    </div>
  </li>
  
  
 
</ul>';

