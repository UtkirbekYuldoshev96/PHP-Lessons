<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>if 14</title>
</head>
<body>
<form action="if14.php" method="get">
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

        if ($a>$b){
            $min = $b;
        }else{ $min = $a;}

        if ($min>$c){$min = $c;}

        if ($a>$b){$maks = $a;
        }else{$maks = $b;}

        if ($maks<$c){$maks = $c;}
        echo "min = " . $min . " maks=" . $maks;
    }else{
        echo "Siz kiritgan qiymatlar topilmadi!";
    }
}
?>
</body>
</html>