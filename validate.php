<?php
$userName = $_POST["userName"];
$nameRegExp = '/^(?=.{3,18}$)[a-zñáéíóúA-ZÑ](\s?[a-zñáéíóúA-ZÑ])*$/';
$nameMaxCharacters = 35;
$userEmail = $_POST["userEmail"];

try{
    if(!isValid($userName, $nameRegExp, $nameMaxCharacters) || filter_var($email, FILTER_VALIDATE_EMAIL)){
        throw new Exception('Ups! Datos incorrectos...');
    }
    header("Location: trivia.php?name=".$userName."&email=".$userEmail);
}catch(Exception $e){
    header("Location: index.php?message=".$e->getMessage());
}

function isValid($field, $regExp, $maxCharacters){
    $isValid = false;
    if(empty($field)) {
        $isValid = false;
    }else if(strlen($field) > $maxCharacters) {    
        $isValid = false;
    }else if(!preg_match($regExp, $field)){   
        $isValid = false;
    }else{
        $isValid = true;
    }
    return $isValid;
}