<?php 
    include "../config.php"; 
    include "enviar_email.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   
<link rel="stylesheet" href="<?php echo $site_url . "css/general.css"; ?>">

</head>
<body>
<?php include "../common/menu.php"; ?>  




    <div class="container">
        <h1>Contacto</h1>


        <?php 
        if($enviado == "si"){
        
        ?>

        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Gracias por tu consulta !</strong> Nos pondremos en cintact a la brevedad.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        <?php 
        
        }
        ?>



        <div class="row">

            <div class="col-md-6">
                <?php include "sections/formulario.php"; ?>
            </div>
            <div class="col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3144.1626420673824!2d-57.553130525449916!3d-37.99666667193028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9584dc02326fc37b%3A0x28354bf2f31d1fc6!2sUCIP%20Uni%C3%B3n%20del%20Comercio%2C%20la%20Industria%20y%20la%20Producci%C3%B3n%20de%20Mar%20del%20Plata!5e0!3m2!1ses-419!2sar!4v1732313159981!5m2!1ses-419!2sar" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
       
    </div>
    




<div class="container">

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>