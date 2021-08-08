<?php
    $archivo = fopen("datos.txt", "rb");
    $contenidoArchivo = fread($archivo, filesize("datos.txt"));
    $participantes = explode("//", $contenidoArchivo);  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados TRIVIA</title>
</head>
<body>
    <h1>Resultados de la trivia</h1>
    <?php 
        foreach ($participantes as $key => $p) {
            echo "<p>".$p."</p>";
        }
    ?>
</body>
</html>