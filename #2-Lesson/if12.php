<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>if 12</title>
</head>
<body>
<form action="if12.php" method="get">
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
    if (is_numeric($a) and is_numeric($b) and is_numeric($c)){
        if($a<$b and $a<$c){
            $k = $a;
            echo "A= " . $k . "<br>";
        }elseif ($b<$c and $b<$a){
            $k = $b;
            echo "B= " . $k . "<br>";
        }elseif ($c<$a and $c<$b){
            $k= $c;
            echo "C= " . $k . "<br>";

        }else{
            echo "Uchala son teng u xolda!";
        }
        echo "Natija = " . $k;
    }else{
        echo "Siz kiritgan qiymatlar topilmadi!";
    }
}
?>
</body>
</html>