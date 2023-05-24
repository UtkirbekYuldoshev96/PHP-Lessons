<?php

class Students
{
    public $name;
        public function PersonInfo($age, $group){
            echo "Yoshim $age va guruhim $group";
        }

}

$jago = new Students();
$jago->name = "Jahongir";
echo "<br>";

echo $jago->name;
$bek = new Students();
$bek->name = "Bekmuhhammad ";
echo "<br>";
echo $bek->name;
echo $bek->PersonInfo(24, "FF_T-2022");
echo "<br>";

$utkirbek = new Students();
echo $utkirbek->name = "Mening ism utkirbek! <br>";
echo $utkirbek->PersonInfo(26, "653-22-AKT S KT");
?>