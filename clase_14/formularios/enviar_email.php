<?php

//global $enviado;
$enviado = "no";


// definir variables
$nombre = $email = $telefono = $consulta = "";

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = test_input($_POST["nombre"]);
  $email = test_input($_POST["email"]);
  $telefono = test_input($_POST["telefono"]);
  $consulta = test_input($_POST["consulta"]);
  $asunto = "Consulta desde form web";
  $enviado = "si";
}

if($enviado == "si"){

$para  = 'aaaa@aaaa.com';// . ', '; // atención a la coma
//$para .= 'wez@example.com';

// título
$titulo = 'Consulta';

// mensaje
$mensaje = "
<html>
<head>
 <title>$titulo</title>
</head>
<body>
<hr>
<h3> $titulo</h3>
  <p><b>Nombre:</b>  $nombre</p>
  
 <p><b>Mail:</b>  $email</p>
 <p><b>Telefono:</b>  $telefono</p>
 <p><b>Consulta:</b> $consulta</p>
 <hr>
</body>
</html>
";




$headers = 'From: ' . "$nombre " . "<$email>" . "\r\n" .
    'Reply-To: '.$email. "\r\n" .
    'X-Mailer: PHP/' . phpversion() . "\r\n" .
    'Content-Type: text/html; charset=UTF-8' . "\r\n";



// Enviarlo
//mail($para, $asunto, $mensaje, $headers);

echo "ok";
}
 ?>