<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>if 8</title>
</head>
<body>
<form action="if8.php" method="get">
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
        if($a>$b){
            echo "Son katta = ". $a . "<br>";
            echo "Son kichik = ". $b . "<br>";
        }elseif($b>$a){
            echo "Son katta = ". $b . "<br>";
            echo "Son kichik = ". $a . "<br>";
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