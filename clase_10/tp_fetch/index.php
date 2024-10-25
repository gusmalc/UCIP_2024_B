<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <div class="container">
        <div id="top">
            <h1>USUARIOS</h1>
            <div>
                <div id="btn_carga" class="btn btn-primary">Cargar Lista</div>
            </div>
        </div>

        <div id="respuesta">
            <table id="tabla_usuarios" class="table table-striped table-hover table-dark">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">EMAIL</th>

                    </tr>
                </thead>
                <tbody id="cuerpo">


                </tbody>
            </table>
        </div>

        <div id="ficha">
            
        </div>

    </div>
    <script src="js/scripts.js"></script>
</body>

</html>