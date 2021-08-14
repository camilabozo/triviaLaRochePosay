<?php
$userName = $_POST["userName"];
$nameRegExp = '/^(?=.{3,35}$)[a-zñáéíóúA-ZÑ](\s?[a-zñáéíóúA-ZÑ])(\s?[a-zñáéíóúA-ZÑ])*$/';
$userEmail = $_POST["userEmail"];

try{
    if(!isValid($userName, $nameRegExp) || filter_var($email, FILTER_VALIDATE_EMAIL)){
        throw new Exception('Ups! Datos incorrectos...');
    }
    header("Location: trivia.php?name=".$userName."&email=".$userEmail);
}catch(Exception $e){
    header("Location: index.php?message=".$e->getMessage());
}

function isValid($field, $regExp){
    $isValid = false;
    if(empty($field)) {
        $isValid = false;
    }else if(!preg_match($regExp, $field)){   
        $isValid = false;
    }else{
        $isValid = true;
    }
    return $isValid;
}