<?php

class Talaba
{
    public $ism;
    public $familiyasi;
    public $age;
    public $group;
    public function getKurs($getBaho){
        if($getBaho >= 60){
            echo "Sizning ballingiz $getBaho siz o'tingiz lekin yaxshi tayyorlaning bu bo'lmaydi dangasasiz; $getBaho <br>";
        }else if ($getBaho >= 71){
            echo "Sizning balingiz $getBaho ga teng siz bemalol kursdan kursga utasiz! <br>";
        }else if ($getBaho >= 90){
            echo "Sizning balingiz $getBaho ga teng siz kursdan kursga utasiz! Oldindan <br>";
        }
    }
}

$Talabalar =  new Talaba();
$Talabalar->ism = "Bekzot";
$Talabalar->familiyasi = "Babjanov";
$Talabalar->group = "653-22-patok";
$Talabalar->age = 21;
echo "Sizning ismingiz ". $Talabalar->ism . "<br>";
echo "Familyangiz: ". $Talabalar->familiyasi . "<br>";
echo "Yoshingiz ". $Talabalar->age . "<br>";
echo "Guruhingiz: ". $Talabalar->group . "<br>";
echo "Siz o'tish ballaringiz ". $Talabalar->getKurs(61) . "<br>";