<?php
require "Competitor.php";
$file = fopen("data.txt", "rb");
$fileContent = fread($file, filesize("data.txt"));
$competitors = explode("**", $fileContent);
array_pop($competitors);
$competitorsArray = array();
foreach ($competitors as $c) { 
    $competitorData = explode("//", $c);
    $competitor = new Competitor($competitorData[0], $competitorData[1], $competitorData[2], random_int(0,60));
    array_push($competitorsArray, $competitor);
}

//creamos un array por cantidad de respuesas correctas
$competitorsWith0CorrectAnswers = array();
$competitorsWith1CorrectAnswers = array();
$competitorsWith2CorrectAnswers = array();
$competitorsWith3CorrectAnswers = array();
foreach ($competitorsArray as $c) { 
    switch ($c->getCorrectAnswers()) {
        case '0':
            array_push($competitorsWith0CorrectAnswers, $c);
            break;
        case '1':
            array_push($competitorsWith1CorrectAnswers, $c);
            break;
        case '2':
            array_push($competitorsWith2CorrectAnswers, $c);
            break;
        case '3':
            array_push($competitorsWith3CorrectAnswers, $c);
            break;
    }
}

//ordenamos cada uno de los arreglos
usort($competitorsWith0CorrectAnswers, "compareByTime");
usort($competitorsWith1CorrectAnswers, "compareByTime");
usort($competitorsWith2CorrectAnswers, "compareByTime");
usort($competitorsWith3CorrectAnswers, "compareByTime");

//mergear en orden los arreglos
$competitorsArray = array_merge($competitorsWith3CorrectAnswers, $competitorsWith2CorrectAnswers, $competitorsWith1CorrectAnswers, $competitorsWith0CorrectAnswers);

function compareByTime($competitorA, $competitorB){
    if ($competitorA->getTime() == $competitorB->getTime()) {
        return 0;
    }
    return ($competitorA->getTime() < $competitorB->getTime()) ? -1 : 1;
}