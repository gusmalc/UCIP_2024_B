<?php include "../config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .xx{
            fill: #f00;
        }
        .face_content{
            width: 50px;
        }
        .box_content{
            display: flex;
            justify-content: flex-end;
        }
    </style>
<link rel="stylesheet" href="<?php echo $site_url . "css/general.css"; ?>">

</head>
<body>
<?php include "../common/menu.php"; ?>  
<?php //include "sections/portada.php"; ?>


<idv>
    <div>
        <h1>Entrgas</h1>
       
    </div>
    
</idv>



<div class="container">
<div class="box_content">
    <div class="face_content" >
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path class="xx" d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z"/></svg>
    </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>