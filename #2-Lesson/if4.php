<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>if 4</title>
</head>
<body>
<form action="if4.php" method="get">
    Qiymat kiriting =
    <input type="text" name="a"><br>
    Qiymat kiriting =
    <input type="text" name="b"><br>
    Qiymat kiriting =
    <input type="text" name="c"><br>
    <input type="submit" value="Jo'natish"><br>
</form>
<?php
    if (isset($_GET['a'],$_GET['b'],$_GET['c'])){
        $a = $_GET['a'];
        $b = $_GET['b'];
        $c = $_GET['c'];
        $summa = 0;
        if (is_numeric($a) and is_numeric($b) and is_numeric($c)){
            if($a>0){
                $summa +=$a;
                echo "A=". $summa . "<br>";
            }
            if ($b>0){
                $summa +=$b;
                echo "B=". $summa. "<br>";
            }
            if ($c>0){
                $summa +=$c;
                echo "C=". $summa. "<br>";
            }else{
                echo "Xech qaysi natija qaytarmaydi!";
            }
            echo "\nYig'ilgan summa = ".$summa;
        }else{
            echo "O'zgaruvchilarga notug'ri ma'lumot kiritilgan!";
        }
    }
?>
</body>
</html>