<?php $titulo = "Recetas"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
    h1{
        color: #f00;
    }
</style>
</head>
<body>
    <div class="container">
    <h1><?php echo $titulo; ?></h1>
    <hr>
        <div id="carga" class="btn btn-danger">CRAGA RECETA PIZZA</div>
        <div id="carga2" class="btn btn-danger">CRAGA RECETA EMPANADAS</div>

<div id="receta"></div>


    </div>
    

<script src="js/scripts.js"></script>
</body>
</html>