<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
  
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form>
                <div class="mb-3">
                    <label for="num1" class="form-label">N&uacute;mero 1</label>
                    <input type="text" class="form-control" id="num1">
                </div>
                <div class="mb-3">
                    <label for="num2" class="form-label">N&uacute;mero 2</label>
                    <input type="text" class="form-control" id="num2">
                </div>
                <div class="col-auto">
                    <button id="enviar" type="button" class="btn btn-primary mb-3">Sumar</button>
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <div id="resultado"></div>
        </div>
    </div>
</div>


<script src="js/scripts.js"></script>
</body>
</html>