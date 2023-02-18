<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>if 13</title>
</head>
<body>
<form action="if13.php" method="get">
    <label>
        Qiymat kiring:
        <input type="text" name="a"><br>
    </label>
    <label>
        Qiymat kiring:
        <input type="text" name="b"> <br>
    </label>
    <label>
        Qiymat kiring:
        <input type="text" name="c"> <br>
    </label>
    <input type="submit" value="Jo'natish">
</form>

<?php
if (isset($_GET['a'],$_GET['b'],$_GET['c'])){
    $a = $_GET['a'];
    $b = $_GET['b'];
    $c = $_GET['c'];
    $k = null;
    $min = null;
    $maks = null;
    if (is_numeric($a) and is_numeric($b) and is_numeric($c)){

        if($a<$b or $a<$c){
            $min = $a;
            echo "A= " . $min . "<br>";
        }elseif ($b<$c or $b<$a){
            $min = $b;
            echo "B= " . $min . "<br>";
        }elseif ($c<$a or $c<$b){
            $min= $c;
            echo "C= " . $min . "<br>";
        }

        if($a>$b or $a>$c){
            $maks = $a;
            echo "A= " . $maks . "<br>";
        }elseif ($b>$c or $b>$a){
            $maks = $b;
            echo "B= " . $maks . "<br>";
        }elseif ($c>$a or $c>$b){
            $maks= $c;
            echo "C= " . $maks . "<br>";
        }
        else{
            echo "Uchala son teng u xolda!";
        }
        if ($min>$maks){
            $k = "Natija  min = " . $min;
        }else{
            $k = "Natija  max = " . $maks;
        }
        echo $k;
    }else{
        echo "Siz kiritgan qiymatlar topilmadi!";
    }
}
?>
</body>
</html>