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
    <h1>contacto</h1>

    <div class="row">
        <div class="col-md-6">
        <form id="form_contacto">

<div class="mb-3">
  <label for="nombre" class="form-label">* Nombre</label>
  <input type="text" class="form-control" id="nombre" name="nombre" required>
</div>
<div class="mb-3">
  <label for="email" class="form-label">* Email</label>
  <input type="email" class="form-control" id="email" name="email" required>
</div>
<div class="mb-3">
  <label for="telefono" class="form-label">Tel&eacute;fono</label>
  <input type="text" class="form-control" id="telefono" name="telefono">
</div>
<div class="mb-3">
  <label for="consulta" class="form-label">* Consulta</label>
  <textarea class="form-control" id="consulta" rows="3" name="consulta" required></textarea>
</div>

<div class="mb-3">
  <label for="suma" class="form-label">2 + 3</label>
  <input type="text" class="form-control" id="suma" name="suma">
</div>

<div class="mb-3">
<button id="btn_enviar" type="button" class="btn btn-primary mb-3">ENVIAR</button>
</div>

</form>
        </div>
    </div>
</div>


<script src="js/scripts.js"></script>
    
</body>
</html>