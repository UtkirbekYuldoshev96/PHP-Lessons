<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>if 3</title>
</head>
<body>
<form action="if3.php" method="get">
    Qiymat kiriting =
    <input type="text" name="a"><br>
    <input type="submit" value="Jo'natish"><br>
</form>
<?php
    if (isset($_GET['a'])){
        $a = $_GET['a'];
        if (is_numeric($a)){

            if ($a>0){
                $a++;
                echo "Natija ". $a;
            }elseif ($a == 0){
                echo "Natija = 10 teng";
            }else{
                echo "Natija kamayadi ". $a - 2;
            }
        }
    }
?>
</body>
</html>