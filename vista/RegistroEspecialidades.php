<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Especialidad</title>
</head>
<body>
    <h1>Registro de Especialidad</h1>
    <?php Include("../controlador/RegistrarEspecialidad.php");?>
    <form action="RegistroEspecialidades.php" method="post">
        <label for="CodigoEspecialidad">Codigo de Especialidad</label>
        <input type="number"name="CodigoEspecialidad"id="CodigoEspecialidad"><br>
        <label for="NombreEspecialidad">Nombre de la Especialidad:</label>
        <input type="text"name="NombreEspecialidad"id="NombreEspecialidad"><br>
        <button type="submit">Registrar Especialidad</button>
    </form>
</body>
</html>