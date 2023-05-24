<?php

class Phone
{
    public $name;
    public $age;
    public $year;
    public function __construct($name, $age, $year)
    {
        echo $name .  $age .  $year;
    }

}

//Mobil class ochildi va Telefon class extend qilib olindi
class Mobil extends Phone {
    public $call;
    public function __construct($call)
    {
        if ($this->call == 94 or $this->call == 93 ){
            echo "$this->name aloqa operator bilan bog'laning!";
        }elseif ($this->call == 66 or $this->call == 69){
            echo "$this->name aloqa operatori bilan aloqa chiqasiz!";
        }elseif($this->call == 91 or $this->call == 90){
            echo "$this->name aloqa operatori bilan aloqa chiqasiz!";
        }elseif($this->call == 97 or $this->call == 98){
            echo "$this->name aloqa operatori bilan aloqa chiqasiz!";
            echo "";
        }
    }
}
$phone  =  new Phone();
$phone->year = 2015;
$phone->age = 2;
$phone->name = "Samsung A10";
$telefon =  new Mobil(95);




