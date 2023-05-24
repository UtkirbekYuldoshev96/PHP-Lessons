<?php

class Construktor
{
    public $nama;
    public function __construct($sana, $phone){
            echo "Sizning sana $sana; raqamingiz $phone";
            echo "<br>";
            echo $this->test();
    }

    public function test(){
        echo "<b>Test markazida test bo'lmoqda sen </b>";
        echo $this->nama = "<b>Muhiddin</b>";
    }
}


$malumot = new Construktor(96, "94 526 98 96");
?>