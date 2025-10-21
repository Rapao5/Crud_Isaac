<?php
    require("conexionBD.php");
    $conexion=abrir_conexion("localhost", "root", "", "isaac");
    $query="";
    mysqli_query($conexion,$query);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista items</title>
</head>
<body>
    <h1>Lista de items</h1>
    <?php
        
    ?>
</body>
</html>