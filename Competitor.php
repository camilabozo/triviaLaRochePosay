<?php 

class Competitor{
    private $name;
    private $email;
    private $correctAnswers;
    private $employedTime;
    private $endTime;

    public function __construct($name, $email, $correctAnswers, $time, $end_time){
        $this->name = $name;
        $this->email = $email;
        $this->correctAnswers = $correctAnswers;
        $this->employedTime = $time;
        $this->endTime = $end_time;
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

    public function getEmployedTime(){
        return $this->employedTime;
    }

    public function getEndTime(){
        return $this->endTime;
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

    public function setEmployedTime($time){
        $this->employedTime = $time;
    }

    public function setEndTime($end_time){
        $this->endTime = $end_time;
    }
}



