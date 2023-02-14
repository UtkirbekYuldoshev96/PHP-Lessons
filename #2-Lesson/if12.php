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
    <input type="submit" value="Jo'natish">
</form>

<?php
if (isset($_GET['a'],$_GET['b'])){
    $a = $_GET['a'];
    $b = $_GET['b'];
    $c = null;
    if (is_numeric($a) and is_numeric($b)){
        if ($a != $b){
            if ($a>$b){
                $c = $a;
            }else{
                $c = $b;
            }
        }
        if ($a == $b){
            $c = 0;
        }
        echo "Natija = " . $c;
    }
}
?>
</body>
</html>