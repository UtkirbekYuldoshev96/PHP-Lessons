<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>if 2</title>
</head>
<body>
<form action="if2.php" method="get">
    Qiymat kiriting =
    <input type="text" name="a"><br>
    <input type="submit" value="Jo'natish"><br>
</form>
<?php
    if (isset($_GET['a'])){
        $a = $_GET['a'];

        if (is_numeric($a)){
            if ($a > 0){
                $a++;
                echo "Natija ". $a;
            }else if( $a < 0){
                echo "2 ga kamaydi ". $a - 2;
            }
        }
    }
?>
</body>
</html>