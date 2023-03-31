<?php

    $textos = ["Hola1", "Hola2", "Hola3"];
?>
<!DOCTYPE html>
<html>
    <head lang="es">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Html con Php</title>
    </head>
    <body>
        <h1>HOLA MUNDO</h1>
        <?php foreach($textos as $texto) { ?>
            <h1><?php $texto ?></h1>
        <?php } ?>
    </body>
</html>