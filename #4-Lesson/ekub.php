<?php
//    function ekub($a,$b){
//        while ($a != $b){
//            if ($a > $b){
//                $a -= $b;
//            }else{
//                $b -= $a;
//            }
//            echo $a . "<br>";
//        }
//    }
//    echo ekub(5,21);


// static o'zgaruvchilar
function test(){
//    static o'zgaruvchi e'lon qilish
    static $son = 0;
    $son++;

    echo "<p>Funksiya ichida static o'zgaruvchi malumot ekranga chiqarilmoqda = $son</p>";
}

test();
test();
test();
test();
test();
test();
test();
test();
test();
?>