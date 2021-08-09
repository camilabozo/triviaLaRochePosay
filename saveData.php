<?php
    $name = $_POST["userName"];
    $email = $_POST["userEmail"];
    $correct_answers = $_POST["correct_answers"];
    $archivo = fopen("data.txt", "a+");

    if($archivo == false){
        echo "Error al crear el archivo";
    }else{
        fwrite($archivo, $name."//".$email."//".$correct_answers."**\r\n");
        fflush($archivo);
    }

    fclose($archivo);
    header('Location: result.html');

?>