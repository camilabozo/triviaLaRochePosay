<?php 

class Competitor{
    private $name;
    private $email;
    private $correctAnswers;
    private $time;

    public function __construct($name, $email, $correctAnswers, $time){
        $this->name = $name;
        $this->email = $email;
        $this->correctAnswers = $correctAnswers;
        $this->time = $time;
    }

    public function getName(){
        return $this->name;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getCorrectAnswers(){
        return $this->correctAnswers;
    }

    public function getTime(){
        return $this->time;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function setCorrectAnswers($correctAnswers){
        $this->correctAnswers = $correctAnswers;
    }

    public function setTime($time){
        $this->time = $time;
    }
}



