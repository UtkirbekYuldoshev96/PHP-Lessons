<?php

class Index{
    public $name;
    private $age;
    public $number;
    public function __construct($name, $namber)
    {
        $this->name = $name;
        $this->number = $namber;
    }

    public function getMetod(){
        return "Asslomu allaykum dasturchilar!";
    }

    public function getNambers(){
        return "Get Nambers olindi!";
    }

    public function getAge($age){
        return "Yoshingiz $age kirgansiz!";
    }
}

$index1 = new Index("TATU", "1995");

?>