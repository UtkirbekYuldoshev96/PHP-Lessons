<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>if 6</title>
</head>
<body>
<form action="if6.php" method="get">
    Qiymat kiriting =
    <input type="text" name="a"><br>
    Qiymat kiriting =
    <input type="text" name="b"><br>
    <input type="submit" value="Jo'natish"><br>
</form>
<?php
if (isset($_GET['a'],$_GET['b'])){
    $a = $_GET['a'];
    $b = $_GET['b'];
    if (is_numeric($a) and is_numeric($b)){
        if ($a>$b){
            echo "A = ". $a;
        }elseif ($b>$a){
            echo "B = ". $b;
        }else{
            echo "o'zgaruvchilarda katta yoki kichik amallar topilmadi!";
        }
    }else{
        echo "O'zgaruvchilarga ma'lumot kiritmadingiz!";
    }
}
?>
</body>
</html>