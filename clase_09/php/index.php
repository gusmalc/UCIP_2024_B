<?php  

$nombreUsuario = "Pedro";
$edad = 26;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="css/estilos.css"> -->
    <style>
        <?php include "css/estilos.css"; ?>
    </style>
</head>
<body>
    <?php include "menu.php"; ?>
    <?php include "contenido_home/portada.php"; ?>
    <h1>Hola PHP</h1>
    <h2><?php echo $nombreUsuario; ?></h2>

    <h3>Edad: <?php echo $edad; ?></h3>
</body>
</html>