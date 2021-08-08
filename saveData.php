<?php
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];

    $archivo = fopen("datos.txt", "a+");

    if($archivo == false){
        echo "Error al crear el archivo";
    }else{
        fwrite($archivo, $nombre." ".$email."//\r\n");

        fflush($archivo);
    }

    fclose($archivo);

?>