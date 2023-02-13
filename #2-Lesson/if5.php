<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>if 5</title>
</head>
<body>
<form action="if5.php" method="get">
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
        $Musbat = 0;
        $Manfiy = 0;
        if (is_numeric($a) and is_numeric($b) and is_numeric($c)){
            if ($a>0){
                $Musbat +=$a;
                echo "A=".$Musbat . "<br>";
            }
            if ($a<0){
                $Manfiy +=$a;
                echo "A=".$Manfiy . "<br>";
            }
            if ($b>0 ){
                $Musbat +=$b;
                echo "B=".$Musbat . "<br>";
            }
            if ($b<0){
                $Manfiy +=$b;
                echo "B=".$Manfiy . "<br>";
            }
            if ($c>0 ){
                $Musbat +=$c;
                echo "C=".$Musbat . "<br>";
            }
            if ($c<0){
                $Manfiy +=$c;
                echo "A=".$Manfiy . "<br>";
            }
            echo " <br><h3>Yig'indi = ".$Musbat. "</h3>";
            echo " <h3>Yig'indi = ".$Manfiy. "</h3>";
        }else{
            echo "O'zgaruvchilar xato bor yoki ma'lumot kiritilmadi!";
        }
    }else{
        echo "<h1 align='center'>Siz xech qanaqa ma'lumot kiritmadingiz!</h1>";
    }
?>
</body>
</html>