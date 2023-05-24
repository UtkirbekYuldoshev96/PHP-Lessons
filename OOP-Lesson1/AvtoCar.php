<?php

// class create
class AvtoCar
{
    public $name;
    public $age;
    public $color;
    public $model;
        public function getModel($pace){
            if ($pace >= 60){
                echo "Tezlik $pace dan oshmaslik kerak! <br>";
            }
            if ($pace >= 100){
                echo "Bu tezlik $pace bilan katta yo'llarda yurush mumkin! <br>";
            }
            if ($pace >= 150){
                echo "Qonun qoydaga to'g'ri kelmaydi sizning jarima maydoniga quyilishi mumkin! <br>";
            }
        }
}
// class end

$avto = new AvtoCar();
echo $avto->name = "Nexio " . "<br>";
echo $avto->age = 2015 . "<br>";
echo $avto->color = "oq" . "<br>";
echo $avto->model = "Nexio 3 2019 yildan boshlab chiqa boshlagan!" . "<br>";
echo $avto->getModel(180);

?>


